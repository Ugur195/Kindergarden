<?php

namespace App\Http\Controllers\admin;

use Throwable;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\DistrictModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\DistrictRequest;

class DistrictController extends Controller
{
    public function index(){
        $districts= District::all();
        return view('admin/districts/index',compact('districts'));
    }  
    public function store(DistrictRequest $req){ 

        District::create($req->all());
        return redirect()->route('district');

    }
    public function edit($id)
    {
        $district=District::findOrFail($id);
        return view('admin/districts/update',compact('district'));
    }
    public function update($id, DistrictRequest $req){

        $district = District::find($id);
        $data=$req->only(['name']);
        try {
            $district->update($data);
            return redirect()->back()->with('success','updated successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }
    public function delete($id){
            $district=District::findOrFail($id);
            $district->delete();
            return redirect()->route('district');
        }
}
