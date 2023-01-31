<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use Illuminate\View\View;

class CvController extends Controller
{
    public function index(): View
    {
        $cv_work = Cv::all();
        return view('admin.cv.index')->with(['cv_work' => $cv_work]);
    }

    public function delete($id)
    {
        $cv_work = Cv::findOrFail($id);
        $cv_work->delete();
        return redirect()->route('cv')->with('success', 'Cv Deleted Successfully');
    }

}
