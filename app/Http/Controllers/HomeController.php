<?php

namespace App\Http\Controllers;
use App\ScanDepartment;
use App\Scanpoint;
use App\ScanRound;
use App\ScannedPoint;
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
        
        return view('home', ['ScanDepartments' => ScanDepartment::all(), 'Scanpoints' => Scanpoint::all()]);
    }

   

    public function showFile()
    {
        $scannedPoints = Scannedpoint::all();
        $scanRound = ScanRound::all();
        $scanPoint = Scanpoint::all();
        return view('scannedpoints.index', ['scannedPoints' => $scannedPoints,'scanRound' => $scanRound, 'scanPoint' => $scanPoint]);
    }
}
