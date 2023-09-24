<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllUsersController extends Controller
{
    // View All Users
    public function viewAllUsers(){
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.users',['users' => $users]);
    }
}
