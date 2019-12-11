<?php
namespace App\Http\Controllers;
use App\ScanDepartment;
use App\Scanpoint;
use Illuminate\Http\Request;

class ScanDepartmentController extends Controller
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
        return view('scandepartment.index', ['ScanDepartments' => ScanDepartment::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scandepartment.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = new ScanDepartment;
        $name->name = request('name');
        $name->save();
        return redirect('/scandepartment');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $Scanpoints = Scanpoint::where('department_id', $id)->get();
        return view('scandepartment.show', ['ScanDepartment' => ScanDepartment::find($id), 'Scanpoints' => $Scanpoints]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(ScanDepartment $scanDepartment, $id)
    {   
        $scanDepartment = ScanDepartment::find($id);
        return view('scandepartment.edit', ['ScanDepartment' => $scanDepartment]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(ScanDepartment $scanDepartment, $id)
    {
            $scanDepartment = ScanDepartment::find($id);
                $scanDepartment->name = request('name');
                $scanDepartment->save();

        return redirect('/scandepartment');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScanDepartment $scanDepartment, $id)
    {
       
      //  ScanDepartment::destroy($id);
        
       // return redirect('/scandepartment');

        try {
            ScanDepartment::destroy($id);
            return redirect('scandepartment')->with('success', 'ScanDepartment has been deleted!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('scandepartment')->with('error', 'Failed to delete ScanDepartment, it still has ScanPoints attached.');
        }
    }   
}