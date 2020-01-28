@extends('layouts.app')
@section('content')
<div class="row department-cards">
  @foreach($ScanDepartments as $ScanDepartment)
    <div class="card col-sm-6 h-400">
        <div class="card-body">
            <h5 class="card-title">{{ $ScanDepartment->name }}</h5>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th scope="col">ScanPoint</th>
                        <th scope="col">Where</th>
                        <th scope="col">Scanned by</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Scanpoints as $Scanpoint) 
                          @if($Scanpoint->department_id === $ScanDepartment->id && isset($Scanpoint->scanround_id))
                          <tr class="table-success">
                            <td>{{$Scanpoint->barcode}}</td>
                            <td>{{$Scanpoint->location}}</td>
                            <td>{{$Scanpoint->name}}</td>
                          </tr>
                          @elseif($Scanpoint->department_id === $ScanDepartment->id)
                          <tr class="table-danger">
                              <td>{{$Scanpoint->barcode}}</td>
                              <td>{{$Scanpoint->location}}</td>
                              <td>{{$Scanpoint->scanround_id}}</td>
                          </tr>
                          @endif
                      @endforeach 
                    </tbody>
                  </table>
                </div>                      
        </div>
    </div>
  @endforeach
</div>
@endsection
