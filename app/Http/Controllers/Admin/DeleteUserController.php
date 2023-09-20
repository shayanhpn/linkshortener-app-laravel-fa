<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function viewDeleteUser(User $user){
        return view('dashboard.delete-user',compact('user'));
    }
    public function deleteUser(User $user){
        if($user->id == auth()->user()->id){
            return back()->with('danger','شما نمیتوانید حساب کاربری خود را حذف کنید');
        }
        if($user->isAdmin == true){
            return back()->with('danger','شما دسترسی برای این عملیات را ندارید');
        }
        $user->delete();
        return redirect()->route('admin.users')->with('success','کاربر مورد نظر با موفقیت حذف شد');
    }
}
