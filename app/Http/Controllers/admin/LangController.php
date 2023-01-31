<?php

namespace App\Http\Controllers\admin;

use Throwable;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;

class LangController extends Controller
{
    public function index(){
        $langs= Language::all();
        return view('admin/langs/index',compact('langs'));
    }  
    public function store(LanguageRequest $req){ 

        Language::create($req->all());
        return redirect()->route('lang');

    }
    public function edit($id)
    {
        $lang=Language::findOrFail($id);
        return view('admin/langs/update',compact('lang'));
    }
    public function update($id, LanguageRequest $req){

        $lang = Language::find($id);
        $data=$req->only(['name']);
        try {
            $lang->update($data);
            return redirect()->back()->with('success','updated successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }
    public function delete($id){
            $lang=Language::findOrFail($id);
            $lang->delete();
            return redirect()->route('lang');
        }
}
