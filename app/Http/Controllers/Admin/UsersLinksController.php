<?php

namespace App\Http\Controllers\Admin;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersLinksController extends Controller
{
    // View Users Links
    public function viewUsersLinks(){
        if(auth()->check()){
            $links = Link::where('user_id',auth()->user()->id)->paginate(10);
            return view('dashboard.userslinks',['links' => $links]);
        }
    }
}
