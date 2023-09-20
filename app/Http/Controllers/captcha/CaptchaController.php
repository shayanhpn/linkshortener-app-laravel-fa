<?php

namespace App\Http\Controllers\captcha;

use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;
use App\Http\Controllers\Controller;

class CaptchaController extends Controller
{
        // Reload Captcha
        public function reloadCaptcha(){
            return Captcha::src('default');
        }
}
