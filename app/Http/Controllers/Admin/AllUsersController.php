<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllUsersController extends Controller
{
    public function viewAllUsers(){
        $users = User::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.users',['users' => $users]);
    }
}
