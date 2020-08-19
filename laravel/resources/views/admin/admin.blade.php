@extends('layouts.layout-menulogado')


@section('content')


    {{-- PAINEL ADMIN --}}
    <div class="secao-admin-painel">
        <div class="container-fluid">

            {{-- MENU --}}
            <section class="cards-admin">
                <div class="row">

                    {{-- USUÁRIOS --}}

                    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-b-admin">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>5</h3>
                                            <span><a href="#">Usuários</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-users float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- INDICAÇÕES --}}
                    <div class="col-lg-4 col-md-4 col-sm-12 card-admin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>65</h3>
                                            <span><a href="#">Indicações</a></span>
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
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>10</h3>
                                            <span><a href="#">Serviços</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-comments float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- INDICAÇÕES --}}


                    {{-- SERVIÇOS --}}


                </div>
            </section>


            {{-- CONTEÚDO --}}
            <section class="conteudo-admin">

                <div class="card mb-4">
                    <div class="card-body">

                        {{-- TABELA --}}

                        <div class="table-responsive-sm">

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
                                        <th scope="col">Indicações</th>
                                        <th scope="col">Serviços</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Shyrles Monteiro</td>
                                        <td>4</td>
                                        <td>20</td>

                                        <td>
                                            <i class="fa fa-pencil btn" aria-hidden="true"><a href=""></a></i>
                                            <i class="fa fa-trash-o btn" aria-hidden="true"><a href=""></a></i>
                                            <i class="fa fa-eye btn" aria-hidden="true"><a href=""></a></i>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>

            </section>

        </div>
    </div>


@endsection
