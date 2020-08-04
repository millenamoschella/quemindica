<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - Quem Indica</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    {{-- ASSETS --}}
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/minhaConta.css">
    <!-- <link rel="stylesheet" href="css/feedresponsivo.css"> -->

    <!-- ÍCONES -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>

<body>

    {{-- MENU --}}

    <nav class="navbar navbar-expand-lg bd-navbar navbar-light fixed-top fundo">

        {{-- ÁREA BUSCA --}}
        <div class="d-flex">
            <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" width="50" height="50">
            <form class="form-inline">
                <input class="form-control  divBusca" type="search" placeholder="Buscar" aria-label="Search">
            </form>
        </div>

        {{-- ÁREA BOTÃO MENU LADO DIREITO --}}
        <button class="navbar-toggler bg-light " type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- ÁRREA MENU LATERAL --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-auto">
                <div class="dropdown">
                    {{-- ÁREA FOTO USUÁRIO MENU --}}
                    <img src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}" alt="Foto do usuario" width="40px"
                        class="rounded">

                    {{-- ÁREA NOME USUÁRIO MENU --}}
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shyrles Monteiro
                    </a>

                    {{-- ÁREA DROPDOWN MENU --}}
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('feed') }}">Feed</a>
                        <a class="dropdown-item" href="{{ url('servicos') }}">Serviços</a>
                        <a class="dropdown-item" href="{{ url('perfil') }}">Meu Perfil</a>
                        <a class="dropdown-item" href="{{ url('suporte') }}">Suporte</a>
                        <a class="dropdown-item" href="{{ url('home') }}">Sair</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>

    {{-- CONTEÚDO FEED --}}

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
