<?php

namespace App\Http\Controllers;
use App\ScanDepartment;
use App\Scanpoint;
use App\ScanRound;
use App\ScannedPoint;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $scanroundID = 3    ;
        //left join scannedpoint.scanpoint_id on Scanpoints when scannedpoint.Round_id is the same
        $scannedpoints = DB::table('scanpoints') 
                ->leftJoin('scanned_points', function($join)  use ($scanroundID)
                         {
                            $join->on('scanned_points.Scanpoint_id', '=', 'scanpoints.id');
                            $join->on('scanround_id','=',DB::raw("'".$scanroundID."'"));
                         })
                ->leftJoin('scan_departments', 'scan_departments.id', '=', 'scanpoints.department_id')
                ->leftJoin('employees', 'employees.id', '=', 'scanned_points.operator_id')
                ->get();
               //dd($scannedpoints);
        return view('home', ['ScanDepartments' => ScanDepartment::all(), 'Scanpoints' => $scannedpoints]);
    }
   
    public function showFile()
    {   
        $scannedPoints = Scannedpoint::all();
        $scanRound = ScanRound::all();
        $scanPoint = Scanpoint::all();
        return view('scannedpoints.index', ['scannedPoints' => $scannedPoints,'scanRound' => $scanRound, 'scanPoint' => $scanPoint]);
    }
}