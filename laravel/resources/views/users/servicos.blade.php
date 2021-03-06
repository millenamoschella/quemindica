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


    <div class="secao-servicos-geral">
        <div class="row">


            {{-- SEÇÃO FILTROS --}}
            <div class="col-lg-3 col-md-4 col-sm-12 side-filtros">

                <div class="card-sticky">

                    {{-- ÁREA PESQUISA --}}
                    <div class="row pesquisa-servico">
                        <div class="container-fluid">

                            <div class="input-group">

                                <input type="text" class="input-pesquisa-servico form-control"
                                    placeholder="Pesquisar serviço">

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

            </div>


            {{-- SEÇÃO SERVIÇOS --}}
            <div class="col-lg-9 col-md-8 col-sm-12 secao-servicos">

                <h1 class="text-center">Serviços</h1>

                {{-- CARDS SERVIÇOS --}}
                <div class="row">

                    {{-- SERVIÇO 1 --}}
                    @foreach ($postsUser as $post)
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">

                                <div class="card-servicos">
                                    {{-- IMAGEM SERVIÇO
                                    --}}


                                    @if ($post->photo == null)
                                        <img src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço"
                                            class="img-fluid">
                                    @else
                                        <img src="{{ asset('uploads/services/' . $post->photo) }}" alt="Foto Serviço"
                                            class="default-photo-user img-fluid">
                                    @endif



                                    {{-- BOTÃO
                                    --}}
                                    <div class="card-img-overlay">
                                        <a href="{{ route('servico.show', $post->id) }}">
                                            <button class="btn Auth::user()->">Contratar
                                                <i class="fa fa-check-square-o"></i>
                                            </button>
                                        </a>
                                    </div>

                                    <div class="card-body">

                                        {{-- TÍTULO SERVIÇO
                                        --}}

                                        <div class="text-service">
                                            <span class="service-card-title">Serviço: </span>
                                            <span class="service-text-card"> {{ $post->servico }}</span>
                                        </div>
                                        <div class="text-service">
                                            <span class="service-card-title">Prestador: </span>
                                            <span class="service-text-card"> {{ $post->nome_prestador }}</span>
                                        </div>
                                        <div class="text-service">
                                            <span class="service-card-title">Local: </span>
                                            <span class="service-text-card"> {{ $post->local }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>

            </div>


        </div>
    </div>

@endsection



@section('footer')
    @include('layouts.footer-logado')
@endsection
