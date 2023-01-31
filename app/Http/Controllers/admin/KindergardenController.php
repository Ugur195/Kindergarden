<?php

namespace App\Http\Controllers\admin;

use Throwable;
use App\Models\District;
use App\Models\Language;
use App\Models\Kindergarden;
use App\Http\Controllers\Controller;
use App\Http\Requests\KinderRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\KinderUpdateRequest;

class KindergardenController extends Controller
{
    public function index()
    {
        $languages = Language::orderBy('id')->select(['id', 'name'])->get();
        $districts = District::orderBy('id')->select(['id', 'name'])->get();
        $kindergardens = Kindergarden::all();
        return view('admin/kindergarden/index', compact('kindergardens', 'languages', 'districts'));
    }

    public function store(KinderRequest $req)
    {
        $data = $req->all();
        if ($req->hasFile('image')) {
            $ext = $req->image->extension();
            $filename = rand(1, 100) . time() . '.' . $ext;
            $fileNamewithUpload = "kindergarden/" . $filename;
            $req->image->move('kindergarden', $filename);
            $data['image'] = $fileNamewithUpload;
        } else {
            return redirect()->back()->with('errors');
        }
        try {
            Kindergarden::create($data);
            return redirect()->back()->with('success', 'Kindergarden Inserted Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

        return redirect()->back()->with('success', 'Kindergarden Inserted Successfully');
    }

    public function edit($id)
    {
        $kindergarden = Kindergarden::findOrFail($id);
        $languages = Language::all();
        $districts = District::all();

        return view('admin/kindergarden/update', compact('kindergarden', 'languages', 'districts'));
    }

    public function update($id, KinderUpdateRequest $req)
    {

        try {
            $data = $req->all();
            $kindergarden = Kindergarden::findOrFail($id);
            $kindergarden->update([
                'name' => $req->name,
                'location' => $req->location,
                'mobile' => $req->mobile,
                'phone' => $req->phone,
                'email' => $req->email,
                'language_id' => $req->language_id,
                'district_id' => $req->district_id,
                'description' => $req->description,
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
                $kindergarden->update(['image' => $data['image']]);

            }
            return redirect()->back()->with('success', 'Kindergarden Updated Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

    }

    public function delete($id)
    {
        $kindergarden = Kindergarden::findOrFail($id);
        if (File::exists($kindergarden->image)) {
            File::delete($kindergarden->image);
        }
        $kindergarden->delete();
        return redirect()->route('kindergarden')->with('success', 'Kindergarden Deleted Successfully');;
    }
}
