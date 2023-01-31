<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\View\View;

class WorkerController extends Controller
{
    public function index(): View
    {
        $workers = Worker::all();
        return view('frontend.worker.index')->with(['workers' => $workers]);
    }

    public function edit($id): View
    {
        $workers = Worker::find($id);
        return view('frontend.worker.edit')->with(['workers' => $workers]);

    }
}
