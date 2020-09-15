<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QUEM INDICA</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    {{-- CSS LAYOUTS --}}
    <link rel="stylesheet" href="{{ asset('../css/layout-menuoff.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/estilo.css') }}">

    {{-- CSS PÁGS. ESTÁTICAS --}}
    {{-- <link rel="stylesheet" href="{{ asset('../css/home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('../css/sobre.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/politicas.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/resetPassword.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/emailSend.css') }}">

    {{-- CSS MODAIS --}}
    <link rel="stylesheet" href="{{ asset('../css/modalRegistrar.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modalLogin.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modalFotoPerfil.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modalSuporte.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modal.css') }}">


    {{-- SCRIPTS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/registerRules.js') }}" defer></script>


    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">


    {{-- ÍCONES --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script defer src="https://kit.fontawesome.com/1dccee3303.js" crossorigin="anonymous"></script>
</head>



<body>

    {{-- MENU --}}

    <header class="container-fluid fixed-top nav-off">

        {{-- ÁRREA MENU --}}
        <nav class="container-fluid mb-1 navbar navbar-expand-lg navbar-dark info-color">

            {{-- LOGO E QUEM INDICA --}}
            <div class="nav-brand logo-nav">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" alt="Logo Quem Indica" class="img-fluid">
                </a>
                <a class="navbar-brand titulo-quemindica" href="{{ route('home') }}">
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


                    <li class="nav-item botao-suporte">
                        <a href="#" data-toggle="modal" data-target="#modalSuporte" class="nav-link">
                            <img src="{{ asset('../icones/support.png') }}"
                                onmouseover="this.src='{{ asset('../icones/support-after.png') }}';"
                                onmouseout="this.src='{{ asset('../icones/support.png') }}';" class="btn-suporte">
                        </a>
                    </li>

                    @guest
                        {{-- BOTÃO LOGIN --}}
                        <li class="nav-item botao-loginRegistrar">
                            <a href="#" data-toggle="modal" data-target="#modalEntrar" class="nav-link">
                                <button class="btn-yellow">
                                    <strong>Login</strong>
                                </button>
                            </a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item botao-loginRegistrar">
                                <a href="#" data-toggle="modal" data-target="#modalRegistrar" class="nav-link">
                                    <button class="btn-yellow">
                                        <strong>{{ __('Registrar') }}</strong>
                                    </button>
                                </a>
                            </li>
                        @endif

                    @else

                        {{-- NOME DO USUÁRIO + BOTÃO LOGOUT
                        --}}
                        <li class="nav-item dropdown">

                            {{-- NOME DO USUÁRIO --}}
                            <a id="navbarDropdown" class="nav-link dropdown-toggle drop-menuoff" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}

                                @if (Auth::user()->photo == null)
                                    <img src="{{ asset('imagens/institucional/usuario.png') }}" alt="foto default"
                                        class="rounded-circle avatar-menu-off">
                                @else
                                    <img src="{{ asset('uploads/photos/' . Auth::user()->photo) }}"
                                        class="rounded-circle avatar-menu-off">
                                @endif
                            </a>

                            {{-- BOTÃO SAIR --}}
                            <div class="dropdown-menu dropdown-menu-right rounded-0 menu-links-menuoff"
                                aria-labelledby="navbarDropdown">

                                {{-- BOTÃO SAIR --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
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
