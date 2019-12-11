@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <h1>Werknemers</h1>
    <div class="employee-list">
    <table class="table table-bordered mb-0">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Personeelsnummer</th>
            <th scope="col">Aanpassen</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($Employees))
            @foreach ($Employees as $Employee)
                <tr>
                    <td>{{$Employee->name}}</td>
                    <td>{{$Employee->employeecode}}</td>
                    <td>
                        <form style="display:inline-block" action="{{action('EmployeeController@edit', ['id' => $Employee->id])}}" method="get">
                            @csrf
                            <button type="submit" value="Submit" class="btn btn-secondary">Edit</button>
                        </form>
                        <form style="display:inline-block" action="{{action('EmployeeController@destroy', ['id' => $Employee->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="Submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <td>Geen werknemers gevonden</td>
        @endif
        </tbody>
    </table>
    </div>
    <div class="create-card">
        <div class="card-header">
            Create a new Employee
        </div>
        <div class="card-body">
            <h5 class="card-title">Press the Create button to Create a new Employee</h5>
            <a class="btn btn-success" href="{{ route('employees.create') }}">Create</a>
        </div>
    </div>
@endsection