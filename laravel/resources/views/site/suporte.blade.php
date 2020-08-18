@extends('layouts.layout-menulogado')

@section('content')

    {{-- FORMULÁRIO SUPORTE --}}
    <section class="secao-formulario text-center">

        <div class="card d-flex justify-content-center div-formulario">
            <div class="row">

                {{-- BANNER --}}
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ asset('../imagens/institucional/suporte-novo-2.png') }}" width="100%" height="auto"> </div>

                {{-- TÍTULO --}}
                <div class="col-lg-6">
                    <h4 class="titulo">Suporte</h4>

                    {{-- FORMULÁRIO --}}
                    <form action="{{ route('suporte') }}" method="POST" class="container">
                        @csrf

                        {{-- NOME --}}
                        <div class="row">
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="area-input" type="text" name="name" placeholder="Nome">
                                <span class="focus-area-input"></span>
                                <span class="icone-input">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- EMAIL --}}
                        <div class="row">
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="area-input" type="text" name="email" placeholder="Email">
                                <span class="focus-area-input"></span>
                                <span class="icone-input">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- MENSAGEM --}}
                        <div class="row">
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="wrap-area-input">
                                    <textarea class="area-input" name="message" placeholder="Mensagem"></textarea>
                                    <span class="focus-area-input"></span>
                                </div>
                            </div>
                        </div>

                        {{-- BOTÃO --}}
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-formulario">
                                    <span>Enivar</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
