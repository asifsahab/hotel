<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactValidation;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactsubmit(ContactValidation $request)
    {
       $data = new Contact;
       $data->name = $request->input('name');
       $data->email = $request->input('email');
       $data->subject = $request->input('subject');
       $data->message = $request->input('message');

       $data->save();
       return redirect()->back()->with('success', 'Submitted successfully!');


    }

    public function contactview()
    {
        $contact = Contact::all();
       dd($contact);
    }
}
