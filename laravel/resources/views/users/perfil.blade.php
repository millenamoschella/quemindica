@extends('layouts.layout-menulogado')

{{-- MODAL --}}
@extends('layouts.modalPhoto')


@section('content')



    {{-- SEÇÃO CAPA PERFIL, NOME E FOTO DO USUÁRIO --}}
    <div class="secao-capa-perfil"></div>

    {{-- CAPA PERFIL --}}
    <section class="capa-perfil">
        <div class="capa">
            <div class="icon-change">

                <a href="#" data-toggle="modal" data-target="#modalFotoCapa">
                    <img src="icones/pencil.svg" alt="Mudar foto de capa">
                </a>

            </div>
            <!-- Foto no background do CSS -->
        </div>
    </section>


    {{-- SEÇÃO FOTO E NOME DO USUÁRIO --}}
    <section class="secao-foto-user-perfil">
        <div class="info-usuario-perfil">

            {{-- FOTO USUÁRIO --}}
            <div class="foto-perfil-user">

                <a href="#" data-toggle="modal" data-target="#modalFoto">
                    @if (Auth::user()->photo == null)
                        <img src="{{ asset('imagens/institucional/usuario.png') }}" width=170 height=170 alt="foto default">
                    @else
                        <img src="{{ asset('uploads/photos/' . Auth::user()->photo) }}" width=170 height=170
                            alt="Foto perfil usuário">
                    @endif

                </a>

            </div>

            {{-- PONTUAÇÃO USUÁRIO --}}
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
            </div>

            {{-- NOME USUÁRIO --}}
            <h1 class="nome-usuario-perfil">{{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h1>


            {{-- BOTÕES ADICIONAR E MENSAGEM --}}
            <div class="adicionar-mensagem-perfil">
                <button class="adicionar">Adicionar</button>
                <button class="mensagem">Mensagem</button>
            </div>

        </div>
    </section>

    <section>
        {{-- SEÇÃO MENU, POSTS E AMIGOS --}}
        <div class="container-fluid perfil-quemindica">

            <div class="col-12">

                <div class="row">

                    {{-- MENU ESQUERDO --}}
                    <div class="col-lg-2 col-md-3 col-sm-12 order-md-1 secao-usuario-perfil">
                        <div class="card shadow card-sticky scroll">

                            {{-- INFOS USUÁRIO --}}
                            <div class="card-bio-user">
                                <div class="user-perfil m-4">

                                    <div class="flex-grow-1 infos-usuario">

                                        <div class="pontuacao-feed-perfil">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <div>
                                                <span>25 pontos</span>
                                            </div>
                                        </div>

                                        <span>Bio:</span>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A culpa exercitationem
                                            est, quaerat mollitia rem optio dolore explicabo! </p>

                                    </div>
                                </div>
                            </div>

                            {{-- LINKS --}}
                            <div class="links-feed ml-4">
                                <!-- <h5 class="mt-4">Navegação</h5> -->

                                <ul class="d-flex flex-column mt-5">
                                    <i class="fa fa-user-circle" aria-hidden="true"><a href="{{ route('perfil') }}"
                                            title="">Perfil</a></i>

                                    <i class="fa fa-users" aria-hidden="true"><a href="{{ route('amigos') }}"
                                            title="">Amigos</a></i>

                                    <i class="fa fa-list-alt" aria-hidden="true"><a href="{{ route('servicos') }}"
                                            title="">Serviços</a></i>

                                    <i class="fa fa-question-circle" aria-hidden="true"><a href="{{ route('suporte') }}"
                                            title="">Suporte</a></i>

                                    <i class="fa fa-cog" aria-hidden="true"><a href="{{ route('configuracao') }}"
                                            title="">Editar
                                            Perfil</a></i>
                                </ul>

                            </div>

                            {{-- TAGS --}}
                            <div class="secao-tags-perfil text-center">
                                <div class="tags-perfil">
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
                    </div>

                    {{-- POSTS DO USUÁRIO --}}
                    <div class="col-lg-7 col-md-7 col-sm-12 order-md-2 posts-perfil">

                        {{-- SEÇÃO ESCREVER POST --}}
                        <div class="posts-feed">

                            {{-- ESCOLHER TIPO DE POST --}}

                            <div class="card noScroll shadow card-sticky" id="choosePost">
                                <div class="card-body">

                                    <p>Quero indicar:</p>
                                    <div class="d-flex">
                                        <div id="cardCulture" class="postCard">
                                            <img src="{{ asset('icones/video-player.svg') }}" alt="Imagem de vídeo player">
                                            <div class="text-center mb-1">
                                                <small><b>Arte/lazer</b></small>
                                            </div>
                                        </div>
                                        <div id="cardService" class="postCard">
                                            <img src="{{ asset('icones/quality.svg') }}" alt="Imagem de serviços">
                                            <div class="text-center mb-1">
                                                <small><b>Serviço</b></small>
                                            </div>
                                        </div>
                                        <div id="cardProduct" class="postCard">
                                            <img src="{{ asset('icones/products.svg') }}" alt="Imagem de produtos">
                                            <div class="text-center mb-1">
                                                <small><b>Produto</b></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ESCREVER POST CULTURA --}}
                            <div class="card shadow card-sticky displayNone" id="culturePost">
                                <div class="card-body">
                                    <form action="{{ route('post_insert') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- SEGMENTO --}}

                                        <div class="form-group col-md-4 px-0">
                                            <label for="cultureSegment">Segmento</label>
                                            <select id="cultureSegment" class="form-control">
                                                <option selected>Escolha uma opção</option>
                                                <option>Filmes e Séries</option>
                                                <option>Música</option>
                                                <option>Livro</option>
                                            </select>
                                        </div>

                                        {{-- PLATAFORMA --}}

                                        <div class="form-group col-md-4 px-0">
                                            <label for="plataforma">Plataforma</label>
                                            <select id="plataforma" class="form-control">
                                                <option selected>Escolha uma opção</option>
                                                <option>Netflix</option>
                                                <option>HBO GO</option>
                                                <option>Prime Video</option>
                                                <option>Kindle (e-book)</option>
                                                <option>Livro de papel</option>
                                                <option>Spotify</option>
                                                <option>Deezer</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>

                                        {{-- TITULO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="1" placeholder="Título" name="titulo"
                                                id="titulo"></textarea>
                                        </div>


                                        {{-- NOTA --}}
                                        <label for="">Avaliação:</label>
                                        <div class="estrelas">
                                            <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                                            <label for="cm_star-1"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="cm_star-1" name="fb" value="1" />
                                            <label for="cm_star-2"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="cm_star-2" name="fb" value="2" />
                                            <label for="cm_star-3"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="cm_star-3" name="fb" value="3" />
                                            <label for="cm_star-4"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="cm_star-4" name="fb" value="4" />
                                            <label for="cm_star-5"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="cm_star-5" name="fb" value="5" />
                                        </div>

                                        {{-- COMENTÁRIO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Comentário" name="conteudo"
                                                id="conteudo"></textarea>
                                        </div>

                                        <div class="form-group icones-postagem">
                                            {{-- ADICIONAR IMAGEM
                                            --}}

                                            {{-- <input type="file">
                                            --}}
                                            <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                            {{-- POSTAR --}}
                                            <button class="btn float-right"><i class="fa fa-paper-plane-o"
                                                    aria-hidden="true"></i>
                                                <span>Postar</span></button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- ESCREVER POST SERVIÇO --}}
                            <div class="card shadow card-sticky displayNone" id="servicePost">
                                <div class="card-body">
                                    <form action="{{ route('post_insert') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        {{-- TITULO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="1" placeholder="Título" name="titulo"
                                                id="titulo"></textarea>
                                        </div>
                                        {{-- CONTEÚDO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"
                                                placeholder="Qual a sua indicação de hoje?" name="conteudo"
                                                id="conteudo"></textarea>
                                        </div>

                                        <div class="form-group icones-postagem">
                                            {{-- ADICIONAR IMAGEM
                                            --}}

                                            {{-- <input type="file">
                                            --}}
                                            <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                            {{-- POSTAR --}}
                                            <button class="btn float-right"><i class="fa fa-paper-plane-o"
                                                    aria-hidden="true"></i>
                                                <span>Postar</span></button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- ESCREVER POST PRODUTO --}}
                            <div class="card shadow card-sticky displayNone" id="productPost">
                                <div class="card-body">
                                    <form action="{{ route('post_insert') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        {{-- TITULO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="1" placeholder="Título" name="titulo"
                                                id="titulo"></textarea>
                                        </div>
                                        {{-- CONTEÚDO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"
                                                placeholder="Qual a sua indicação de hoje?" name="conteudo"
                                                id="conteudo"></textarea>
                                        </div>

                                        <div class="form-group icones-postagem">
                                            {{-- ADICIONAR IMAGEM
                                            --}}

                                            {{-- <input type="file">
                                            --}}
                                            <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                            {{-- POSTAR --}}
                                            <button class="btn float-right"><i class="fa fa-paper-plane-o"
                                                    aria-hidden="true"></i>
                                                <span>Postar</span></button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- POSTS --}}

                            <div class="card shadow mb-3 area-post-feed">

                                {{-- FOTO USUÁRIO E HORÁRIO POST
                                --}}
                                @foreach ($postsUser as $post)
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">

                                                {{-- FOTO USUÁRIO AUTOR DO POST
                                                --}}
                                                <div class="mr-2">
                                                    <a href="{{ route('perfil') }}">
                                                        <img class="rounded-circle"
                                                            src="{{ asset('uploads/photos/' . $post->user->photo) }}"
                                                            alt="Foto autor post" class="img-fluid" width="40" height="40">
                                                    </a>
                                                </div>

                                                <div class="ml-2">

                                                    {{-- AUTOR
                                                    --}}
                                                    <h5 class="nome-post-usuario">{{ '@' . $post->user->username }}</h5>
                                                </div>

                                            </div>
                                            <div>

                                                {{-- BOTÕES POSTAGEM
                                                --}}
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="gedf-drop1"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        {{-- ÍCONE
                                                        --}}
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>

                                                    {{-- OPÇÕES
                                                    --}}
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="gedf-drop1">
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
                                            {{-- <span
                                                class="tempo-feed">{{ $post->created_at->format('d/m/Y H:i:s') }}</span>
                                            --}}
                                            <span class="tempo-feed">{{ $post->created_at->diffforhumans() }}</span>
                                        </div>

                                        {{-- TÍTULO POST --}}
                                        <a class="card-link" href="#">
                                            <h5 class="card-title">{{ $post->titulo }}</h5>
                                        </a>

                                        {{-- MENSAGEM POST --}}
                                        <p class="card-text px-5">
                                            {{ $post->conteudo }}
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

                                    {{-- SEÇÃO COMENTÁRIOS DO POST
                                    --}}

                                    <div class="user-post">
                                        <div class="area-comentario">

                                            {{-- @foreach ($commentsUser as $comment) --}}
                                                @foreach ($post->comments as $comment)
                                                    <ul class="comentarios">

                                                        {{-- SEÇÃO COMENTÁRIO
                                                        --}}
                                                        <li>
                                                            {{-- FOTO AUTOR COMENTÁRIO
                                                            --}}
                                                            <div class="avatar-autor-comentario">
                                                                <a href="">
                                                                    <img src="{{ asset('uploads/photos/' . $comment->user->photo) }}"
                                                                        alt="Foto autor comentário" width="40" height="40">
                                                                </a>
                                                            </div>

                                                            {{-- COMENTÁRIO
                                                            --}}
                                                            <div class="secao-comentario">
                                                                <div class="autor-hora">

                                                                    {{-- AUTOR COMENTÁRIO
                                                                    --}}
                                                                    <h5>
                                                                        <a href="#"
                                                                            title="">{{ '@' . $comment->user->username }}</a>
                                                                    </h5>

                                                                    {{-- TEMPO
                                                                    --}}
                                                                    <span
                                                                        class="tempo-comentario-feed">{{ $comment->created_at->diffforhumans() }}</span>

                                                                    {{-- RESPONDER
                                                                    --}}
                                                                    <a class="responder-comentario" href="#"><i
                                                                            class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>
                                                                    {{ $comment->conteudo }}
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                @endforeach

                                        </div>

                                        {{-- VER TODOS OS COMENTÁRIOS
                                        --}}
                                        <div>
                                            <a href="#" class="vertodos-comentarios">Ver Todos</a>
                                        </div>

                                        {{-- ÁREA COMENTAR --}}

                                        <div class="post-comment">
                                            <div class="form-comentar">
                                                <form action="{{ route('comment_insert') }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                                                    <div class="form-group area-text-comentar">
                                                        <textarea class="form-control" id="comentario" rows="3"
                                                            placeholder="Faça um comentário..." name="conteudo"></textarea>


                                                        {{-- BOTÃO COMENTAR
                                                        --}}
                                                        <button type="submit" class="btn">Comentar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- MENU DIREITO --}}
                    <div class="col-lg-3 col-md-2 col-sm-12 order-md-3 amigos-perfil text-center">
                        <div class="card card-sticky scroll">

                            {{-- SEÇÃO AMIGOS --}}
                            <div class="amigos-cards">

                                {{-- IMAGEM SERVIÇO --}}
                                <div class="cards-imagens-perfil">
                                    {{-- TÍTULO --}}
                                    <h5>Amigos</h5>

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

                                {{-- VER MAIS AMIGOS --}}
                                <div class="card-footer card-footer-perfil">
                                    <a href="{{ route('amigos') }}" target="_blank">Ver Mais</a>
                                </div>
                            </div>

                            {{-- SEÇÃO SERVIÇOS --}}
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

            </div>

        </div>

    </section>


@endsection
