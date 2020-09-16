@extends('layouts.layout')

@section('title', 'Serviços')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/servicos.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menulogado')
@endsection


@section('content')


    <div class="seção-servicos-geral">
        <div class="row">


            {{-- SEÇÃO FILTROS --}}
            <div class="col-lg-3 col-md-4 col-sm-12 side-filtros">

                {{-- ÁREA PESQUISA --}}
                <div class="row pesquisa-servico">
                    <div class="container-fluid">

                        <div class="input-group">

                            <input type="text" class="input-pesquisa-servico form-control" placeholder="Pesquisar serviço">

                            {{-- BOTÃO PESQUISAR SERVIÇO
                            --}}
                            <button class="btn botao-pesquisar-servico" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>

                        </div>
                    </div>
                </div>

                {{-- ÁREA FILTRO POR PREÇO --}}
                <div class="card pesquisa-preco">

                    <div class="card-header">
                        <h6 class="title text-center">Faixa de Preço</h6>
                    </div>

                    <div class="card-body">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>Min</label>
                                <input type="number" class="form-control input-faixa-preco-servico" id="min-prec"
                                    placeholder="R$ 0,00">
                            </div>

                            <div class="form-group col-md-6 text-right">
                                <label>Max</label>
                                <input type="number" class="form-control input-faixa-preco-servico" id="max-prec"
                                    placeholder="R$ 1.000,00">
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ÁREA FILTRO POR CATEGORIA DO SERVIÇO
                --}}
                <div class="card pesquisa-categoria">

                    <div class="card-header">
                        <h6 class="title text-center">Categoria</h6>
                    </div>

                    <div class="card-body">
                        <form>

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="decoracao">
                                <span class="form-check-label">
                                    Decoração
                                </span>
                            </label>

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="moda">
                                <span class="form-check-label">
                                    Moda
                                </span>
                            </label>

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="saude">
                                <span class="form-check-label">
                                    Saúde
                                </span>
                            </label>

                        </form>
                    </div>
                </div>

            </div>


            {{-- SEÇÃO SERVIÇOS --}}
            <div class="col-lg-9 col-md-8 col-sm-12 secao-servicos">

                <h1 class="text-center">Serviços</h1>

                {{-- CARDS SERVIÇOS --}}
                <div class="row">

                    {{-- SERVIÇO 1 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 2 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 3 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 4 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 5 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 6 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 7 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- SERVIÇO 8 --}}
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">

                            {{-- ÁREA FOREACH PARA PUXAR OS SERVIÇOS DO
                            BANCO
                            DE
                            DADOS
                            --}}

                            <div class="card-servicos">

                                {{-- IMAGEM SERVIÇO
                                --}}
                                <img class="card-img" src="{{ asset('../imagens/servicos/servico-3.jpg') }}"
                                    alt="Card Serviço">

                                {{-- BOTÃO
                                --}}
                                <div class="card-img-overlay">
                                    <a href="{{ url('home') }}">
                                        <button class="btn">Contratar
                                            <i class="fa fa-check-square-o"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="card-body">

                                    {{-- TÍTULO SERVIÇO
                                    --}}
                                    <h4 class="card-title">Título do Serviço</h4>

                                    {{-- DESCRIÇÃO SERVIÇO
                                    --}}
                                    <p class="card-text">
                                        Descrição do Serviço
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer-logado')
@endsection
