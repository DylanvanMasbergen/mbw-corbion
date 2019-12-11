@extends('layouts.app')

@section('content')

   <h1>Create a new ScanPoint</h1>
    <form action="{{route('scanpoint.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="card col-sm-6 py-2 h-100 mx-auto">
            <div class="card-body">
                    <input class="form-control form-control-lg w-25"  type="text" name="barcode" placeholder="Barcode" required="required">
                    <input class="form-control form-control-lg w-25"  type="text" name="location" placeholder="Location" required="required">
                    <select name="scandepartment">
                        @foreach ($ScanDepartments as $ScanDepartment)
                            <option  value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                        @endforeach
                    </select>

            </div>
            
            <div>
                <button type="submit" value="Submit" class="btn btn-success">Save</button>
            </div>
        </div>
        
    </form>

@endsection

