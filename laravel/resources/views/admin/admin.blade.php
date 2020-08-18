@extends('layouts.layout-menulogado')


@section('content')


    <div class="secao-painel-admin text-center">

        {{-- MENU ESQUERDO --}}
        <nav class="menu-admin">

            {{-- TÍTULO --}}

            <h4>Painel Admin</h4>

            {{-- LINKS --}}
            <ul class="list-unstyled componentes-menu">

                <li>
                    <a href="#">Usuários</a>
                </li>

                <li>
                    <a href="#">Indicações</a>
                </li>

                <li>
                    <a href="#">Serviços</a>
                </li>
            </ul>

        </nav>

        {{-- CONTEÚDO --}}

        <div class="container mt-4 conteudo-admin">
            <div class="card col-12 mb-4">
                <div class="card-body">


                    {{-- TÍTULO E PESQUISA --}}
                    <div class="row">

                        <div class="col-md-12">

                            {{-- TÍTULO TABELA --}}
                            <h2>Usuários</h2>

                            {{-- PESQUISAR --}}
                            <div class="input-group form-sm pl-0">
                                <input class="form-control my-0 py-1 pl-3 purple-border" type="text" placeholder="Pesquisar"
                                    aria-label="Search">

                                <i class="fa fa-search white-text btn" aria-hidden="true"></i></a>

                            </div>

                        </div>

                    </div>

                    {{-- TABELA --}}
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Nome</th>
                                <th>Indicações</th>
                                <th>Serviços</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>Lilla Doe</td>
                                <td>5</td>
                                <td>20</td>
                                <td>
                                    <div>
                                        <button class="btn"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></button>
                                        <button class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        <button class="btn"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>






@endsection
