<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QUEM INDICA</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    {{-- ASSETS --}}
    <link rel="stylesheet" href="{{ asset('../css/layout-menuoff.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/registrar.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/sobre.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/politicas.css') }}">

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">

    <!-- ÍCONES -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>

    {{-- MENU --}}

    <header class="container-fluid fixed-top nav-off">

        {{-- ÁRREA MENU --}}
        <nav class="container-fluid mb-1 navbar navbar-expand-lg navbar-dark info-color">

            {{-- LOGO E QUEM INDICA --}}
            <div class="nav-brand logo-nav">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" alt="Logo Quem Indica" class="img-fluid">
                </a>
                <a class="navbar-brand titulo-quemindica" href="{{ url('home') }}">
                    Quem Indica
                </a>
            </div>

            {{-- MENU RESPONSIVO --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- BOTÕES SUPORTE, LOGIN E REGISTRAR --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">

                    {{-- BOTÃO SUPORTE --}}
                    <li class="nav-item botao-suporte">
                        <a href="#" data-toggle="modal" data-target="#modalSuporte" class="nav-link">
                            <img src="{{ asset('../icones/suporte.png') }}" class="btn-suporte">
                        </a>
                    </li>

                    {{-- BOTÃO LOGIN --}}
                    <li class="nav-item botao-loginRegistrar">
                        <a href="#" data-toggle="modal" data-target="#modalEntrar" class="nav-link">
                            <button class="btn-yellow">
                                <strong>Login</strong>
                            </button>
                        </a>
                    </li>

                    {{-- BOTÃO REGISTRAR --}}
                    <li class="nav-item botao-loginRegistrar">
                    <a href="#" data-toggle="modal" data-target="#modalRegistrar" class="nav-link">
                            <button class="btn-yellow">
                                <strong>Registrar</strong>
                            </button>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>


    {{-- MODAL --}}
    @extends('layouts.modal')


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


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
</body>

</html>
