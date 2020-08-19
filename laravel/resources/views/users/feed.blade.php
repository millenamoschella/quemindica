@extends('layouts.layout-menulogado')


@section('content')



    {{-- FEED --}}
    <div class="container-fluid feed-quemindica">
        <div class="row">

            {{-- MENU ESQUERDO --}}
            <div class="col-lg-2 col-md-3 col-sm-12 order-md-1 secao-usuario">

                {{-- INFOS USUÁRIO --}}
                <div class="card shadow mb-3">
                    <div class="card-body ">
                        <div class="row user text-center ">

                            {{-- EDITAR PERFIL --}}
                            <i class="fa fa-gear"><a href="{{ route('configuracao') }}"></a></i>

                            <div class="flex-grow-1 infos-usuario">

                                {{-- IMAGEM USUÁRIO --}}
                                <a href="{{ route('perfil') }}">
                                    <img src="{{ asset('imagens/minhaConta/fotoUsuario.jpg') }}"
                                        class="rounded-circle avatar img-fluid">
                                </a>

                                {{-- PONTUAÇÃO --}}

                                <div class="pontuacao-feed">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div>
                                        <span>25 pontos</span>
                                    </div>
                                </div>


                                {{-- NOME --}}
                                <h2 class="nome-usuario">Shyrles Monteiro</h2>


                                {{-- BIO USUÁRIO --}}
                                <p class="descricao-usuario">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p>

                            </div>

                            {{-- INDICAÇÕES E PONTOS --}}


                        </div>
                    </div>

                </div>

                {{-- LINKS --}}
                <div class="card shadow links-feed">
                    <h5 class="text-center">Navegação</h5>
                    <ul>

                        <i class="fa fa-users" aria-hidden="true"><a href="{{ route('amigos') }}" title="">Amigos</a></i>

                        <i class="fa fa-list-alt" aria-hidden="true"><a href="{{ route('servicos') }}"
                                title="">Serviços</a></i>

                        <i class="fa fa-cog" aria-hidden="true"><a href="{{ route('configuracao') }}"
                                title="">Configurações</a></i>

                    </ul>
                </div>


                {{-- TAGS --}}
                <div class="card shadow secao-tags-feed text-center">
                    <div class="card-body tags-feed">
                        <h5>Tags seguidas</h5>

                        <div class="tags-seguidas">

                            <a href="#"><span class="tag-rounded">Livros</span></a>
                            <a href="#"><span class="tag-rounded">Decoração</span></a>
                            <a href="#"><span class="tag-rounded">Pintores Zona Oeste</span></a>
                            <a href="#"><span class="tag-rounded">Brechós</span></a>
                            <a href="#"><span class="tag-rounded">Manicures</span></a>
                            <a href="#"><span class="tag-rounded">Ilustradores</span></a>
                            <a href="#"><span class="tag-rounded">Esteticistas</span></a>
                            <a href="#"><span class="tag-rounded">Games</span></a>

                        </div>

                    </div>
                    <div class="card-footer card-footer-feed">
                        <a href="#">Ver Mais</a>
                    </div>
                </div>


            </div>


            {{-- SEÇÃO ESCREVER POST --}}
            <div class="col-lg-8 col-md-7 col-sm-12 mb-3 order-md-2 posts-feed">

                {{-- ESCREVER POST --}}
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- TEXTAREA --}}
                            <div class="form-group">
                                <textarea class="form-control" rows="3"
                                    placeholder="Qual a sua indicação de hoje?"></textarea>
                            </div>

                            <div class="form-group icones-postagem">
                                {{-- ADICIONAR IMAGEM --}}

                                {{-- <input type="file"> --}}
                                <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                {{-- POSTAR --}}
                                <button class="btn float-right"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    <span>Postar</span></button>

                            </div>
                        </form>
                    </div>
                </div>

                {{-- EXEMPLO POST --}}

                <div class="card shadow mb-3 area-post-feed">

                    {{-- FOTO USUÁRIO E HORÁRIO POST --}}
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">

                                {{-- FOTO USUÁRIO AUTOR DO POST
                                --}}
                                <div class="mr-2">
                                    <a href="{{ route('perfil') }}">
                                        <img class="rounded-circle" width="45"
                                            src="{{ asset('imagens/minhaConta/fotoUsuario.jpg') }}" alt="Foto autor post"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="ml-2">

                                    {{-- AUTOR --}}
                                    <h5 class="nome-post-usuario">@shyrlesmonteiro</h5>
                                </div>
                            </div>
                            <div>

                                {{-- BOTÕES POSTAGEM --}}
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        {{-- ÍCONE --}}
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>

                                    {{-- OPÇÕES --}}
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <a class="dropdown-item" href="#">Esconder</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- POSTAGEM --}}
                    <div class="card-body postagem-feed">

                        {{-- TEMPO DO POST --}}
                        <div class="mb-2 tempo-comentario-feed">
                            <i class="fa fa-clock-o"></i>
                            <span class="tempo-feed">35 min atrás</span>
                        </div>

                        {{-- TÍTULO POST --}}
                        <a class="card-link" href="#">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                        </a>

                        {{-- MENSAGEM POST --}}
                        <p class="card-text px-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa
                            praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>

                    {{-- BOTÕES CURTIR, COMENTAR E COMPARTILHAR
                    --}}
                    <div class="card-footer card-footer-feed">

                        <a href="#" class="notification">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <span class="badge">3</span>
                        </a>

                        <a href="#" class="notification">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                            <span class="badge">3</span>
                        </a>

                        <a href="#" class="notification">
                            <i class="fa fa-share" aria-hidden="true"></i>
                            <span class="badge">3</span>
                        </a>

                    </div>

                    {{-- SEÇÃO COMENTÁRIOS DO POST --}}

                    <div class="user-post">
                        <div class="area-comentario">
                            <ul class="comentarios">

                                {{-- SEÇÃO COMENTÁRIO
                                --}}
                                <li>
                                    {{-- FOTO AUTOR COMENTÁRIO
                                    --}}
                                    <div class="avatar-autor-comentario">
                                        <a href=""><img src="{{ asset('../imagens/minhaConta/sara.jfif') }}"
                                                alt="Foto autor comentário"></a>
                                    </div>

                                    {{-- COMENTÁRIO
                                    --}}
                                    <div class="secao-comentario">
                                        <div class="autor-hora">

                                            {{-- AUTOR COMENTÁRIO
                                            --}}
                                            <h5>
                                                <a href="#" title="">Sara Margarido</a>
                                            </h5>

                                            {{-- TEMPO
                                            --}}
                                            <span class="tempo-comentario-feed">15 horas atrás</span>

                                            {{-- RESPONDER
                                            --}}
                                            <a class="responder-comentario" href="#"><i class="fa fa-reply"></i></a>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                            maximus sed ex quis
                                            varius. Fusce tincidunt neque ex, auctor placerat lacus placerat
                                            et. Integer
                                            sodales nibh ac posuere ullamcorper. Nullam maximus libero ac
                                            diam suscipit
                                            ornare
                                        </p>
                                    </div>
                                </li>

                                {{-- VER TODOS OS COMENTÁRIOS
                                --}}
                                <li>
                                    <a href="#" class="vertodos-comentarios">Ver Todos</a>
                                </li>

                                {{-- COMENTÁRIO
                                --}}
                                <li class="post-comment">

                                    {{-- ÁREA COMENTAR
                                    --}}
                                    <div class="form-comentar">
                                        <form action="#" method="post">
                                            @csrf

                                            <div class="form-group area-text-comentar">
                                                <textarea class="form-control" id="comentario" rows="3"
                                                    placeholder="Faça um comentário..."></textarea>


                                                {{-- BOTÃO COMENTAR
                                                --}}
                                                <button type="submit" class="btn">Comentar</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>









                </div>

            </div>


            {{-- SEÇÃO SERVIÇOS MENU DIREITO --}}
            <div class="col-lg-2 col-md-2 mb-3 col-sm-12 order-md-3 servicos-feed text-center">
                <div class="card shadow">
                    <div class="card-body">

                        {{-- TÍTULO --}}
                        <h5>Serviços</h5>

                        {{-- IMAGEM SERVIÇO --}}
                        <div class="cards-imagens-feed">
                            <a href="#">
                                <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                    class="img-fluid card-servico-feed">
                            </a>

                            <a href="#">
                                <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                    class="img-fluid card-servico-feed">
                            </a>

                            <a href="#">
                                <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                    class="img-fluid card-servico-feed">
                            </a>

                            <a href="#">
                                <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                    class="img-fluid card-servico-feed">
                            </a>
                        </div>

                    </div>

                    {{-- VER MAIS SERVIÇOS --}}
                    <div class="card-footer">
                        <a href="#">Ver Mais</a>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
