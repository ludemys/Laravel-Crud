@extends('layouts.master')
@section('title', $title)

@section('content')
    <ul>
        @foreach($users as $user)
            <li><a href="{{ route('users.details', ['id' => $user->id]) }}">{{ $user->name }}</a> | {{ $user->email }}</li>
        @endforeach
    </ul>
    
    @if (isset($page))
        <h3>Page {{ $page }}</h3>
    @endif
@endsection
