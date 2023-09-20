<?php

namespace App\Http\Controllers\Main;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    // Show Main Page 
    public function showMainPage(){
        return view('main.index');
    }
    // Show Login Page
    public function showLoginPage(){
        if(auth()->check()){
            return redirect()->route('admin.panel');
        }
        return view('main.login');
    }

    public function showRegisterPage(){
        return view('main.register');
    }
    public function showAboutPage(){
        return view('main.about');
    }

}
