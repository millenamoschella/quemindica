<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEM INDICA</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    {{-- CSS LAYOUTS --}}
    <link rel="stylesheet" href="{{ asset('../css/layout-menulogado.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/footer.css') }}">

    {{-- CSS PÁGS. USUÁRIO --}}
    <link rel="stylesheet" href="{{ asset('../css/perfil.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/amigos.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/editarperfil.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/servicos.css') }}">

    {{-- CSS PÁGS. ADMIN --}}
    <link rel="stylesheet" href="{{ asset('../css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/suporte.css') }}">

    {{-- CSS PÁGS. MODAIS --}}
    <link rel="stylesheet" href="{{ asset('../css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modalFotoPerfil.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/modalCapaPerfil.css') }}">

    <link rel="stylesheet" href="{{ asset('../css/estilo.css') }}">


    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">

    {{-- ÍCONES --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05e16292f5.js" crossorigin="anonymous"></script>

    {{-- SCRIPTS --}}
    <script defer src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script defer src="{{ asset('../js/modalFotoPerfil.js') }}"></script>
    <script defer src="{{ asset('../js/app.js') }}"></script>
    <script defer src="{{ asset('../js/modal-fotoCapa.js') }}"></script>


</head>

<body>
    <header>
        {{-- MENU --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu-logado" id="mainNav">

            {{-- TÍTULO --}}
            <a href="{{ url('home') }}">
                <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" class="img-fluid logo-menu-logado">
            </a>

            <a class="navbar-brand titulo-menu-logado" href="{{ route('home') }}">QUEM INDICA</a>

            {{-- SEÇÃO MENU NOTIFICAÇÕES, PESQUISAR E SAIR
            --}}

            {{-- BOTÃO MENU RESPONSIVO--}}
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- MENU NAV --}}

            <div class="collapse navbar-collapse menu-nav-logado" id="navbarResponsive">
                <ul class="navbar-nav ml-auto componentes-menu-logado">

                    {{-- FOTO USUÁRIO E LINKS --}}
                    <div class="dropdown ml-auto foto-links-menu-logado">

                        {{-- MENU AUTH --}}
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                {{-- BOTÃO LOGIN E REGISTRAR
                                --}}
                                @guest
                                    {{-- LOGIN --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    {{-- REGISTRAR --}}
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else

                                    {{-- NOME DO USUÁRIO E FOTO USUÁRIO
                                    --}}

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle seta-drop-menulog" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ $user->name }}

                                        @if ($user->photo == null)
                                            <img src="{{ asset('imagens/institucional/usuario.png') }}" alt="foto default"
                                                class="rounded-circle avatar-menu-logado">
                                        @else
                                            <img src="{{ asset('uploads/photos/' . $user->photo) }}"
                                                class="rounded-circle avatar-menu-logado">
                                        @endif
                                    </a>

                                    {{-- MENU DROPDOWN --}}
                                    <div class="dropdown-menu dropdown-menu-right rounded-0 menu-links-menulog"
                                        aria-labelledby="messages">
                                        <a class="dropdown-item" href="{{ route('user', $user->username) }}">Meu
                                            Perfil</a>
                                        <a class="dropdown-item" href="{{ route('amigos') }}">Amigos</a>
                                        <a class="dropdown-item" href="{{ route('servicos') }}">Serviços</a>
                                        <a class="dropdown-item" href="{{ route('suporte') }}">Suporte</a>
                                        <a class="dropdown-item" href="{{ route('editarperfil', $user->id) }}">Editar
                                            Perfil</a>
                                    </div>

                                @endguest

                            </ul>
                        </div>
                        {{-- FINAL MENU AUTH --}}

                    </div>


                    {{-- ÁREA NOTIFICAÇÕES MENSAGENS --}}
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>

                            <span class="d-lg-none titulo-not-mobile-menulog">Mensagens
                                <span class="badge badge-pill not-badge-mobile">1 Nova</span>
                            </span>

                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">Novas Mensagens</h6>
                            <div class="dropdown-divider"></div>

                            {{-- EXEMPLO NOTIFICAÇÃO MENSAGEM
                            --}}
                            <a class="dropdown-item" href="#">

                                <strong class="nome-user-not">Sara Margarido</strong>

                                <span class="small float-right text-muted">15:45</span>

                                <div class="dropdown-message small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Proin at eros magna. Maecenas
                                    ultricies orci ac purus vestibulum tincidunt.
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>

                            {{-- BOTÃO VER TODAS AS MENSAGENS
                            --}}
                            <a class="dropdown-item small ver-mais-menu" href="#">Ver Todas</a>

                        </div>
                    </li>


                    {{-- ÁREA NOTIFICAÇÕES GERAIS --}}
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">

                            <i class="fa fa-fw fa-bell"></i>

                            <span class="d-lg-none titulo-not-mobile-menulog">Notificações
                                <span class="badge badge-pill not-badge-mobile">1 Nova</span>
                            </span>

                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">

                            <h6 class="dropdown-header">Novas Notificações</h6>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">

                                <strong class="nome-user-not">Marcia está te seguindo</strong>

                                <span class="small float-right text-muted">10:04</span>

                            </a>

                            <div class="dropdown-divider"></div>

                            {{-- VER TODAS AS NOTIFICAÇÕES
                            --}}
                            <a class="dropdown-item small ver-mais-menu" href="#">Ver Todas</a>

                        </div>
                    </li>


                    {{-- ÁREA PESQUISA --}}
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Pesquisar">
                                <span class="input-group-append">

                                    <button class="btn btn-pesquisa-menu" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>

                                </span>
                            </div>
                        </form>
                    </li>


                    {{-- BOTÃO SAIR --}}
                    <li class="nav-item botao-sair-menu">

                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i><span>Sair</span></a>

                    </li>

                </ul>
            </div>

        </nav>


        {{-- MODAL SAIR --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title modal-titulo-menu" id="exampleModalLabel">Desejar sair da conta?</h5>

                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>

                    <div class="modal-body texto-modal-sair">Selecione <b>sair</b> abaixo para sair da conta</div>

                    <div class="modal-footer">

                        {{-- BOTÃO CANCELAR --}}
                        <button class="btn btn-sm btn-botao-modal-menu-cancelar" type="button"
                            data-dismiss="modal">Cancelar
                        </button>

                        {{-- BOTÃO SAIR --}}
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <button class="btn btn-sm btn-botao-modal-menu-sair" type="button"
                                data-dismiss="modal">{{ __('Logout') }}
                            </button>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>



                    </div>

                </div>
            </div>
        </div>
        </div>
    </header>



    {{-- CONTEÚDO FEED --}}

    @yield('content')

    @yield('modal')

    {{-- FOOTER --}}

    @extends('layouts.footer-logado')

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
