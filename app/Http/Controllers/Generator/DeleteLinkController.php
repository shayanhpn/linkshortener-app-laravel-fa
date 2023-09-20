<?php

namespace App\Http\Controllers\Generator;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteLinkController extends Controller
{
    public function viewDeletePage(Link $link){
        return view('dashboard.delete-link',compact('link'));
    }

    public function deleteLink(Link $link){
        $link->delete();
        return redirect()->route('admin.links')->with('success','لینک مورد نظر با موفقیت حذف شد');
    }
}
