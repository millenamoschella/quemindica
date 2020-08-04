<!doctype html>
<html lang="pt-BR">

<head>
    <title>QUEM INDICA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- ASSETS --}}
    <link rel="stylesheet" href="{{ asset('../css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}">
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">
</head>

<body>

    {{-- MENU --}}

    <header class="container-fluid fixed-top">

        {{-- ÁRREA MENU --}}
        <nav class="navbar" id="btn_qi">
            <div class="container-fluid">

                {{-- ÁREA LOGO --}}
                <div class="navbar-header">
                    <a class="navbar-brand " href="{{ url('home') }}">
                        <img src="{{ asset('../imagens/logo-icon.svg') }}" width="50" height="50" alt="">
                        <strong id="quemindica">Quem Indica</strong>
                    </a>
                </div>

                {{-- ÁREA MODAL DE SUPORTE E LOGIN --}}
                <ul class="nav navbar-nav navbar-right list-group list-group-horizontal">

                    {{-- SUPORTE --}}
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalSuporte">
                            <button class="button_suporte button1"><img src="{{ asset('../icones/suporte.png') }}"
                                    width="40" height="40" alt="suporte">
                            </button>
                        </a>
                    </li>

                    {{-- LOGIN --}}
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalEntrar">
                            <button class="button button1 text-uppercase"><strong>Entrar</strong>
                            </button>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

    </header>

    {{-- MODAL LOGIN --}}

    <div id="modalEntrar" class="modal fade" tabindex="-1" role="dialog">

        {{-- MODAL LOGIN --}}
        <div class="modal-dialog">
            <div class="modal-content">

                {{-- HEADER MODAL --}}
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                </div>

                {{-- CORPO MODAL --}}
                <div class="modal-body">

                    {{-- FORMULÁRIO --}}
                    <form class="form-signin" action="login.php" method="POST">

                        {{-- EMAIL --}}
                        <label for="inputEmail" class="sr-only">Endereço de email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required="">
                        <br>

                        {{-- SENHA --}}
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Lembrar de mim
                            </label>
                        </div>

                        {{-- BOTÃO --}}
                        <button class="btn btn-lg btn-block padrao" type="submit">Entrar</button>
                        <div class="mb-3 text-center">
                            <a href="#">Esqueci minha senha</a>
                        </div>
                        <button class="btn btn-lg btn-block padrao" type="submit">Cadastrar</button>

                    </form>

                </div>

                {{-- FOOTER MODAL --}}
                <div class="modal-footer">

                    {{-- BOTÃO --}}
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>

                </div>

            </div>
        </div>

    </div>

    {{-- MODAL SUPORTE --}}

    <div id="modalSuporte" class="modal fade" tabindex="-1" role="dialog">

        {{-- INÍCIO MODAL SUPORTE --}}
        <div class="modal-dialog">
            <div class="modal-content">

                {{-- HEADER MODAL SUPORTE --}}
                <div class="modal-header">
                    <h4 class="modal-title">Suporte</h4><!-- Título -->
                </div>

                {{-- CORPO MODAL SUPORTE --}}
                <div class="modal-body">
                    <div class="main">
                        <div class="container">
                            <div class="signup-content">

                                {{-- IMAGEM --}}
                                <div class="signup-img">
                                    <img src="{{ asset('../imagens/institucional/banner02.jpg') }}" alt="">
                                </div>

                                {{-- FORMULÁRIO --}}
                                <div class="signup-form">

                                    <form action="suporte.php" method="POST" class="register-form" id="register-form">
                                        <div class="row">

                                            {{-- NOME --}}
                                            <div class="col">
                                                <label for="nome">Nome</label>
                                                <input type="text" value="" name="nome" id="nome" class="form-control"
                                                    placeholder="Nome">
                                            </div>

                                            {{-- SOBRENOME
                                            --}}
                                            <div class="col">
                                                <label for="sobrenome">Sobrenome</label>
                                                <input type="text" value="" name="sobrenome" id="sobrenome"
                                                    class="form-control" placeholder="Sobrenome">
                                            </div>

                                        </div>

                                        {{-- EMAIL --}}
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="text" value="" name="email" id="email"
                                                placeholder="@.com">
                                        </div>

                                        {{-- TEXTAREA --}}
                                        <div class="form-group purple-border">
                                            <label for="exampleFormControlTextarea4">Mensagem</label>
                                            <textarea class="form-control" name="mensagem" id="email" rows="3">
                                            </textarea>
                                        </div>

                                        {{-- BOTÃO --}}
                                        <div class="input-group-append" id="enviar">
                                            <button class="btn btn-md btn-dark m-0 px-3" type="button" value=""
                                                class="submit" name="enviar" id="enviar">Enviar</button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- FOOTER MODAL SUPORTE --}}
                <div class="modal-footer">
                    {{-- BOTÃO FECHAR --}}
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>

            </div>
        </div>

    </div>

    {{-- CONTEÚDO INDEX --}}

    @yield('content')

    {{-- FOOTER --}}

    @extends('layouts.footer')


    {{-- BOOTSTRAP --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
