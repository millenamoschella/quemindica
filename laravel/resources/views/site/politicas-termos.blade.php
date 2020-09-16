@extends('layouts.layout')

@section('title', 'Termos')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/politicas.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menuoff')
@endsection


@section('content')


    {{-- ÁREA TÍTULO --}}
    <div class="container text-center">
        <h1>Políticas e Termos</h1>
    </div>

    {{-- ÁREA TEXTOS --}}
    <section class="secao-termos">
        <div class="container">

            <div class="row">

                {{-- MENU --}}


                <div class="col-lg-3 col-md-4 col-sm-12 menu-termos">
                    <div class="list-group">

                        <a href="#termos-uso" class="list-group-item text-center">
                            Termos de Uso
                        </a>

                        <a href="#politica-dados" class="list-group-item text-center">
                            Política de Dados
                        </a>

                        <a href="#politica-cookies" class="list-group-item text-center">
                            Política de Cookies
                        </a>

                    </div>
                </div>


                {{-- TEXTOS --}}
                <div class="col-lg-9 col-md-8 col-sm-12 textos-termos-politicas">

                    {{-- TERMOS DE USO --}}
                    <div id="termos-uso">
                        <h2>Termos de Uso</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices sagittis feugiat.
                            Aliquam luctus lobortis ultrices. Donec commodo erat nec turpis porttitor convallis. Etiam
                            euismod, velit id tincidunt cursus, felis metus egestas lacus, id condimentum est mi vitae
                            ante.
                            Proin laoreet sed nibh sit amet faucibus. Pellentesque habitant morbi tristique senectus et
                            netus et malesuada fames ac turpis egestas. Morbi et metus vitae dui elementum luctus. In
                            aliquet mauris vel venenatis mattis. Pellentesque sollicitudin sapien vel aliquet ornare.
                            Sed
                            sollicitudin in neque ut ornare. Sed venenatis in ante non semper. Aliquam vitae bibendum
                            neque,
                            imperdiet sollicitudin dolor. Morbi semper metus volutpat mollis tempus. Pellentesque at
                            purus
                            ultricies, euismod justo vel, commodo odio. Phasellus a dolor a turpis condimentum suscipit.
                            Nam
                            fringilla efficitur lectus, et viverra ante bibendum nec.

                            Nam euismod dictum cursus. Mauris eu commodo odio. Donec congue auctor pellentesque. Nam sed
                            porta elit, in sollicitudin turpis. Pellentesque et diam vel arcu fermentum lobortis. Nulla
                            facilisi. Aliquam id eleifend orci. Curabitur tempor at elit non imperdiet. Aliquam at
                            consequat
                            nisl.

                            Aliquam eu tellus tortor. Sed eros nisi, consectetur eget lectus at, aliquet aliquet lacus.
                            Vestibulum commodo a nulla vel egestas. Nulla mollis risus vel facilisis efficitur. Sed
                            efficitur, ligula in ullamcorper lobortis, leo nulla rutrum turpis, ac rutrum tortor massa
                            sit
                            amet quam. Curabitur accumsan molestie enim in dictum. In ac purus nunc. Sed a metus id diam
                            rutrum aliquam a vitae est. Vivamus porttitor placerat mauris, sit amet dapibus purus. Donec
                            viverra ornare magna, ac congue nisl malesuada ac. Phasellus pulvinar vehicula lorem, sed
                            lacinia augue.
                        </p>
                    </div>


                    {{-- POLÍTICA DE DADOS --}}
                    <div id="politica-dados">
                        <h2>Política de Dados</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices sagittis feugiat.
                            Aliquam luctus lobortis ultrices. Donec commodo erat nec turpis porttitor convallis. Etiam
                            euismod, velit id tincidunt cursus, felis metus egestas lacus, id condimentum est mi vitae
                            ante.
                            Proin laoreet sed nibh sit amet faucibus. Pellentesque habitant morbi tristique senectus et
                            netus et malesuada fames ac turpis egestas. Morbi et metus vitae dui elementum luctus. In
                            aliquet mauris vel venenatis mattis. Pellentesque sollicitudin sapien vel aliquet ornare.
                            Sed
                            sollicitudin in neque ut ornare. Sed venenatis in ante non semper. Aliquam vitae bibendum
                            neque,
                            imperdiet sollicitudin dolor. Morbi semper metus volutpat mollis tempus. Pellentesque at
                            purus
                            ultricies, euismod justo vel, commodo odio. Phasellus a dolor a turpis condimentum suscipit.
                            Nam
                            fringilla efficitur lectus, et viverra ante bibendum nec.

                            Nam euismod dictum cursus. Mauris eu commodo odio. Donec congue auctor pellentesque. Nam sed
                            porta elit, in sollicitudin turpis. Pellentesque et diam vel arcu fermentum lobortis. Nulla
                            facilisi. Aliquam id eleifend orci. Curabitur tempor at elit non imperdiet. Aliquam at
                            consequat
                            nisl.

                            Aliquam eu tellus tortor. Sed eros nisi, consectetur eget lectus at, aliquet aliquet lacus.
                            Vestibulum commodo a nulla vel egestas. Nulla mollis risus vel facilisis efficitur. Sed
                            efficitur, ligula in ullamcorper lobortis, leo nulla rutrum turpis, ac rutrum tortor massa
                            sit
                            amet quam. Curabitur accumsan molestie enim in dictum. In ac purus nunc. Sed a metus id diam
                            rutrum aliquam a vitae est. Vivamus porttitor placerat mauris, sit amet dapibus purus. Donec
                            viverra ornare magna, ac congue nisl malesuada ac. Phasellus pulvinar vehicula lorem, sed
                            lacinia augue.
                        </p>
                    </div>


                    {{-- POLÍTICA DE COOKIES --}}
                    <div id="politica-cookies">
                        <h2>Política de Cookies</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices sagittis feugiat.
                            Aliquam luctus lobortis ultrices. Donec commodo erat nec turpis porttitor convallis. Etiam
                            euismod, velit id tincidunt cursus, felis metus egestas lacus, id condimentum est mi vitae
                            ante.
                            Proin laoreet sed nibh sit amet faucibus. Pellentesque habitant morbi tristique senectus et
                            netus et malesuada fames ac turpis egestas. Morbi et metus vitae dui elementum luctus. In
                            aliquet mauris vel venenatis mattis. Pellentesque sollicitudin sapien vel aliquet ornare.
                            Sed
                            sollicitudin in neque ut ornare. Sed venenatis in ante non semper. Aliquam vitae bibendum
                            neque,
                            imperdiet sollicitudin dolor. Morbi semper metus volutpat mollis tempus. Pellentesque at
                            purus
                            ultricies, euismod justo vel, commodo odio. Phasellus a dolor a turpis condimentum suscipit.
                            Nam
                            fringilla efficitur lectus, et viverra ante bibendum nec.

                            Nam euismod dictum cursus. Mauris eu commodo odio. Donec congue auctor pellentesque. Nam sed
                            porta elit, in sollicitudin turpis. Pellentesque et diam vel arcu fermentum lobortis. Nulla
                            facilisi. Aliquam id eleifend orci. Curabitur tempor at elit non imperdiet. Aliquam at
                            consequat
                            nisl.

                            Aliquam eu tellus tortor. Sed eros nisi, consectetur eget lectus at, aliquet aliquet lacus.
                            Vestibulum commodo a nulla vel egestas. Nulla mollis risus vel facilisis efficitur. Sed
                            efficitur, ligula in ullamcorper lobortis, leo nulla rutrum turpis, ac rutrum tortor massa
                            sit
                            amet quam. Curabitur accumsan molestie enim in dictum. In ac purus nunc. Sed a metus id diam
                            rutrum aliquam a vitae est. Vivamus porttitor placerat mauris, sit amet dapibus purus. Donec
                            viverra ornare magna, ac congue nisl malesuada ac. Phasellus pulvinar vehicula lorem, sed
                            lacinia augue.
                        </p>
                    </div>

                </div>

            </div>

        </div>


        {{-- VOLTAR PARA O TOPO - CSS NO ESTILO.CSS --}}

        <a href="#" id="toTopBtn" class="btn toTopBtn" data-abc="true">
            <i class="fa fa-arrow-up"></i>
        </a>


    </section>


@endsection

@section('modal')
    @include('layouts.modal')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
