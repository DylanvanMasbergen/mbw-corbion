@extends('layouts.app')

@section('content')

    <h1>Nieuwe medewerker aanmaken</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Naam" required="required">
            <input type="text" name="employeecode" placeholder="Personeelsnummer" required="required">
        </div>

        <div>
            <button type="submit" value="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection