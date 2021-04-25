@extends('layouts.master')

@section('content')
    <form action="{{ route('users.register') }}" method="POST">
        
        @csrf
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="SEND">

    </form><br><br>

    <a href="{{ route('users.index') }}">Go to index</a><br><br>
@endsection