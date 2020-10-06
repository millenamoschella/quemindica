@extends('layouts.layout')

@section('title', 'Indicação de Cultura')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/adminShow.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menulogado')
@endsection


@section('content')



@endsection



@section('footer')
    @include('layouts.footer-logado')
@endsection
