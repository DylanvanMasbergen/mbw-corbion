@extends('layouts.app')

@section('content')
<div class="container">

	<h1></h1>
	
	<h4>Amount of ScanPoints in this Scanround.</h4>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">Department</th>
				<th scope="col">ScanPoints</th>
				<th scope="col">Location</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($ScanPoints as $sp)
			@if($sp->department_id == session('scandepartment_id'))
			@if($sp->overruleds_id)

				<tr class="table-primary">

			@else
				<tr class="{{ $sp->scanround_id ? 'table-success' : 'table-danger' }}">
			@endif

					<td>{{$sp->department_id}}</td>
					<td>{{$sp->barcode}}</td>
					<td>{{$sp->location}}</td>
					<td>	

			@if($sp->scanround_id)

				<a href="{{ $sp->scanpoint_id }}">Edit</a>
				<a href="{{ $sp->scanpoint_id }}">Delete</a>

			@else

				<a href="/overruled/{{ $sp->scanround_id }}/{{ $sp->overruleds_id }}/add/{{ $sp->scanpoint_id }}">Add</a>

			@endif

			@endif
					</td>
				</tr>
            @endforeach

		</tbody>
	</table>
	<a class="btn btn-secondary" href="{{ URL::to('scanround') }}">Back to all the ScanRounds</a>
</div>
@endsection