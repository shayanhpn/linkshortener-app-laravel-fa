<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UpdateUserController extends Controller
{
    public function viewUpdateUser(User $id){
        if(auth()->user()->id == $id->id){
            return view('dashboard.update-user',['user' => $id]);
        }
        return back()->with('danger','شما مجاز به این عملیات نمی باشید');
    }
    public function updateUser(Request $request, User $user){
        $updateFields = $request->validate([
            'firstname' => ['required','max:20'],
            'lastname' => ['required' ,'max:20'],
            'phonenumber' => ['required','max:12'],
            'email' => ['required','email',Rule::unique('users')->ignore($user->id)],
        ],[
            'firstname.required' => 'وارد کردن نام الزامی است',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی است',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'ایمیل صحیح را وارد کنید',
            'email.unique' => 'این آدرس ایمیل قبلا توسط فرد دیگری انتخاب شده است',
            'phonenumber.required' => 'وارد کردن شماره تلفن همراه الزامی است'
        ]);

        if(auth()->user()->id == $user->id || auth()->user()->isAdmin ){
            $user->update([
                'firstname' => $updateFields['firstname'],
                'lastname' => $updateFields['lastname'],
                'phonenumber' => $updateFields['phonenumber'],
                'email' => $updateFields['email'],
            ]);
            return redirect()->back()->with('success','کاربر مورد نظر با موفقیت ویرایش شد');
        }
        return redirect()->route('admin.panel')->with('danger','شما اجازه دسترسی به این عملیات را ندارید');
        
    }
}
