@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))

@section('content')

    <div class="error-message">
        <div class="container text-center">
            <img src="{{ asset('imagens/error/404error.svg') }}" alt="Imagem Erro 404" class="img-fluid error-image">

            <div class="d-block">
                <a href="{{ url()->previous() }}">
                    <button class="btn error-button">Voltar</button>
                </a>
            </div>

        </div>
    </div>

@endsection
