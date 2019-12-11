@extends('layouts.app')

@section('content')

@if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif
@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<h1>Scandepartments</h1>
<div class="scandepartment-list">
	<table class="table table-bordered mb-0">
        <thead>
           	<tr>
                <th scope="col">ScanDepartments</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ScanDepartments as $ScanDepartment)
            		<tr>
                        <td>{{ $ScanDepartment->name }}</td>
                        <td>
                        	<a href="/scandepartment/{{$ScanDepartment->id}}/" class="btn btn-secondary">View</a> 
                        	<a href="/scandepartment/{{$ScanDepartment->id}}/edit" class="btn btn-secondary">Edit</a> 
                        	<form style="display:inline-block" action="{{action('ScanDepartmentController@destroy', ['id' => $ScanDepartment->id])}}" method="post">
								@csrf
								@method('DELETE')
								<button onclick="return confirm('Are you sure you want to Delete a ScanDepartment?')" class="btn btn-danger" type="submit">Delete</button>
							</form>
						</td>		
            		</tr>
            @endforeach
		</tr>
	</table>
</div>

<div class="create-card">
  <div class="card-header">
    Create a new ScanDepartment
  </div>
  <div class="card-body">
    <h5 class="card-title">Press the Create button to Create a new Department</h5>
     <a class="btn btn-success" href="{{ route('scandepartment.create') }}">Create</a>
  </div>
</div>
   


@endsection