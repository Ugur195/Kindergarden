<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CvRequest;
use App\Models\Cv;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class VacancyController extends Controller
{
    public function index(): View
    {
        $vacancies = Vacancy::all();
        return view('frontend.vacancy.index')->with(['vacancies' => $vacancies]);
    }

    public function create(): View
    {
        return view('frontend.vacancy.create');
    }

    public function store(CvRequest $request)
    {
        try {
            $data = $request->validated();
            if ($image = $data['image']) {
                $destinationPath = 'cv_image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['image'] = "$profileImage";
            }
            Cv::create($data);

            return redirect()->back()->with('success', 'Cv yaradildi');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Cv yaratmaq mumkun olmadi');
        }
    }


}
