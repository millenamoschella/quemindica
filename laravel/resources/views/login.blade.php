@extends('layouts.layout-off')

@section('content')

    {{-- ÁREA LOGO E TÍTULO --}}
    <section class="banner_azul">
        <div class="container text-center">
            <img src="{{ asset('imagens/logo/logo-icon.svg') }}" class="rounded" id="quemindica" alt="Quem Indica">
            <h1><strong>Bem-vindo(a) ao Quem Indica!</strong></h1>
        </div>
    </section>

    {{-- ÁREA FORMULÁRIO DE CADASTRO --}}
    <form class="form-signin" action="login.php" method="POST">
        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required=""><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-block padrao" type="submit">Entrar</button>
        <div class="espaco">
            <a href="#"> Esqueci minha senha</a>
        </div>
    </form>

@endsection
