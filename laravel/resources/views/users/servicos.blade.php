@extends('layouts.layout-menulogado')


@section('content')

    {{-- SEÇÃO SERVIÇOS --}}
    <section class="container secao-servicos">

        <h1 class="text-center">Serviços</h1>

        <div class="row">

            {{-- SERVIÇO 1 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>


            {{-- SERVIÇO 2 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>


            {{-- SERVIÇO 3 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>


            {{-- SERVIÇO 4 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>


            {{-- SERVIÇO 5 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>


            {{-- SERVIÇO 3 --}}
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">

                    {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO BANCO DE DADOS
                    --}}

                    <div class="card-servicos">

                        {{-- IMAGEM SERVIÇO --}}
                        <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço">

                        {{-- BOTÃO --}}
                        <div class="card-img-overlay">
                            <a href="{{ url('home') }}">
                                <button class="btn">Contratar
                                    <i class="fa fa-check-square-o"></i>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">

                            {{-- TÍTULO SERVIÇO --}}
                            <h4 class="card-title">Título do Serviço</h4>

                            {{-- DESCRIÇÃO SERVIÇO --}}
                            <p class="card-text">
                                Descrição do Serviço
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
@endsection
