<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerRequest;
use Illuminate\Support\Facades\File;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('admin/worker/index', compact('workers'));
    }

    public function store(WorkerRequest $req)
    {
        $data = $req->all();
        if ($req->hasFile('image')) {
            $ext = $req->image->extension();
            $filename = rand(1, 100) . time() . '.' . $ext;
            $fileNamewithUpload = "worker/" . $filename;
            $req->image->move('worker', $filename);
            $data['image'] = $fileNamewithUpload;
        } else {
            return redirect()->back()->with('errors');
        }
        try {
            Worker::create($data);
            return redirect()->back()->with('success', 'Worker Inserted Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

        return redirect()->back()->with('success', 'Worker Inserted Successfully');
    }

    public function edit($id)
    {
        $worker = Worker::findOrFail($id);

        return view('admin/worker/update', compact('worker'));
    }

    public function update($id, WorkerRequest $req)
    {

        try {
            $data = $req->all();
            $worker = Worker::findOrFail($id);
            $worker->update([
                'name' => $req->name,
                'surname' => $req->surname,
                'fatherName' => $req->fatherName,
                'phone1' => $req->phone1,
                'phone2' => $req->phone2,
                'email' => $req->email,
                'gender' => $req->gender,
                'age' => $req->age,
                'education' => $req->education,
                'experience' => $req->experience,
                'about' => $req->about,
                'workDays' => $req->workDays,
                'position' => $req->position,
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
                $worker->update(['image' => $data['image']]);

            }
            return redirect()->back()->with('success', 'Worker Updated Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }

    }

    public function delete($id)
    {
        $worker = Worker::findOrFail($id);
        if (File::exists($worker->image)) {
            File::delete($worker->image);
        }
        $worker->delete();
        return redirect()->route('worker')->with('success', 'Worker Deleted Successfully');
    }

}
