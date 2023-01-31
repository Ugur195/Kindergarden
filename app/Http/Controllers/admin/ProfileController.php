<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{

    public function index()
    {
        return view('admin/profile');
    }
    public function update(ProfileRequest $req){
        
        $user = Auth::user();
        if($req->password){
            $user->password = $req->password;
        }
            $user->email = $req->email;
            $user->name = $req->name;
            $user->save();

            return redirect()->back()->with('success','updated successfully');
    }
}
