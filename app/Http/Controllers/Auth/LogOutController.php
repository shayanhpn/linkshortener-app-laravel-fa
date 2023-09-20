<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogOutController extends Controller
{
    public function logoutUser(){
        auth()->logout();
        return redirect()->route('login')->with('danger','شما خارج شدید');
    }
}
