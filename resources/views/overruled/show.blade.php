@extends('layouts.app')

@section('content')


<div class="container">

	<h1>{{ $ScanDepartment->name }}</h1>
	
	<h4>Amount of ScanPoints this ScanDepartments has</h4>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">ScanPoints</th>
				<th scope="col">Location</th>
			</tr>
		</thead>
		<tbody>
		@foreach($Scanpoints as $Scanpoint)
		<tr>
			<td>{{$Scanpoint->barcode}}</td>
			<td>{{$Scanpoint->location}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<a class="btn btn-secondary" href="{{ URL::to('overruled') }}">Back to all the ScanDepartments</a>
</div>
@endsection