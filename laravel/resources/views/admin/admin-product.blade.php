@extends('admin.layout-admin')

@section('title', 'Admin - Indicações de Produtos')


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
                            <h3>{{ count($cultures) }}</h3>
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
                    <h2 class="text-center">Indicações de Produtos</h2>

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
                                <th scope="col">Nome</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Loja</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Avaliação</th>
                                <th scope="col">Nota</th>
                                <th scope="col">Data Criação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)

                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->nome }}</td>
                                    <td>{{ $product->marca }}</td>
                                    <td>R$ {{ $product->valor }},00</td>
                                    <td>{{ $product->loja }}</td>
                                    <td>{{ $product->cidade }}</td>
                                    <td>{{ $product->Estado }}</td>

                                    @foreach ($posts as $post)
                                        @if ($product->id == $post->product_id)
                                            <td>{{ $post->conteudo }}</td>
                                        @endif
                                    @endforeach

                                    <td>{{ $product->rating[0]->nota }}</td>
                                    <td>{{ $product->created_at->diffforhumans() }}</td>

                                    <td>
                                        <a href="{{ route('productDelete', $product->id) }}">
                                            <i class="fa fa-trash-o btn" aria-hidden="true"></i>
                                        </a>

                                        <i class="fa fa-eye btn" aria-hidden="true"><a href=""></a></i>
                                    </td>
                                </tr>

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
