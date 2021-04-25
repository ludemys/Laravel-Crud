@extends('layouts.master')

@section('content')
    <p><b>User id:</b> {{ $user->id }}</p>
    <p><b>Name:</b> {{ $user->name }}</p>
    <p><b>Email:</b> {{ $user->email }}</p>
    <p><b>Password:</b> {{ $user->password }}</p>
    <p><b>Created at:</b> {{ $user->created_at }}</p>
    <p><b>Updated at:</b> {{ $user->updated_at }}</p><br>

    <a href="{{ route('users.index') }}">Go to Index</a><br><br>

    <hr>

    <form action="{{ route('users.delete', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>

    <form action="{{ route('users.update_password', $user->id) }}" method="post">

        @csrf
        @method('PUT')

        <label for="password">Update password</label>
        <input type="password" name="password" placeholder="password">

        <input type="submit" value="UPDATE">

    </form>   
@endsection

{{-- <h3>{{ json_encode($user) }}</h3> --}}