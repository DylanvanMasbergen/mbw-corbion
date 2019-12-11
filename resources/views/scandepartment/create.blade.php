@extends('layouts.app')

@section('content')
   
   <h1>Create a new Scandepartment</h1>
   <form action="{{ route('scandepartment.index') }}" method="POST">
        {{ csrf_field() }}
        <div class="card col-sm-6 py-2 h-100 mx-auto">
            <div class="card-body">
                <div>
                    <input class="form-control form-control-lg w-25" type="text" name="name" placeholder="Scan Department" required="required">
                </div>  
            </div>
            <div>
                <button type="submit" value="submit" class="btn btn-success">Save</button>
            </div>
        </div>
   </form>
@endsection