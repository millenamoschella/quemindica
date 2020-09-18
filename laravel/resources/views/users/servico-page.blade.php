@extends('layouts.layout')

@section('title', 'Serviços')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/servico-page.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menulogado')
@endsection


@section('content')


    <div class="services-bg">

        <div class="col-lg-8 text-center service-page-section">


            <h1>Serviço - {{ $service->servico }}</h1>

            {{-- CARDS SERVIÇOS --}}


            {{-- SERVIÇO 1 --}}
            <div class="col-lg-6 servico-page-div">
                <div class="card card-service">

                    <div class="card-service-page">
                        {{-- IMAGEM SERVIÇO
                        --}}

                        @if ($service->photo == null)
                            <img src="{{ asset('../imagens/servicos/servico-3.jpg') }}" alt="Card Serviço"
                                class="img-fluid">
                        @else
                            <img src="{{ asset('uploads/photos/services/' . $service->photo) }}" alt="Foto Serviço"
                                class="default-photo-user img-fluid">
                        @endif

                        <div class="card-body">

                            {{-- NOTA --}}
                            <div class="raintg-service-page">
                                @for ($i = 0; $i < 5; $i++)
                                    @if (floor($service->rating[0]->nota) - $i >= 1)
                                        <i class="fas fa-star "> </i>
                                    @elseif ($service->rating[0]->nota - $i > 0)
                                        <i class="fas fa-star-half-alt "> </i>
                                    @else
                                        <i class="far fa-star "> </i>
                                    @endif
                                @endfor

                                <h6 class="service-point-page">{{ 'Nota ' . $service->rating[0]->nota }}</h6>
                            </div>


                            <div class="all-text">
                                {{-- PRESTADOR --}}
                                <div class="text-service">
                                    <span class="service-text-page">Prestador: {{ $service->nome_prestador }}</span>
                                </div>

                                {{-- LOCAL --}}
                                <div class="text-service">
                                    <span class="service-text-page">Local: {{ $service->local }}</span>
                                </div>

                                {{-- VALOR --}}
                                <div class="text-service">
                                    <span class="service-text-page">Valor: {{ 'R$ ' . $service->valor . ',00' }}</span>
                                </div>

                                {{-- AVALIAÇÃO --}}
                                <div class="text-service">
                                    <span class="service-text-page">Avaliação: {{ $postContent->conteudo }}</span>
                                </div>
                            </div>

                        </div>

                        {{-- BOTÃO MENSAGEM --}}
                        <button class="btn messaga-button-service">
                            Mensagem
                        </button>

                    </div>

                </div>
            </div>

        </div>

    </div>


@endsection



@section('footer')
    @include('layouts.footer-logado')
@endsection
