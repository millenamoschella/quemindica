@extends('layouts.layout-minhaconta')

@section('content')

    {{-- FORMULÁRIO SUPORTE --}}
    <section class="secao-formulario">

        <div class="container-formulario-suporte">
            <div class="wrap-formulario">

                {{-- IMAGEM --}}
                <div class="banner-suporte">
                    <img src="{{ asset('../imagens/institucional/banner02.jpg') }}" alt="Banner Suporte">
                </div>

                {{-- TÍTULO --}}
                <form class="formulario">
                    <h2 class="titulo">
                        Suporte
                    </h2>

                    {{-- NOME --}}
                    <div class="wrap-area-input">
                        <input class="area-input" type="text" name="name" placeholder="Nome">
                        <span class="focus-area-input"></span>
                        <span class="icone-input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    {{-- EMAIL --}}
                    <div class="wrap-area-input">
                        <input class="area-input" type="text" name="email" placeholder="Email">
                        <span class="focus-area-input"></span>
                        <span class="icone-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    {{-- MENSAGEM --}}
                    <div class="wrap-area-input">
                        <textarea class="area-input" name="message" placeholder="Mensagem"></textarea>
                        <span class="focus-area-input"></span>
                    </div>

                    {{-- BOTÃO --}}
                    <div class="container-botao">
                        <button class="btn-formulario">
                            Enviar
                        </button>
                    </div>


                </form>
            </div>
        </div>

    </section>

@endsection
