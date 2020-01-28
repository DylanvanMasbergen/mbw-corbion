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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;

class OverruledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = Auth::user();
        
        return view('overruled.index', ['ScanDepartments' => ScanDepartment::all(), 'currentUser' => $currentUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($scanround_id)
    {
        $currentUser = Auth::user();

       return view('overruled.create', ['ScanDepartments' => ScanDepartment::all(), 'currentUser' => $currentUser, 'scanround_id' => $scanround_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $or = new Overruled;
        $or->employee_id = request('currentuser_id');
        $or->created_at = Carbon::now();
        $or->scanround_id = request('scanround_id');
        $or->reason = request('reason');
        $or->save();

        return redirect('/overruled/'.$or->id.'')->with('scandepartment_id', request('scandepartment_id'));

    }

    public function add(Request $request, $scanround_id, $overruled_id, $scanpoint_id) {
        
        $overruled = Overruled::findOrFail($overruled_id);
        $scanround = Scanround::findOrFail($scanround_id);

        $sp = new ScannedPoint;
        $sp->scanned_at = Carbon::now();
        $sp->scanned_time = Carbon::now();
        $sp->operator_id = Auth::id();
        $sp->scanround_id = $scanround_id;
        $sp->scanpoint_id = $scanpoint_id;
        $sp->overruleds_id = $overruled_id;
        $sp->save();

        dd($sp);

        return back();
        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Overruled  $overruled
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // retrieve overruled id
        $overruled = Overruled::findOrFail($id);

        // retrieve scanround_id
        $srid = $overruled->scanround_id;

        //dd($srid);

        //left join scannedpoint.scanpoint_id on Scanpoints when scannedpoint.Round_id is the sybase_min_error_severity(severity)
        $scanpoints = DB::table('scanpoints') //->select('scanpoint.id as scanpointid')
                ->leftJoin('scanned_points', function($join)  use ($srid)
                         {
                            $join->on('scanned_points.Scanpoint_id', '=', 'scanpoints.id');
                            $join->on('scanround_id','=',DB::raw("'".$srid."'"));
                         })

                ->leftJoin('scan_departments', 'scan_departments.id', '=', 'scanpoints.department_id')
                ->leftJoin('employees', 'employees.id', '=', 'scanned_points.operator_id')

                ->select('scanpoints.department_id', 'scanpoints.barcode', 'scanpoints.location', 'scanned_points.scanround_id', 'scanpoints.id as scanpoint_id', 'scanned_points.overruleds_id')
                ->orderBy('scanpoints.department_id')
                ->get();


            //dd($scanpoints);

        return view('scanround.show', ['ScanDepartments' => ScanDepartment::all(), 'ScanPoints' => $scanpoints]);

       
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
