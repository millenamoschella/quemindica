{{-- @extends('layouts.layout-menulogado') --}}


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEM INDICA</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- ASSETS --}}

    <link rel="stylesheet" href="{{ asset('../css/servicos.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/admin.css') }}">


    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">

    <!-- ÍCONES -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>



    {{-- PAINEL ADMIN --}}
    <div class="secao-admin-painel">
        <div class="container-fluid">

            {{-- MENU --}}
            <section class="cards-admin">
                <div class="row">

                    {{-- USUÁRIOS --}}

                    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-b-admin">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>5</h3>
                                            <span><a href="{{ route('admin-usuarios') }}">Usuários</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-users float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- INDICAÇÕES --}}
                    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-b-admin">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>65</h3>
                                            <span><a href="{{ route('admin-indicacoes') }}">Indicações</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-file-text-o float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- SERVIÇOS --}}
                    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-b-admin">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>10</h3>
                                            <span><a href="{{ route('admin-servicos') }}">Serviços</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-comments float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            @yield('content')


        </div>
    </div>


    {{-- FOOTER --}}

    @extends('layouts.footer')


    {{-- BOOTSTRAP --}}


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

</body>

</html>
