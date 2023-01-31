<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    public function index():View
    {
        return view('frontend.about_us.index');
    }

}
