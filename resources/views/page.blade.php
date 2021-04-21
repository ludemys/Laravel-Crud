@extends('layouts.master')
@section('title', 'generic page')

@section('header')
    <h2>This is a part of a generic page</h2>
    @parent

    <h2>This thing too</h2>
@endsection

@section('content')
    <h1>Generic page, nothing interesting around here</h1>
@endsection