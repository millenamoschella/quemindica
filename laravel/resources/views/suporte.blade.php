@extends('layouts.layout-minhaconta')


@section('content')

    <div class="grid-container">
        <div class="main">
            <div class="container">
                <div class="signup-content">

                    {{-- ÁREA BANNER FORMULÁRIO SUPORTE --}}
                    <div class="signup-img">
                        <img src="{{ asset('../imagens/institucional/banner02.jpg') }}" alt="">
                    </div>

                    {{-- ÁREA FORMULÁRIO SUPORTE --}}
                    <div class="signup-form">
                        <form action="suporte.php" method="POST" class="register-form" id="register-form">

                            {{-- TÍTUCLO FORMULÁRIO --}}
                            <div class="titulo">
                                <h2>Suporte</h2>
                            </div>

                            {{-- 1º ROW - NOME E SOBRENOME --}}
                            <div class="row">

                                {{-- NOME --}}
                                <div class="col">
                                    <label for="nome">Nome</label>
                                    <input type="text" value="" name="nome" id="nome" class="form-control"
                                        placeholder="Nome">
                                </div>

                                {{-- SOBRENOME --}}
                                <div class="col">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" value="" name="sobrenome" id="sobrenome" class="form-control"
                                        placeholder="Sobrenome">
                                </div>

                            </div>

                            {{-- EMAIL --}}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" value="" name="email" id="email"
                                    placeholder="@.com">
                            </div>

                            {{-- MENSAGEM --}}
                            <div class="form-group purple-border">
                                <label for="exampleFormControlTextarea4">Mensagem</label>
                                <textarea class="form-control" name="mensagem" id="email" rows="3"></textarea>
                            </div>

                            {{-- BOTÃO --}}
                            <div class="input-group-append" id="enviar">
                                <button class="btn btn-md btn-dark m-0 px-3" type="button" value="" class="submit"
                                    name="enviar" id="enviar">Enviar</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
