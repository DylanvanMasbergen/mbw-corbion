<?php

namespace App\Http\Controllers;

use App\Scanpoint;
use App\ScanDepartment;
use Illuminate\Http\Request;
use Validator;

class ScanpointController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:Spillteam')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $scanpoints = Scanpoint::all();
        $scandepartments = ScanDepartment::all();
        return view('scanpoints.index')->with(['scandepartments' => $scandepartments, 'scanpoints' => $scanpoints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ScanDepartments = ScanDepartment::all();
        return view('scanpoints.create')->with(['ScanDepartments'=> $ScanDepartments]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = new Scanpoint;
        $name->barcode = request('barcode');
        $name->location = request('location');
        $name->department_id = request('scandepartment');
        $name->save();
        return redirect('/scanpoint');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function show(Scanpoint $scanpoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Scanpoint $scanpoint)
    {
        $ScanDepartments = ScanDepartment::all();
        return view('scanpoints.edit')->with(['ScanPoint'=> $scanpoint, 'ScanDepartments' => $ScanDepartments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
			$Scanpoint = Scanpoint::find($id);
			$Scanpoint->barcode       = request('barcode');
			$Scanpoint->location      = request('location');
			$Scanpoint->department_id = request('scandepartment');
			$Scanpoint->save();
			// redirect
			return redirect('/scanpoint');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scanpoint::destroy($id);
        return redirect('/scanpoint');
    }
}
