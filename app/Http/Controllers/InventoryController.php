<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view('medicine.landing');
    }

    public function homepage()
    {
        return view('medicine.homepage');
    }

    public function aboutus()
    {
        return view('medicine.aboutus');
    }

    public function services()
    {
        return view('medicine.services');
    }

    public function adminlanding()
    {
        return view('admin.landing');
    }

    public function adminhomepage()
    {
        return view('admin.homepage');
    }

    public function adminaboutus()
    {
        return view('admin.aboutus');
    }

    public function adminservices()
    {
        return view('admin.services');
    }

    public function studlanding()
    {
        return view('student.landing');
    }

    public function studhomepage()
    {
        return view('student.homepage');
    }

    public function studaboutus()
    {
        return view('student.aboutus');
    }

    public function studservices()
    {
        return view('student.services');
    }



    public function index()
    {
        $records = InventoryModel::paginate(5);
        return view('inventory.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create');
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
            'gn' => 'required',
            'bn' => 'required',
            'dosage' => 'required',
            'desc' => 'required',
            'stock' => 'required'
        ]);

        $record = new InventoryModel;
        $record->generic_name = $request->gn;
        $record->brand_name = $request->bn;
        $record->dose = $request->dosage;
        $record->description= $request->desc;
        $record->stock = $request->stock;
        $record->save();
        return redirect(route('inventory_list'))->with('successMsg', 'Medicine Added!');
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
        $record = InventoryModel::where("id", $id)->first();
        return view('inventory.edit', compact('record'));
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
        $this->validate($request, [
            'gn' => 'required',
            'bn' => 'required',
            'dosage' => 'required',
            'desc' => 'required',
            'stock' => 'required'
        ]);

        $record = InventoryModel::where('id', $id)->first();
        $record->generic_name = $request->gn;
        $record->brand_name = $request->bn;
        $record->dose = $request->dosage;
        $record->description= $request->desc;
        $record->stock = $request->stock;
        $record->save();
        return redirect(route('inventory_list'))->with('successMsg', 'Medicine Updated!');
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
        $record = InventoryModel::where('id', $id)->first();
        $record->delete();
        return redirect(route('inventory_list'))->with('successMsg', 'Medicine Deleted!');
    }


    
}
