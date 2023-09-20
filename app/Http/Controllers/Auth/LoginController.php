<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginUser(Request $request){
        $loginFields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
            'captcha' => ['required','captcha']
        ],[
            'email.required' => 'لطفا ایمیل خود را وارد کنید',
            'email.email' => 'لطفا ایمیل صحیح را وارد کنید',
            'password.required' => 'وارد کردن رمز عبور الزامی می باشد',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی است',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید',
        ]);
        if(auth()->attempt(['email' => $loginFields['email'],'password' => $loginFields['password'] ])){
            session()->regenerate();
            return redirect()->route('admin.panel')->with('success','با موفقیت وارد شدید');
        }else{
            return redirect()->route('login')->with('danger','نام کاربری / رمز عبور اشتباه می باشد');
        }
    }
}
