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


<h1>Scanround Overrulen</h1>
<div class="scandepartment-list">
	<table class="table table-bordered mb-0">
        <thead>
           	<tr>
                <th scope="col">ScanRound</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Status</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scanrounds as $ScanRound)
            		<tr>
                        <td>{{ $ScanRound->id }}</td>
                        <td>{{ $ScanRound->start }}</td>
                        <td>{{ $ScanRound->end }}</td>
                        <td></td>
                        <td>
                          <a href="/overruled/create/{{$ScanRound->id}}/" class="btn btn-secondary btn-sm">Overrulen</a>
                          <a href="/overruled/{{$ScanRound->id}}/" class="btn btn-danger btn-sm">Disable</a>
                          </td>
            		</tr>
            @endforeach
		</tr>
	</table>
</div>
  
@endsection