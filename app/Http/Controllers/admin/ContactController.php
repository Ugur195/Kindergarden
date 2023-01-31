<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::first();
        return view('admin/contact',compact('contact'));
    }
    public function update(ContactRequest $req){

        $contact = Contact::first();
        $contact->update($req->all());
        return redirect()->back()->with('success','updated successfully');
    }
    
}
