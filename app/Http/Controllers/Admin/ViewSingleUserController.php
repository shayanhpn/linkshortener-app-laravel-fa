<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewSingleUserController extends Controller
{
    public function viewSingleUser(User $id){
        return view('dashboard.view-single-user',['user' => $id]);
    }
}
