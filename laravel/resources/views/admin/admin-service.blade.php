@extends('admin.layout-admin')

@section('title', 'Admin - Serviços')


@section('header')
    @include('layouts.layout-menulogado')
@endsection


{{-- MENU --}}
@section('menu-admin')

    {{-- USUÁRIOS --}}
    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-b-admin">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3>{{ count($users) }}</h3>
                            <span><a href="{{ route('admin') }}">Usuários</a></span>
                        </div>
                        <div class="align-self-center">
                            <i class="fa fa-users float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CULTURA --}}
    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-b-admin">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3>{{ count($cultures) }}</h3>
                            <span><a href="{{ route('admin-culture') }}">Indicação de Cultura</a></span>
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
                            <h3>{{ count($services) }}</h3>
                            <span><a href="{{ route('admin-service') }}">Serviços</a></span>
                        </div>
                        <div class="align-self-center">
                            <i class="fa fa-comments float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PRODUTO --}}
    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-b-admin">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3>{{ count($products) }}</h3>
                            <span><a href="{{ route('admin-product') }}">Indicação de Produto</a></span>
                        </div>
                        <div class="align-self-center">
                            <i class="fa fa-comments float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- CONTEÚDO --}}
@section('content')

    <section class="conteudo-admin">

        <div class="card mb-4">
            <div class="card-body">

                {{-- TABELA --}}

                <div class="table-responsive-sm">

                    {{-- NOME TABELA --}}
                    <h2 class="text-center">Serviços</h2>

                    {{-- PESQUISAR --}}
                    <div class="row justify-content-center pb-4">
                        <div class="col-md-12">

                            <div class="wrap secao-pesquisa-admin">
                                <div class="pesquisar">
                                    <input type="text" class="input-pesquisar-admin" placeholder="Pesquisar">
                                    <button type="submit" class="botao-pesquisar-admin">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- TABELA --}}
                    <table class="table table-striped text-center">

                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Segmento</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Local</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Coodernadas</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Avaliação</th>
                                <th scope="col">Nota</th>
                                <th scope="col">Data Criação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($services as $service)
                                {{-- @foreach ($posts as $post)
                                    --}}

                                    <tr>
                                        <th scope="row">{{ $service->id }}</th>
                                        <td>{{ $service->servico }}</td>
                                        <td>{{ $service->segment->tipo }}</td>
                                        <td>
                                            <a href="{{ route('user', $service->user->username) }}" target="_blank">
                                                {{ $service->nome_prestador }}
                                            </a>
                                        </td>
                                        <td>{{ $service->telefone }}</td>
                                        <td>R$ {{ $service->valor }},00</td>
                                        <td>{{ $service->local }}</td>
                                        <td>{{ $service->cidade }}</td>
                                        <td>{{ $service->estado }}</td>
                                        <td>{{ $service->coordenadas }}</td>
                                        <td>
                                            <a href="{{ route('servico.show', $service->id) }}" target="_blank">
                                                @if ($service->photo == null)
                                                    <img src="{{ asset('imagens/servicos/servico-6.png') }}"
                                                        alt="Foto default serviço" class="service-photo" width="80px">
                                                @else
                                                    <img src="{{ asset('uploads/services/' . $service->photo) }}"
                                                        alt="Foto serviço" class="service-photo" width="80px">
                                                @endif
                                            </a>
                                        </td>
                                        {{-- <td>{{ $post->conteudo }}</td>
                                        --}}
                                        <td>{{ $service->rating[0]->nota }}</td>
                                        <td>{{ $service->created_at->diffforhumans() }}</td>

                                        <td>
                                            <i class="fa fa-trash-o btn" aria-hidden="true"><a href=""></a></i>
                                            <i class="fa fa-eye btn" aria-hidden="true"><a href=""></a></i>
                                        </td>
                                    </tr>

                                    {{-- @endforeach
                                --}}
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </section>

@endsection


@section('footer')
    @include('layouts.footer-logado')
@endsection
