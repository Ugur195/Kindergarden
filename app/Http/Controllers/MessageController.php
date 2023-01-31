<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
public function index(){
    $messages=Message::all();
    return view('admin/message',compact('messages'));
}
public function delete($id)
{
    $message=Message::findOrFail($id);
    $message->delete();
return redirect()->route('message')->with('success','Message Deleted Successfully');
}
}
