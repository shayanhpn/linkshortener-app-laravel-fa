<?php

namespace App\Http\Controllers\admin;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboardPage(){
        $links = Link::orderBy('created_at','desc')->limit(5)->get();
        return view('dashboard.dashboard',['links' => $links]);
    }
}
