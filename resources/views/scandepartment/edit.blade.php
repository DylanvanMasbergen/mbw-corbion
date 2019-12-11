@extends('layouts.app')

@section('content')
 <div class="container">
   <h1>Edit a Scandepartment</h1>

   <form action="{{route('scandepartment.update', ['id' => $ScanDepartment->id])}}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" name="name" placeholder="ScanDepartment" required="required" value="{{ $ScanDepartment->name }}">
        </div>
                <button type="submit" class="btn btn-success">
                    {{ __('Save') }}
                </button>
    </form>
</div>
@endsection