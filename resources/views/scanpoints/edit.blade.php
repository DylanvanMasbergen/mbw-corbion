@extends('layouts.app')

@section('content')
   <h1>Edit a ScanPoint</h1>
    <form action="{{route('scanpoint.update', ['id' => $ScanPoint->id])}}" method="POST">
        {{ csrf_field() }}
        @method('PATCH')
        <div class="card col-sm-6 py-2 h-100 mx-auto">
            <div class="card-body">
                <input class="form-control form-control-lg w-100" type="text" name="barcode" placeholder="Barcode" required="required" value="{{$ScanPoint->barcode}}">
                <input class="form-control form-control-lg w-100" type="text" name="location" placeholder="Location" required="required" value="{{$ScanPoint->location}}">
                <select name="scandepartment">
                    @foreach ($ScanDepartments as $ScanDepartment)
                        @if ($ScanDepartment->id === $ScanPoint->department_id)
                            <option selected="selected" value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                        @else
                            <option value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                        @endif
                    @endforeach
              </select>
            </div>
            <div>
                <button type="submit" value="Submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
@endsection

