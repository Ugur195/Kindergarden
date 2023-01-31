<?php

namespace App\Http\Controllers\admin;


use Throwable;
use App\Models\Vacancy;
use App\Http\Controllers\Controller;
use App\Http\Requests\VacancyRequest;
use Illuminate\Support\Facades\File;


class VacancyController extends Controller
{

    public function index()
    {
        $vacancies = Vacancy::all();

        return view('admin/vacancy/index', compact('vacancies'));
    }

    public function store(VacancyRequest $req)
    {
        $data = $req->all();
        if ($req->hasFile('image')) {
            $ext = $req->image->extension();
            $filename = rand(1, 100) . time() . '.' . $ext;
            $fileNamewithUpload = "vacancy/" . $filename;
            $req->image->move('vacancy', $filename);
            $data['image'] = $fileNamewithUpload;
        } else {
            return redirect()->back()->with('errors');
        }
        try {
            Vacancy::create($data);
            return redirect()->back()->with('success', 'Vacancy Inserted Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

        return redirect()->back()->with('success', 'Vacancy Inserted Successfully');
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('admin/vacancy/update', compact('vacancy'));
    }

    public function update($id, VacancyRequest $req)
    {

        try {
            $data = $req->all();
            $vacancy = Vacancy::findOrFail($id);
            $vacancy->update([
                'name' => $req->name,
                'city' => $req->city,
                'field' => $req->field,
                'qualification' => $req->qualification,
                'work_graphic' => $req->work_graphic,
                'experience' => $req->experience,
                'education' => $req->education,
                'salary' => $req->salary,
                'about' => $req->about,
                'requirement' => $req->requirement,
                'note' => $req->note,
            ]);
            if ($req->hasFile('image')) {
                request()->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $ext = $req->image->extension();
                $filename = rand(1, 100) . time() . '.' . $ext;
                $fileNamewithUpload = "book/" . $filename;
                $req->image->move('book', $filename);
                $data['image'] = $fileNamewithUpload;
                // if(File::exists($books->image))
                // {
                //     File::delete($books->image);
                // } }
                $vacancy->update(['image' => $data['image']]);

            }
            return redirect()->back()->with('success', 'Vacancy Updated Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

    }

    public function delete($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        if (File::exists($vacancy->image)) {
            File::delete($vacancy->image);
        }
        $vacancy->delete();
        return redirect()->route('vacancy')->with('success', 'Vacancy Deleted Successfully');
    }


}
