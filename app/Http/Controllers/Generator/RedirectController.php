<?php

namespace App\Http\Controllers\Generator;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{
    // Redirect Link Fucntion
    public function redirectLink($code){
        $link = Link::where('destination_link',$code)->firstOrFail();
        return redirect()->to($link->source_link);
    }
}
