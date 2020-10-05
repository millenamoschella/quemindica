<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- SCRIPTS --}}
    @stack('scripts')
    <script src="{{ asset('public/js/fontAwesome.js') }}" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Quem Indica</title>

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('../imagens/logo/logo-icon.svg') }}" type="image/x-icon">

    {{-- CSS --}}
    @section('style')
        <link rel="stylesheet" href="{{ asset('../css/layout-admin.css') }}">
        <link rel="stylesheet" href="{{ asset('../css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('../css/servicos.css') }}">
        <link rel="stylesheet" href="{{ asset('../css/footer.css') }}">
    @show

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- FONT AWESOME --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05e16292f5.js" crossorigin="anonymous"></script>
</head>

<body>

    {{-- MENU --}}
    @yield('header')


    {{-- PAINEL ADMIN --}}
    <div class="secao-admin-painel">
        <div class="container-fluid">

            {{-- MENU --}}
            <section class="cards-admin">
                <div class="row">

                    @yield('menu-admin')

                </div>
            </section>


            @yield('content')

        </div>
    </div>

    {{-- FOOTER --}}
    @yield('footer')


    {{-- BOOTSTRAP --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>
