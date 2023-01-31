<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class AuthController extends Controller
{
    public function home ():View
    {
        return view('frontend.index');
    }
}
