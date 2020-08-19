@extends('layouts.layout-menulogado')


@section('content')



    {{-- SEÇÃO CAPA PERFIL, NOME E FOTO DO USUÁRIO --}}
    <div class="secao-capa-perfil"></div>

    {{-- CAPA PERFIL --}}
    <section class="capa-perfil">
        <div class="capa">
            <img src="{{ asset('../imagens/institucional/capa-perfil.jpg') }}" alt="Foto capa perfil" class="img-fluid">
        </div>
    </section>

    {{-- SEÇÃO FOTO E NOME DO USUÁRIO --}}
    <section class="secao-foto-user-perfil">
        <div class="info-usuario-perfil">

            {{-- FOTO USUÁRIO --}}
            <div class="foto-perfil-user">
                <img src="{{ asset('imagens/minhaConta/fotoUsuario.jpg') }}" alt="Capa perfil usuário">
            </div>

            {{-- NOME USUÁRIO --}}
            <h1 class="nome-usuario-perfil">Shyrles Monteiro</h1>

            {{-- BOTÕES ADICIONAR E MENSAGEM --}}
            <div class="adicionar-mensagem-perfil">
                <button class="adicionar">Adicionar</button>
                <button class="mensagem">Mensagem</button>
            </div>

        </div>
    </section>

    {{-- SEÇÃO MENU, POSTS E AMIGOS --}}
    <div class="container-fluid perfil-quemindica">
        <div class="col-12">
            <div class="row">

                {{-- MENU ESQUERDO --}}
                <div class="col-lg-2 col-md-3 col-sm-12 order-md-1 secao-usuario-perfil">

                    {{-- INFOS USUÁRIO --}}
                    <div class="card shadow mb-3">
                        <div class="card-body ">
                            <div class="row user-perfil text-center ">

                                <div class="flex-grow-1 infos-usuario">

                                    {{-- PONTUAÇÃO --}}

                                    <div class="pontuacao-feed-perfil">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div>
                                            <span>25 pontos</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TAGS --}}
                    <div class="card shadow secao-tags-perfil text-center">
                        <div class="card-body tags-perfil">
                            <h5>Tags seguidas</h5>

                            <div class="tags-seguidas-perfil">

                                <a href="#"><span class="tag-rounded-perfil">Livros</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Decoração</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Pintores Zona Oeste</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Brechós</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Manicures</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Ilustradores</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Esteticistas</span></a>
                                <a href="#"><span class="tag-rounded-perfil">Games</span></a>

                            </div>
                        </div>

                    </div>

                </div>


                {{-- POSTS DO USUÁRIO --}}
                <div class="col-lg-7 col-md-7 col-sm-12 mb-3 order-md-2 posts-perfil">

                    {{-- EXEMPLO POST --}}

                    <div class="card shadow mb-3 area-post-perfil">

                        {{-- FOTO USUÁRIO E HORÁRIO POST
                        --}}
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">

                                    {{-- FOTO USUÁRIO AUTOR DO POST
                                    --}}
                                    <div class="mr-2">
                                        <a href="{{ route('perfil') }}">
                                            <img class="rounded-circle" width="45"
                                                src="{{ asset('imagens/minhaConta/fotoUsuario.jpg') }}"
                                                alt="Foto autor post" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="ml-2">

                                        {{-- AUTOR --}}
                                        <h5 class="nome-post-usuario-perfil">@shyrlesmonteiro</h5>
                                    </div>
                                </div>
                                <div>

                                    {{-- BOTÕES POSTAGEM
                                    --}}
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="gedf-drop1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            {{-- ÍCONE 3 PONTOS
                                            --}}
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
                        <div class="card-body postagem-perfil">

                            {{-- TEMPO DO POST --}}
                            <div class="mb-2 tempo-comentario">
                                <i class="fa fa-clock-o"></i>
                                <span class="tempo">35 min atrás</span>
                            </div>

                            {{-- TÍTULO POST --}}
                            <a class="card-link" href="#">
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                            </a>

                            {{-- MENSAGEM POST --}}
                            <p class="card-text px-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem
                                eos
                                ipsa
                                praesentium esse magnam nemo dolor
                                sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                            </p>
                        </div>

                        {{-- BOTÕES CURTIR, COMENTAR E COMPARTILHAR
                        --}}
                        <div class="card-footer card-footer-perfil">

                            <a href="#" class="notification-perfil">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span class="badge">3</span>
                            </a>

                            <a href="#" class="notification-perfil">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <span class="badge">3</span>
                            </a>

                            <a href="#" class="notification-perfil">
                                <i class="fa fa-share" aria-hidden="true"></i>
                                <span class="badge">3</span>
                            </a>

                        </div>

                        {{-- SEÇÃO COMENTÁRIOS DO POST
                        --}}

                        <div class="user-post-perfil">
                            <div class="area-comentario-perfil">
                                <ul class="comentarios-perfil">

                                    {{-- SEÇÃO COMENTÁRIO
                                    --}}
                                    <li>
                                        {{-- FOTO AUTOR COMENTÁRIO
                                        --}}
                                        <div class="avatar-autor-comentario-perfil">
                                            <a href=""><img src="{{ asset('../imagens/minhaConta/sara.jfif') }}"
                                                    alt="Foto autor comentário"></a>
                                        </div>

                                        {{-- COMENTÁRIO
                                        --}}
                                        <div class="secao-comentario-perfil">
                                            <div class="autor-hora-perfil">

                                                {{-- AUTOR COMENTÁRIO
                                                --}}
                                                <h5>
                                                    <a href="#" title="">Sara Margarido</a>
                                                </h5>

                                                {{-- TEMPO
                                                --}}
                                                <span>15 horas atrás</span>

                                                {{-- RESPONDER
                                                --}}
                                                <a class="responder-comentario-perfil" href="#"><i
                                                        class="fa fa-reply"></i></a>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                maximus sed ex quis
                                                varius. Fusce tincidunt neque ex, auctor placerat lacus placerat
                                                et. Integer
                                                sodales nibh ac posuere ullamcorper. Nullam maximus libero ac
                                                diam suscipit
                                                ornare.
                                            </p>
                                        </div>
                                    </li>

                                    {{-- VER TODOS OS COMENTÁRIOS
                                    --}}
                                    <li>
                                        <a href="#" class="vertodos-comentarios-perfil">Ver Todos</a>
                                    </li>

                                    {{-- COMENTÁRIO
                                    --}}
                                    <li class="post-comment">

                                        {{-- ÁREA COMENTAR
                                        --}}
                                        <div class="form-comentar-perfil">
                                            <form action="#" method="post">
                                                @csrf

                                                <div class="form-group area-text-comentar-perfil">
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


                {{-- SEÇÃO AMIGOS --}}
                <div class="col-lg-3 col-md-2 col-sm-12 order-md-3 amigos-perfil text-center">
                    <div class="card">
                        <div class="amigos-cards">

                            {{-- TÍTULO --}}
                            <h5>Amigos</h5>

                            {{-- IMAGEM SERVIÇO --}}
                            <div class="cards-imagens-perfil">

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/sara.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/leonardo.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/marcia.png') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/Millena.png') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/vivian.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/sandra.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/joao.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/gabriel.jfif') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('imagens/minhaConta/michelle.png') }}"
                                        class="img-fluid card-amigos-perfil">
                                </a>

                            </div>
                        </div>



                        {{-- VER MAIS AMIGOS --}}
                        <div class="card-footer card-footer-perfil">
                            <a href="#">Ver Mais</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>






@endsection
