@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h1>Users index</h1>
    <a href="/user/create">Nieuwe gebruiker aanmaken</a>
    @foreach($users as $user)
        <ul>

            <li>{{ $user->name }}</li>
        </ul>
    @endforeach
@endsection