<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Kindergarden;
use App\Models\Language;
use Illuminate\View\View;

class KindergardenController extends Controller
{
    public function index(): View
    {
        $kindergardens = Kindergarden::all();
        $districts = District::all();
        $langguages = Language::all();
        return view('frontend.kindergarden.index')->with(['kindergardens' => $kindergardens,
            'districts' => $districts, 'langguages' => $langguages]);
    }

    public function edit($id): View

    {
        $kindergardens = Kindergarden::find($id);
        return view('frontend.kindergarden.edit')->with(['kindergardens' => $kindergardens]);
    }

}
