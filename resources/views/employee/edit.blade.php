@extends('layouts.app')

@section('content')
    <h1>{{ $employee->name }} aanpassen</h1>
    <form action="{{route('employees.update', ['id' => $employee->id])}}" method="POST">
        {{ csrf_field() }}
        @method('PATCH')
        <div>
            <input type="text" name="name" placeholder="Naam" required="required" value="{{$employee->name}}">
            <input type="text" name="employeecode" placeholder="Personeelsnummer" required="required" value="{{$employee->employeecode}}">
        </div>
        <div>
            <button type="submit" value="Submit" class="btn btn-success">Save</button>
        </div>
    </form>
    @endsection