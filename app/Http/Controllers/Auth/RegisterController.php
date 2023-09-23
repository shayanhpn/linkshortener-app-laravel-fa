<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function registerUser(Request $request){
       $registerFields =  $request->validate([
            'firstname' => ['required','string','alpha','max:50'],
            'lastname' => ['required','string','alpha','max:100'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','confirmed'],
            'phonenumber' => ['required','numeric'],
            'captcha' => ['required','captcha'],
        ],[
            'firstname.required' => 'وارد کردن نام الزامی است',
            'firstname.max' => 'لطفا از حروف کمتری استفاده کنید',
            'firstname.alpha' => 'لطفا از حروف استفاده کنید',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی است',
            'lastname.alpha' => 'لطفا از حروف استفاده کنید',
            'lastname.max' => 'لطفا از حروف کمتری استفاده کنید',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'ایمیل صحیح را وارد کنید',
            'emai.unique' => 'این ایمیل قبلا انتخاب شده است',
            'password' => 'وارد کردن رمز عبور الزامی است',
            'password.confirmed' => 'رمز عبور یکسان نمی باشد',
            'phonenumber.numeric' => 'لطفا از اعداد برای شماره همراه استفاده کنید',
            'phonenumber.required' => 'وارد کردن شماره تلفن همراه الزامی است',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی است',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید'
        ]);
        User::create($registerFields);
        return redirect()->route('login')->with('success','ساخت حساب کاربری با موفقیت ساخته شد');
    }
}
