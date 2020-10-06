@extends('admin.layout-admin')

@section('title', 'Admin - Indicações de Cultura')


@section('header')
    @include('layouts.layout-menulogado')
@endsection


{{-- MENU --}}
@section('menu-admin')

    {{-- USUÁRIOS --}}
    <div class="col-lg-3 col-md-4 col-sm-12 card-admin">
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
    <div class="col-lg-3 col-md-4 col-sm-12 card-admin">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-b-admin">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3>{{ $cultures->total() }}</h3>
                            <span><a href="{{ route('admin-culture') }}">Cultura</a></span>
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
    <div class="col-lg-3 col-md-4 col-sm-12 card-admin">
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
    <div class="col-lg-3 col-md-4 col-sm-12 card-admin">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-b-admin">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3>{{ count($products) }}</h3>
                            <span><a href="{{ route('admin-product') }}">Produto</a></span>
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
                    <h2 class="text-center">Indicações de Cultura</h2>

                    {{-- PESQUISAR --}}
                    <div class="row justify-content-center pb-4">
                        <div class="col-md-12">

                            <div class="wrap secao-pesquisa-admin">
                                <div class="pesquisar">
                                    <form action="{{ url('admin-culture') }}" method="GET" class="form-inline busca">
                                        @csrf
                                        <input type="text" class="input-pesquisar-admin" placeholder="Pesquisar">
                                        <button type="submit" class="botao-pesquisar-admin">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- TABELA --}}
                    <table class="table table-striped text-center">

                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Título</th>
                                <th scope="col">Plataforma</th>
                                <th scope="col">Segmento</th>
                                <th scope="col">Avaliação</th>
                                <th scope="col">Nota</th>
                                <th scope="col">Data Criação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cultures as $culture)

                                <tr>
                                    <th scope="row">{{ $culture->id }}</th>
                                    <td>{{ $culture->titulo }}</td>
                                    <td>{{ $culture->plataforma }}</td>
                                    <td>{{ $culture->culture_segment->tipo }}</td>

                                    @foreach ($posts as $post)
                                        @if ($culture->id == $post->culture_id)
                                            <td>{{ $post->conteudo }}</td>
                                        @endif
                                    @endforeach

                                    <td>{{ $culture->rating[0]->nota }}</td>
                                    <td>{{ $culture->created_at->diffforhumans() }}</td>

                                    <td>
                                        <a href="{{ route('cultureDelete', $culture->id) }}">
                                            <i class="fa fa-trash-o btn" aria-hidden="true"></i>
                                        </a>

                                        <a href="{{ route('showCulture', $culture->id) }}">
                                            <i class="fa fa-eye btn" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </section>

    {{ $cultures->links() }}

@endsection


@section('footer')
    @include('layouts.footer-logado')
@endsection
