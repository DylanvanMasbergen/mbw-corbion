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


    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

<h1>ScanPoints</h1>
<div class="scanpoint-list">
  <table class="table table-bordered mb-0">
      <thead>
        <tr>
          <th scope="col">Barcode</th>
          <th scope="col">Locatie</th>
          <th scope="col">Department</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        @if(isset($scanpoints))
          @foreach ($scanpoints as $scanpoint)
            <tr>
                <td>{{$scanpoint->barcode}}</td>
                <td>{{$scanpoint->location}}</td>
                <td>{{$scanpoint->department_id}}</td>
                <td>   
                    <form style="display:inline-block" action="{{action('ScanpointController@edit', ['id' => $scanpoint->id])}}" method="get">
                        @csrf
                        <button type="submit" value="Submit" class="btn btn-secondary">Edit</button>
                    </form> 
                    <form style="display:inline-block"  action="{{action('ScanpointController@destroy', ['id' => $scanpoint->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" value="Submit" class="btn btn-danger">Delete</button>
                    </form> 
                </td> 
            </tr>
          @endforeach 
        @else 
          <td>Geen scanpunten</td>
        @endif
      </tbody>
  </table>
</div>

<div class="create-card">
  <div class="card-header">
    Create a new ScanPoint
  </div>
  <div class="card-body">
    <h5 class="card-title">Press the Create button to Create a new ScanPoint</h5>
      <a href="{{action('ScanpointController@create')}}"class="btn btn-success">Create</a>
  </div>
</div>
 
@endsection





  
