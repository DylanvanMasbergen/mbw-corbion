<?php

namespace App\Http\Controllers;

use App\Overruled;
use Illuminate\Http\Request;
use App\ScanDepartment;
use App\Scanpoint;
use App\ScanRound;
use App\ScannedPoint;
use App\Employee;
use App\Role;
use Validator;

class OverruledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('overruled.index', ['ScanDepartments' => ScanDepartment::all(), 'Employees' => Employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $overruled = new ScannedPoint();
        $overruled->Employee = request('employee');
        $overruled->ScanDepartment = request('scandepartment');
        $overruled->save();

        return redirect('/overruled')->with('success', 'Scans has been overruled!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Overruled  $overruled
     * @return \Illuminate\Http\Response
     */
    public function show(Overruled $overruled)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Overruled  $overruled
     * @return \Illuminate\Http\Response
     */
    public function edit(Overruled $overruled)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Overruled  $overruled
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overruled $overruled)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Overruled  $overruled
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overruled $overruled)
    {
        //
    }
}
