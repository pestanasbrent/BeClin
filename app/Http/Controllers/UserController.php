<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Mail\medcert;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');

    }

    public function ClinicCreate()
    {
        return view('users.clinic');

    }

     public function ClinicLogin()
    {
        return view('users.cliniclogin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'idNum' => 'required|max:8',
            'fname' => 'required',
            'lname' => 'required',
            'pwd' => 'required',
            'course' => 'required'
        ]);

        $record = new UserModel;
        $record->type = "Student";
        $record->IDnum = $request->idNum;
        $record->FirstName = $request->fname;
        $record->LastName = $request->lname;
        $record->password = Hash::make($request->pwd);
        $record->course = $request->course;
        $record->save();

        return redirect(route('users_login'))->with('successMsg', 'Registered Successfully!');
    }

    public function clinicStore(Request $request)
    {
         $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'idNum' => 'required',
            'pwd' => 'required'
           
        ]);

        $record = new UserModel;
        $record->type = "Admin";
        $record->IDnum = $request->idNum;
        $record->FirstName = $request->fname;
        $record->LastName = $request->lname;
        $record->password = Hash::make($request->pwd);
        $record->course = NULL;
        $record->save();
        return redirect(route('users_cliniclogin'))->with('successMsg', 'Registered Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function student()
    {
        //
         return view('student.landing');
    }

    public function medcert()
    {
        //
         return view('student.medcert');
    }
     public function request()
    {
        //
         return view('student.request');
    }

    public function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'course'  =>  'required',
      'idnum'  =>  'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'course'      =>  $request->course,
            'idnum'      =>  $request->idnum,
            'message'   =>   $request->message
        );

     Mail::to('benildean.clinic@gmail.com')->send(new medcert($data));
     return redirect(route('emails_response'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
