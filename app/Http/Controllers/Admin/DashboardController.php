<?php

namespace App\Http\Controllers\admin;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboardPage(){
        $links = Link::orderBy('created_at','desc')->limit(5)->get();
        $users = User::all();
        return view('dashboard.dashboard',compact('links','users'));
    }
}
