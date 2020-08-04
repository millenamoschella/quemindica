@extends('layouts.layout-off')


@section('content')


    {{-- ÁREA TÍTULO --}}
    <section class="banner_azul">
        <div class="container text-center">
            <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" class="rounded" id="quemindica" alt="Quem Indica">
            <h1><strong>Criar Conta</strong></h1>
        </div>
    </section>

    {{-- ÁREA FORMULÁRIO DE CADASTRO --}}
    <form class="form-signin1" action="registro.php" method="POST">

        {{-- NOME --}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class=" radius form-control" id="nome" required>
            <p class="obrigatorio">Obrigatório</p>
        </div>

        {{-- EMAIL --}}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class=" radius form-control" id="email" required>
            <p class="obrigatorio">Obrigatório</p>
        </div>

        {{-- SENHA --}}
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class=" radius form-control" id="senha" required>
            <p class="obrigatorio">Obrigatório</p>
        </div>

        {{-- CHECK BOX GÊNERO --}}
        <label for="identifica">Como você se identifica?</label> <br>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="masculino" value="opcao1">
            <label class="form-check-label" for="masculino">Masculino</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="feminino" value="opcao2">
            <label class="form-check-label" for="feminino">Feminino</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="personalizado" value="opcao3">
            <label class="form-check-label" for="personalizado">Personalizado</label>
        </div>

        {{-- BOTÃO CRIAR CONTA + TERMOS --}}
        <div class="espaco">

            <label for="termos">
                <input type="checkbox" name="termos" id="termos" value="termos">Aceita os termos e condições</label>
            <div class="espaco">
                <button class="padrao" type="submit"><a class="padrao" href="feed.php">Criar Conta</a></button>
            </div>

        </div>

    </form>



@endsection
