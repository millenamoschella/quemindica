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
    <link rel="stylesheet" href="{{ asset('../css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">
</head>

<body>

    {{-- MENU --}}

    <header class="container-fluid fixed-top">

        {{-- ÁRREA MENU --}}
        <nav class="container navbar" id="btn_qi">
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

                    {{-- SUPORTE NAV --}}
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalSuporte">
                            <button class="button_suporte button1">
                                <img src="{{ asset('../icones/suporte.png') }}" width="40" height="40" alt="suporte">
                            </button>
                        </a>
                    </li>

                    {{-- LOGIN NAV --}}
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
</body>

</html>
