@extends('layouts.layout-menulogado')

{{-- MODAL --}}
@extends('layouts.modalPhoto')


@section('content')


    {{-- SEÇÃO CAPA PERFIL, NOME E FOTO DO USUÁRIO --}}
    {{-- <div class="secao-capa-perfil"></div> --}}

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
    <section class="profile-section">
        <div class="header-bio">

            {{-- FOTO USUÁRIO --}}
            <div class="user-photo">

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
            <h1 class="user-name">{{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h1>


            {{-- BOTÕES ADICIONAR E MENSAGEM --}}
            <div class="add-friend-send-message-perfil">
                <button class="add-friend">Adicionar</button>
                <button class="send-message">Mensagem</button>
            </div>

        </div>
    </section>


    {{-- SEÇÃO MENU, POSTS E AMIGOS --}}
    <section>
        <div class="container-fluid content-perfil">

            <div class="col-12">

                <div class="row">

                    {{-- MENU ESQUERDO --}}
                    <div class="col-lg-2 col-md-3 col-sm-12 order-md-1 section-left-menu">
                        <div class="card shadow card-sticky scroll">

                            {{-- INFOS USUÁRIO --}}
                            <div class="card-bio-user">
                                <div class="user-perfil m-4">

                                    <div class="flex-grow-1 bio-user">

                                        {{-- PONTUAÇÃO DO USUÁRIO
                                        --}}
                                        <div class="rating-perfil text-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <div>
                                                <span>25 pontos</span>
                                            </div>
                                        </div>

                                        {{-- BIO DO USUÁRIO --}}
                                        <p class="text-center">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A culpa exercitationem
                                            est, quaerat mollitia rem optio dolore explicabo!
                                        </p>

                                    </div>

                                </div>
                            </div>

                            {{-- LINKS --}}
                            <div class="menu-links ">
                                <ul class="d-flex flex-column">
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
                            <div class="tags-section text-center">
                                <div class="profile-tags">
                                    <h5>Tags seguidas</h5>

                                    <div class="followed-tags">

                                        <a href="#"><span class="rounded-tag-style">Livros</span></a>
                                        <a href="#"><span class="rounded-tag-style">Decoração</span></a>
                                        <a href="#"><span class="rounded-tag-style">Pintores Zona Oeste</span></a>
                                        <a href="#"><span class="rounded-tag-style">Brechós</span></a>
                                        <a href="#"><span class="rounded-tag-style">Manicures</span></a>
                                        <a href="#"><span class="rounded-tag-style">Ilustradores</span></a>
                                        <a href="#"><span class="rounded-tag-style">Esteticistas</span></a>
                                        <a href="#"><span class="rounded-tag-style">Games</span></a>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- CONTEÚDO --}}
                    <div class="col-lg-7 col-md-7 col-sm-12 order-md-2 section-posts">

                        {{-- SEÇÃO ESCREVER POST --}}
                        <div class="section-posts">

                            {{-- ESCOLHER TIPO DE POST --}}
                            <div class="card noScroll shadow card-sticky" id="choosePost">
                                <div class="card-body">

                                    <p>Quero indicar:</p>

                                    {{-- TIPOS DE INDICAÇÕES --}}
                                    <div class="d-flex">

                                        {{-- ARTE E LAZER --}}
                                        <div id="cardCulture" class="postCard">
                                            <img src="{{ asset('icones/video-player.svg') }}" alt="Imagem de vídeo player">
                                            <div class="text-center mb-1">
                                                <small><b>Arte/lazer</b></small>
                                            </div>
                                        </div>

                                        {{-- SERVIÇOS --}}
                                        <div id="cardService" class="postCard">
                                            <img src="{{ asset('icones/quality.svg') }}" alt="Imagem de serviços">
                                            <div class="text-center mb-1">
                                                <small><b>Serviço</b></small>
                                            </div>
                                        </div>

                                        {{-- PRODUTO --}}
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

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconCulture" class="backIcon">
                                        <img src="/icones/arrow.svg" alt="Voltar">
                                    </div>

                                    {{-- ESCREVER INDICAÇÃO DE CULTURA
                                    --}}
                                    <form action="{{ route('culture_insert') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        {{-- SEGMENTO --}}
                                        <div class="form-group col-md-4 px-0">
                                            <label for="cultureSegment">Segmento</label>
                                            <select id="cultureSegment" class="form-control" name="culture__segments_id">
                                                <option selected>Escolha uma opção</option>
                                                <option value="1">Música</option>
                                                <option value="2">Filme</option>
                                                <option value="3">Série</option>
                                                <option value="4">Livro</option>

                                            </select>
                                        </div>

                                        {{-- PLATAFORMA --}}
                                        <div class="form-group col-md-4 px-0">
                                            <label for="plataforma">Plataforma</label>
                                            <select id="plataforma" class="form-control" name="plataforma">
                                                <option selected>Escolha uma opção</option>
                                                <option value="Netflix">Netflix</option>
                                                <option value="HBO GO">HBO GO</option>
                                                <option value="Prime Video">Prime Video</option>
                                                <option value="E-book">Kindle (e-book)</option>
                                                <option value="Livro">Livro de papel</option>
                                                <option valeu="Spotify">Spotify</option>
                                                <option value="Deezer">Deezer</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>

                                        {{-- TITULO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="1" placeholder="Título" name="titulo"
                                                id="titulo"></textarea>
                                        </div>

                                        {{-- COMENTÁRIO --}}
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Comentário" name="conteudo"
                                                id="conteudo"></textarea>
                                        </div>

                                        {{-- NOTA --}}
                                        <label for="">Avaliação:</label>
                                        <div class="stars-rating">
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

                                        {{-- BOTÃO POSTAR --}}
                                        <button class="btn float-right">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                            <span>Postar</span>
                                        </button>

                                    </form>

                                </div>
                            </div>

                            {{-- ESCREVER POST SERVIÇO --}}
                            <div class="card shadow card-sticky displayNone" id="servicePost">
                                <div class="card-body">

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconService" class="backIcon">
                                        <img src="/icones/arrow.svg" alt="Voltar">
                                    </div>

                                    {{-- ESCREVER INDICAÇÃO DE SERVIÇO
                                    --}}
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

                                        {{-- BOTÕES POSTAR --}}
                                        <div class="form-group icones-postagem">

                                            {{-- ÍCONES PARA MARCAR UMA PESSOA, ADD IMAGEM OU
                                            LOCAL A POSTAGEM --}}
                                            <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                            {{-- BOTÃO POSTAR --}}
                                            <button class="btn float-right"><i class="fa fa-paper-plane-o"
                                                    aria-hidden="true"></i>
                                                <span>Postar</span>
                                            </button>

                                        </div>

                                    </form>

                                </div>
                            </div>

                            {{-- ESCREVER POST PRODUTO --}}
                            <div class="card shadow card-sticky displayNone" id="productPost">
                                <div class="card-body">

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconProduct" class="backIcon">
                                        <img src="/icones/arrow.svg" alt="Voltar">
                                    </div>

                                    {{-- ESCREVER INDICAÇÃO DE PRODUTO
                                    --}}
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

                                        {{-- BOTÕES POSTAR --}}
                                        <div class="form-group icones-postagem">

                                            {{-- ÍCONES PARA MARCAR UMA PESSOA, ADD IMAGEM OU
                                            LOCAL A POSTAGEM --}}
                                            <button class="btn"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button class="btn"><i class="fa fa-user" aria-hidden="true"></i></button>

                                            {{-- POSTAR --}}
                                            <button class="btn float-right"><i class="fa fa-paper-plane-o"
                                                    aria-hidden="true"></i>
                                                <span>Postar</span>
                                            </button>

                                        </div>

                                    </form>

                                </div>
                            </div>

                            {{-- ÁREA ONDE MOSTRA TODOS OS POSTS CRIADOS
                            --}}

                            <div class="card shadow mb-3 posts-area">
                                {{-- FOTO USUÁRIO E HORÁRIO POST
                                --}}
                                @foreach ($postsUser as $post)

                                    {{-- ÁREA POST --}}
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">

                                            {{-- INFOS DO AUTOR DO POST
                                            --}}
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

                                                {{-- AUTOR --}}
                                                <div class="ml-2">
                                                    <h5 class="post-author">{{ '@' . $post->user->username }}</h5>
                                                </div>

                                            </div>

                                            {{-- BOTÕES POSTAGEM PARA REPORTAR UM POST
                                            --}}
                                            <div>
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
                                    <div class="card-body card-post">

                                        {{-- TEMPO DO POST --}}
                                        <div class="mb-2 post-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span class="time">{{ $post->created_at->diffforhumans() }}</span>
                                        </div>

                                        {{-- CONTEÚDO POST
                                        --}}
                                        <p class="card-text px-5">
                                            {{ $post->conteudo }}
                                        </p>

                                    </div>

                                    {{-- BOTÕES CURTIR, COMENTAR E COMPARTILHAR
                                    --}}
                                    <div class="card-footer card-notification-post">

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
                                    <div class="user-comments">

                                        {{-- COMENTÁRIOS --}}
                                        <div class="comments-section">
                                            @foreach ($post->comments as $comment)
                                                <ul class="comments-area">

                                                    {{-- SEÇÃO COMENTÁRIO
                                                    --}}
                                                    <li>
                                                        {{-- FOTO AUTOR COMENTÁRIO
                                                        --}}
                                                        <div class="comment-author-avatar">
                                                            <a href="">
                                                                <img src="{{ asset('uploads/photos/' . $comment->user->photo) }}"
                                                                    alt="Foto autor comentário">
                                                            </a>
                                                        </div>

                                                        {{-- COMENTÁRIO
                                                        --}}
                                                        <div class="comments">
                                                            <div class="sectiont-author-time">

                                                                {{-- AUTOR COMENTÁRIO
                                                                --}}
                                                                <h5>
                                                                    <a href="#"
                                                                        title="">{{ '@' . $comment->user->username }}</a>
                                                                </h5>

                                                                {{-- TEMPO
                                                                --}}
                                                                <span
                                                                    class="comment-time">{{ $comment->created_at->diffforhumans() }}</span>

                                                                {{-- RESPONDER
                                                                --}}
                                                                <a class="reply-comment" href="#"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>
                                                                {{ $comment->conteudo }}
                                                            </p>
                                                        </div>
                                                    </li>

                                                </ul>
                                            @endforeach
                                            {{-- VER TODOS OS COMENTÁRIOS
                                            --}}
                                            <div class="text-center">
                                                <a href="#" class="see-more-comments">Ver Todos</a>
                                            </div>
                                        </div>


                                        {{-- ÁREA COMENTAR --}}

                                        <div class="post-comment text-center">
                                            <div class="comment-form">
                                                <form action="{{ route('comment_insert') }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                                                    <div class="form-group comment-textarea">
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
                    <div class="col-lg-3 col-md-2 col-sm-12 order-md-3 text-center section-right-menu ">
                        <div class="card card-sticky scroll">

                            {{-- SEÇÃO AMIGOS --}}
                            <div class="friends-section">

                                {{-- IMAGEM AMIGOS --}}
                                <div class="friends-cards">
                                    {{-- TÍTULO --}}
                                    <h5>Amigos</h5>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/sara.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/leonardo.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/marcia.png') }}"
                                            class="img-fluid card-friend">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/Millena.png') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/vivian.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/sandra.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/joao.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/gabriel.jfif') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('imagens/minhaConta/michelle.png') }}"
                                            class="img-fluid card-friend">
                                    </a>

                                </div>

                                {{-- VER MAIS AMIGOS --}}
                                <div class="card-footer see-more-friends">
                                    <a href="{{ route('amigos') }}" target="_blank">Ver Mais</a>
                                </div>

                            </div>

                            {{-- SEÇÃO SERVIÇOS --}}
                            <div class="services-section">

                                <div class="card-body">

                                    {{-- TÍTULO --}}
                                    <h5>Serviços</h5>

                                    {{-- IMAGEM SERVIÇO --}}
                                    <div class="services-area">
                                        <a href="#">
                                            <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                                class="img-fluid services-cards">
                                        </a>

                                        <a href="#">
                                            <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                                class="img-fluid services-cards">
                                        </a>

                                        <a href="#">
                                            <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                                class="img-fluid services-cards">
                                        </a>

                                        <a href="#">
                                            <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                                class="img-fluid services-cards">
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
