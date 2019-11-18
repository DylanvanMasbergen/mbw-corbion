@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Overrule a Scanpoint') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('overruled.store') }}">
                            @csrf

                             <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Shiftmanager or Assistant') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="role_id" name="role_id">
                                        @foreach ($Employees as $Employee)
                                            <option value="" disabled selected hidden>Please Choose a Shiftmanager...</option>
                                            <option  id="{{$Employee->name}}" value="{{$Employee->name}}"> {{$Employee->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose an Operator') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="role_id" name="role_id">
                                        @foreach ($Employees as $Employee)
                                            <option value="" disabled selected hidden>Please Choose an Operator...</option>
                                            <option  id="{{$Employee->name}}" value="{{$Employee->name}}"> {{$Employee->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Scandepartment') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="role_id" name="role_id">
                                        @foreach ($ScanDepartments as $ScanDepartment)
                                            <option value="" disabled selected hidden>Please Choose a Scandepartment...</option>
                                            <option  id="{{ $ScanDepartment->name }}" value="{{ $ScanDepartment->name }}">{{ $ScanDepartment->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Next') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection