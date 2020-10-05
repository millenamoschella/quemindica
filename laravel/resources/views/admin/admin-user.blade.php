@extends('admin.layout-admin')

@section('title', 'Admin - Usuários')


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
                    <h2 class="text-center">Usuários</h2>

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
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Bio</th>
                                <th scope="col">Data Nascimento</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Data Criação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <th>
                                        <a href="{{ route('user', $user->username) }}" target="_blank">
                                            {{ $user->name }}
                                        </a>
                                    </th>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ strtolower($user->email) }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ 'Rua ' . $user->street . '. Bairro ' . $user->neighborhood . '. Cep ' . $user->zip_code }}
                                    </td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->state }}</td>
                                    <td>{{ $user->about }}</td>
                                    <td>{{ $user->born_date }}</td>
                                    <td>
                                        <a href="{{ route('user', $user->username) }}" target="_blank">
                                            @if ($user->photo == null)
                                                <img src="{{ asset('imagens/institucional/user-default.jpg') }}"
                                                    alt="Foto default usuário" class="photo-user" width="80px">
                                            @else
                                                <img src="{{ asset('uploads/photos/' . $user->photo) }}" alt="Foto usuário"
                                                    class="img-fluid photo-user" width="80px">
                                            @endif
                                        </a>
                                    </td>

                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>

                                    <td>
                                        <i class="fa fa-trash-o btn" aria-hidden="true"><a href=""></a></i>
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