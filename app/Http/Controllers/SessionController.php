<?php

namespace App\Http\Controllers;

use Request;
use Redirect;
use Auth;


use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\AuthAccess\AuthorizesRequests;
use Illuminate\Foundation\AuthAccess\AuthorizesResources;


class SessionController extends Controller
{
    //
      public function create()
    {
        return view('users.login');
    }
    
    public function store()
    {
           $rules = array(
      		'idNum' => 'required', // make sure the email is an actual email
      		'pwd' => 'required'
      	);
     
      $validator = Validator::make(Request::all(), $rules);
      // if the validator fails, redirect back to the form
      if ($validator->fails())
        {
        return Redirect::to('users/login')->withErrors($validator) // send back all errors to the login form
        ->withRequest(Request::except('pwd')); // send back the input (not the password) so that we can repopulate the form
        }
         else
        {
        // create our user data for the authentication
        $userdata = array(
          'IDnum' => Request::get('idNum'),
          'password' => Request::get('pwd'),
          'type' => 'Student'
        );

        
        // attempt to do the login
        if (Auth::attempt($userdata))
          {
          // validation successful
          // do whatever you want on success
          	return Redirect::to('student/landing');
          }
           else 
     	 {
     	 	  return Redirect::to('users/login')->withErrors('Wrong username or password');
     	 }


    	}
	}

  public function adminstore()
    {
           $rules = array(
          'idNum' => 'required', // make sure the email is an actual email
          'pwd' => 'required'
        );
     
      $validator = Validator::make(Request::all(), $rules);
      // if the validator fails, redirect back to the form
      if ($validator->fails())
        {
        return Redirect::to('users/cliniclogin')->withErrors($validator) // send back all errors to the login form
        ->withRequest(Request::except('pwd')); // send back the input (not the password) so that we can repopulate the form
        }
         else
        {
        // create our user data for the authentication
        
        $admindata = array(
          'IDnum' => Request::get('idNum'),
          'password' => Request::get('pwd'),
          'type' => 'Admin'
        );
        // attempt to do the login
        if (Auth::attempt($admindata))
          {
          // validation not successful, send back to form
            return Redirect::to('admin/landing');
        

       } else 
       {
          return Redirect::to('users/cliniclogin')->withErrors('Wrong username or password');
       }


      }
  }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('users_reg');
    }
}
