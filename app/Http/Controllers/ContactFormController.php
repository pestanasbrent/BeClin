<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

     public function response()
    {
        return view('emails.emailresponse');
    }


    public function store(Request $request)
    {

         $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);


        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,   
            'message'   =>   $request->message
        );

        Mail::to('benildean.clinic@gmail.com')->send(new ContactFormMail($data));

        return redirect(route('emails_response'));
    }
}