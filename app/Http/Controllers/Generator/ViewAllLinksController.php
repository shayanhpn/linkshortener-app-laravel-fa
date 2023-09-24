<?php

namespace App\Http\Controllers\Generator;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewAllLinksController extends Controller
{
    // View All Links
    public function viewAllLinks(){
        $links = Link::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.links',['links'=>$links]);
    }
}
