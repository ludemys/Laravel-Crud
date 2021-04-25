@extends('layouts.master')
@section('title', $title)

@section('content')
    <ul>
        @foreach($users as $user)
            <a href="{{ route('users.details', ['id' => $user->id]) }}">
                    {{ $user->name }} | {{ $user->email }}
            </a>
        @endforeach
    </ul>
    
    @if (isset($page))
        <h3>Page {{ $page }}</h3>
    @endif
    <br>
    <a href="{{ route('users.create') }}">Create new user</a><br><br>
@endsection
