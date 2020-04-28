<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $records = LogModel::paginate(5);
        return view('log.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('log.create');
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
            'idno' => 'required',
            'con' => 'required',
            'note' => 'required'
        ]);

        $record = new LogModel;
        $record->id_no = $request->idno;
        $record->concern = $request->con;
        $record->notes = $request->note;
        $record->save();
        return redirect(route('log_list'))->with('succcessMsg', 'Concern added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $record = LogModel::where("id", $id)->first();
        return view('log.edit', compact('record'));
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
        $this->validate($request, [
            'idno' => 'required',
            'con' => 'required',
            'note' => 'required'
        ]);

        $record = LogModel::where('id', $id)->first();
       $record->id_no = $request->idno;
        $record->concern = $request->con;
        $record->notes = $request->note;
        $record->save();
        return redirect(route('log_list'))->with('succcessMsg', 'Log updated!');
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

    public function delete($id)
    {
       $record = LogModel::where("id", $id)->first();
        $record->delete();
        return redirect(route('log_list'))->with('succcessMsg', 'Log deleted!');
    }

}
