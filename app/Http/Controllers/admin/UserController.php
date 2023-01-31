<?php

namespace App\Http\Controllers\admin;

use Throwable;
use App\Models\User2;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users= User2::all();
        return view('admin/user/index',compact('users'));
    }
    public function edit($id)
    {
        $user=User2::findOrFail($id);
        return view('admin/user/update',compact('user'));
    }
    public function update($id, RegisterRequest $req){

        $user = User2::find($id);
        try {
            $user->update([
                'name'=>$req->name,
                'surname'=>$req->surname,
                'phone'=>$req->phone,
                'email'=>$req->email,
                'Fin'=>$req->Fin,
                'password'=>Hash::make($req->password)
            ]);
            return redirect()->back()->with('success','updated successfully');
        } catch (Throwable $e) {
            report($e);
            return $e->getMessage();
        }
    }
    public function delete($id){
        $user=User2::findOrFail($id);
        $user->delete();
        return redirect()->route('user')->with('success','User Deleted Successfully');;
    }
}
