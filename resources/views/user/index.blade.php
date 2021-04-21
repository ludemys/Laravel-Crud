@extends('layouts.master')
@section('title', $title)

@section('content')
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
    
    @if (isset($page))
        <h3>Page {{ $page }}</h3>
    @endif
@endsection
