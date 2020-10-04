@extends('layouts.layout')

@section('title', 'Oops')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/error.css') }}">
@endsection


@section('content')
    @yield('message')
@endsection
