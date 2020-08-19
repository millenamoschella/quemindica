@extends('admin.layout-admin')


@section('content')


    {{-- CONTEÚDO --}}
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



@endsection
