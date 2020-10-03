@extends('layouts.layout')

@prepend('scripts')
<script defer src="{{ asset('/js/app.js') }}"></script>
<script defer src="{{ asset('/js/registerRules.js') }}"></script>
{{-- <script defer src="{{ asset('/js/modalfotoPerfil.js') }}"></script>
--}}
@endprepend

@section('title', Auth::user()->name)

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/perfil.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/modalFotoPerfil.css') }}">
@endsection


@section('header')
    @include('layouts.layout-menulogado')
@endsection


@section('content')

    {{-- CAPA PERFIL --}}
    <section class="capa-perfil">
        <div class="capa">
            <div class="icon-change">

                {{-- <a href="#" data-toggle="modal" data-target="#modalFotoCapa">
                    <img src="{{ asset('icones/pencil.svg') }}" alt="Mudar foto de capa">
                </a> --}}

            </div>
        </div>
    </section>


    {{-- SEÇÃO FOTO E NOME DO USUÁRIO --}}
    <section class="profile-section">
        <div class="header-bio">

            {{-- FOTO USUÁRIO --}}
            <div class="user-photo">

                <a href="#" data-toggle="modal" data-target="#modalFoto">
                    @if ($user->photo == null)
                        <img src="{{ asset('imagens/institucional/user-default.jpg') }}" alt="foto default"
                            class="default-photo-user">
                    @else
                        <img src="{{ asset('uploads/photos/' . $user->photo) }}" alt="Foto perfil usuário"
                            class="default-photo-user">
                    @endif
                </a>

            </div>

            {{-- PONTUAÇÃO USUÁRIO --}}
            <div class="stars">
                @for ($i = 0; $i < 5; $i++)
                    @if (floor($avaregeRating) - $i >= 1)
                        <i class="fas fa-star "> </i>
                    @elseif ($avaregeRating - $i > 0)
                        <i class="fas fa-star-half-alt "> </i>
                    @else
                        <i class="far fa-star "> </i>
                    @endif
                @endfor

                @if ($countRatings == null)
                    <p class="text-points">(0/0)</p>
                @else

                    <p class="text-points">({{ $ratings->sum() . '/' . $countRatings * 5 }})</p>

                    <div class="ratings-avaliation">
                        <p class="text-rating">{{ 'Total de ' . $ratings->sum() }}
                            @if ($countRatings == 1)
                                {{ ' ponto de ' . $countRatings . ' avaliação.' }}
                            @else
                                {{ ' pontos de ' . $countRatings . ' avaliações.' }}
                            @endif
                        </p>
                    </div>

                @endif
            </div>

            {{-- NOME USUÁRIO --}}
            <h1 class="user-name">{{ $user->name }}
            </h1>

            {{-- BOTÕES ADICIONAR E MENSAGEM --}}
            <div class="add-message-perfil">

                {{-- ÁREA PARA SEGUIR UM USUÁRIO --}}
                @if ($user->id != Auth::user()->id)

                    @if (is_null($follower))

                        <a href="{{ route('follow', $user->id) }}" data-title="Seguir">
                            <i class="fas fa-plus add-friend" aria-hidden="true"></i>
                        </a>

                    @else

                        <a href="{{ route('unfollow', $user->id) }}" data-title="Parar de seguir">
                            <i class="fas fa-minus add-friend" aria-hidden="true"></i>
                        </a>

                    @endif

                    {{-- BOTÃO MENSAGEM --}}
                    <button class="messaga-button">
                        Mensagem
                    </button>

                @endif

            </div>

        </div>
    </section>


    {{-- SEÇÃO MENU, POSTS E AMIGOS --}}
    <section class="content-user">
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

                                            @for ($i = 0; $i < 5; $i++)
                                                @if (floor($avaregeRating) - $i >= 1)
                                                    <i class="fas fa-star "> </i>
                                                @elseif ($avaregeRating - $i > 0)
                                                    <i class="fas fa-star-half-alt "> </i>
                                                @else
                                                    <i class="far fa-star "> </i>
                                                @endif
                                            @endfor
                                            @if ($countRatings == null)
                                                <span class="left-raiting-points">(0/0)</span>
                                            @else
                                                <span class="left-raiting-points">
                                                    ({{ $ratings->sum() . '/' . $countRatings * 5 }})
                                                </span>
                                            @endif

                                        </div>

                                        {{-- BIO DO USUÁRIO --}}
                                        <p class="text-center">
                                            {{ $user->about }}
                                        </p>

                                    </div>

                                </div>
                            </div>

                            {{-- LINKS --}}
                            <div class="menu-links ">
                                <ul class="d-flex flex-column">
                                    <i class="fa fa-user-circle" aria-hidden="true"><a
                                            href="{{ route('user', Auth::user()->username) }}" title="">Perfil</a></i>

                                    <i class="fa fa-users" aria-hidden="true"><a
                                            href="{{ route('users', $user->username) }}" title="">Usuários</a></i>

                                    <i class="fas fa-user-friends" aria-hidden="true"><a
                                            href="{{ route('seguindo', $user->username) }}" title="">Seguindo</a></i>

                                    {{-- <i class="fas fa-user-friends" aria-hidden="true"><a
                                            href="#" title="">Seguidores</a></i> --}}

                                    <i class="fa fa-list-alt" aria-hidden="true"><a href="{{ route('servicos') }}"
                                            title="">Serviços</a></i>

                                    <i class="fa fa-question-circle" aria-hidden="true"><a href="{{ route('suporte') }}"
                                            title="">Suporte</a></i>

                                    <i class="fa fa-cog" aria-hidden="true"><a
                                            href="{{ route('editarperfil', Auth::user()->id) }}" title="">Editar
                                            Perfil</a></i>
                                </ul>
                            </div>

                            {{-- TAGS --}}
                            {{-- <div class="tags-section text-center">

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

                            </div> --}}

                        </div>
                    </div>

                    {{-- CONTEÚDO --}}
                    <div class="col-lg-7 col-md-7 col-sm-12 order-md-2 section-posts">

                        {{-- SEÇÃO POSTS --}}
                        <div class="section-posts">

                            {{-- ESCOLHER TIPO DE POST --}}
                            <div class="card shadow noScroll card-sticky choose-post" id="choosePost">
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

                                        @if (Session::has('message'))
                                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            {{-- ESCREVER POST CULTURA --}}
                            <div class="card shadow displayNone" id="culturePost">
                                <div class="card-body">

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconCulture" class="backIcon">
                                        <i class="fas fa-arrow-left"></i>
                                    </div>

                                    @include('forms.culture')

                                </div>
                            </div>

                            {{-- ESCREVER POST SERVIÇO --}}
                            <div class="card shadow displayNone scroll" id="servicePost">
                                <div class="card-body">

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconService" class="backIcon">
                                        <i class="fas fa-arrow-left"></i>
                                    </div>

                                    @include('forms.service')

                                </div>
                            </div>

                            {{-- ESCREVER POST PRODUTO --}}
                            <div class="card shadow displayNone" id="productPost">
                                <div class="card-body">

                                    {{-- BOTÃO VOLTAR AS OPÇÕES TIPO DE POST
                                    --}}
                                    <div id="backIconProduct" class="backIcon">
                                        <i class="fas fa-arrow-left"></i>
                                    </div>

                                    @include('forms.product')

                                </div>
                            </div>

                            {{-- ÁREA ONDE MOSTRA TODOS OS POSTS CRIADOS
                            --}}

                            @if (!$postsUser->count())

                                <div class="container text-center default-message">
                                    <p>Você ainda não fez nenhuma indicação</p>
                                </div>
                            @else

                                <div class="card shadow my-3 posts-area">
                                    {{-- FOTO USUÁRIO E HORÁRIO POST
                                    --}}

                                    @foreach ($postsUser as $post)

                                        {{-- ÁREA POST
                                        --}}
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">

                                                {{-- INFOS DO AUTOR DO POST
                                                --}}
                                                <div class="d-flex justify-content-between align-items-center">
                                                    {{-- FOTO USUÁRIO AUTOR DO
                                                    POST
                                                    --}}
                                                    <div class="mr-2">
                                                        <a href="{{ route('user', $user->username) }}">
                                                            @if ($user->photo == null)
                                                                <img src="{{ asset('imagens/institucional/user-default.jpg') }}"
                                                                    alt="foto default" class="photo-author-post">
                                                            @else
                                                                <img src="{{ asset('uploads/photos/' . $post->user->photo) }}"
                                                                    alt="Foto autor post"
                                                                    class="img-fluid photo-author-post">
                                                            @endif
                                                        </a>
                                                    </div>

                                                    {{-- AUTOR
                                                    --}}
                                                    <div class="ml-2">
                                                        <h5 class="post-author">
                                                            <a href="{{ route('user', $user->username) }}">
                                                                {{ '@' . $post->user->username }} </a>
                                                        </h5>
                                                    </div>

                                                </div>

                                                {{-- BOTÕES POSTAGEM PARA
                                                REPORTAR
                                                UM
                                                POST
                                                --}}
                                                {{-- <div>
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button" id="gedf-drop1"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"> --}}

                                                            {{-- ÍCONE
                                                            --}}
                                                            {{-- <i
                                                                class="fa fa-ellipsis-h"></i>
                                                        </button> --}}

                                                        {{-- OPÇÕES
                                                        --}}
                                                        {{-- <div
                                                            class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="gedf-drop1">
                                                            <a class="dropdown-item" href="#">Esconder</a>
                                                            <a class="dropdown-item" href="#">Reportar</a>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </div>
                                        </div>

                                        {{-- POSTAGEM
                                        --}}
                                        <div class="card-body card-post">

                                            {{-- TEMPO DO POST
                                            --}}
                                            <div class="mb-2 post-time">
                                                <i class="fa fa-clock-o"></i>
                                                <span class="time">{{ $post->created_at->diffforhumans() }}</span>
                                            </div>

                                            {{-- RESULTADO POSTS
                                            --}}
                                            <div class="card-text px-5 post-result">
                                                @switch($post)

                                                    {{-- CULTURA --}}
                                                    @case($post->culture_id != null)
                                                    <div class="culture-post">

                                                        <h6 class="culture-segment">
                                                            {{ $post->culture->culture_segment->tipo . ' em ' }}
                                                            {{ $post->culture->plataforma }}
                                                        </h6>
                                                        <h6 class="culture-tittle">{{ $post->culture->titulo }}</h6>

                                                    </div>
                                                    @break

                                                    {{-- SERVIÇO --}}
                                                    @case($post->service_id != null)
                                                    <div class="service-post">

                                                        <div class="rating-service-section">

                                                            <div class="raintg-service">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if (floor($post->service->rating[0]->nota) - $i >= 1)
                                                                        <i class="fas fa-star "> </i>
                                                                    @elseif ($post->service->rating[0]->nota - $i > 0)
                                                                        <i class="fas fa-star-half-alt "> </i>
                                                                    @else
                                                                        <i class="far fa-star "> </i>
                                                                    @endif
                                                                @endfor
                                                                <h6 class="service-point">
                                                                    {{ 'Nota ' . $post->service->rating[0]->nota }}</h6>
                                                            </div>

                                                        </div>

                                                        <h6 class="service-title">Indicação de Serviço</h6>
                                                        <h6 class="service-segment">Segmento:
                                                            {{ $post->service->segment->tipo }}
                                                        </h6>

                                                        <h6 class="service-provider">{{ $post->service->servico . ' com ' }}
                                                            <a href="{{ route('user', $post->service->user->username) }}">{{ $post->service->nome_prestador }}
                                                            </a>
                                                        </h6>

                                                        {{-- FOTO DO SERVIÇO
                                                        --}}
                                                        <div class="service-photo">

                                                            <a href="{{ route('servico.show', $post->service->id) }}">
                                                                @if ($post->service->photo == null)
                                                                    <img src="{{ asset('imagens/servicos/servico-6.png') }}"
                                                                        alt="Foto default serviço"
                                                                        class="default-photo-service">
                                                                @else
                                                                    <img src="{{ asset('uploads/services/' . $post->service->photo) }}"
                                                                        alt="Foto serviço" class="default-photo-service">
                                                                @endif
                                                            </a>

                                                        </div>

                                                    </div>
                                                    @break

                                                    {{-- PRODUTO --}}
                                                    @case($post->product_id != null)
                                                    <div class="product-post">

                                                        <h6 class="product-title">Indicação de produto</h6>
                                                        <h6 class="product-segment">Segmento:
                                                            {{ $post->product->segment->tipo }}
                                                        </h6>
                                                        <h6 class="product-description">
                                                            {{ $post->product->nome . ' da marca ' . $post->product->marca . ', na loja ' . $post->product->loja . ', no valor de R$ ' . $post->product->valor . ',00' }}
                                                        </h6>

                                                    </div>
                                                    @break

                                                    @default
                                                    {{ 'Erro' }}

                                                @endswitch
                                            </div>

                                            {{-- CONTEÚDO POST
                                            --}}
                                            <p class="card-text px-5"> O que achou:
                                                {{ $post->conteudo }}
                                            </p>

                                        </div>

                                        {{-- BOTÕES CURTIR, COMENTAR E
                                        COMPARTILHAR
                                        --}}
                                        {{-- <div class="card-footer card-notification-post">

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

                                        </div> --}}

                                        {{-- SEÇÃO COMENTÁRIOS DO POST
                                        --}}
                                        <div class="user-comments">

                                            {{-- COMENTÁRIOS
                                            --}}
                                            <div class="comments-section">
                                                @foreach ($post->comments as $comment)
                                                    <ul class="comments-area">

                                                        {{-- SEÇÃO COMENTÁRIO
                                                        --}}
                                                        <li>
                                                            {{-- FOTO AUTOR
                                                            COMENTÁRIO
                                                            --}}
                                                            <div class="comment-author-avatar">

                                                                <a href="{{ route('user', $comment->user->username) }}">

                                                                    @if ($user->photo == null)
                                                                        <img src="{{ asset('imagens/institucional/user-default.jpg') }}"
                                                                            alt="foto default" class="photo-author-comment">
                                                                    @else
                                                                        <img src="{{ asset('uploads/photos/' . $comment->user->photo) }}"
                                                                            alt="Foto autor comentário"
                                                                            class="photo-author-comment">
                                                                    @endif
                                                                </a>
                                                            </div>

                                                            {{-- COMENTÁRIO
                                                            --}}
                                                            <div class="comments">
                                                                <div class="sectiont-author-time">

                                                                    {{-- AUTOR
                                                                    COMENTÁRIO
                                                                    --}}
                                                                    <h5>
                                                                        <a href="{{ route('user', $comment->user->username) }}"
                                                                            title="">{{ '@' . $comment->user->username }}</a>
                                                                    </h5>

                                                                    {{-- TEMPO
                                                                    --}}
                                                                    <span
                                                                        class="comment-time">{{ $comment->created_at->diffforhumans() }}
                                                                    </span>

                                                                    {{--
                                                                    RESPONDER
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
                                                {{-- <div class="text-center">
                                                    <button>
                                                        <a href="#" id="loadMoreComments" class="see-more-comments">Ver
                                                            Mais</a>
                                                    </button>
                                                </div> --}}
                                            </div>


                                            {{-- ÁREA COMENTAR
                                            --}}

                                            <div class="post-comment text-center">
                                                <div class="comment-form">
                                                    <form action="{{ route('comment_insert') }}" method="post">
                                                        @csrf

                                                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                                                        <div class="form-group comment-textarea">
                                                            <textarea class="form-control" id="comentario" rows="3"
                                                                placeholder="Faça um comentário..."
                                                                name="conteudo"></textarea>


                                                            {{-- BOTÃO
                                                            COMENTAR
                                                            --}}
                                                            <button type="submit" class="btn">Comentar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>

                    {{-- MENU DIREITO --}}
                    <div class="col-lg-3 col-md-2 col-sm-12 order-md-3 text-center section-right-menu">
                        <div class="card card-sticky scroll">

                            {{-- SEÇÃO USUÁRIOS SEGUIDOS
                            --}}
                            <div class="friends-section">

                                @if (!$user->followers->count())
                                    <div class="container text-center default-message-follow">
                                        <p>Este usuário ainda não está seguindo ninguém</p>
                                    </div>
                                @else

                                    <div class="friends-cards">
                                        {{-- TÍTULO
                                        --}}
                                        <h5>Seguindo</h5>

                                        @if (!$user->followers->count())
                                            <div class="container text-center default-message-follow">
                                                <p>Você ainda não está seguindo nenhum usuário</p>
                                            </div>
                                        @else

                                            <div class="following-list clearfix">
                                                @foreach ($user->followers as $follower)
                                                    <ul>
                                                        <li class="following">

                                                            @if ($follower->photo == null)
                                                                <a href="{{ route('user', $follower->username) }}">
                                                                    <img src="{{ asset('imagens/institucional/user-default.jpg') }}"
                                                                        alt="foto default" class="card-friend">
                                                                </a>

                                                            @else

                                                                <a href="{{ route('user', $follower->username) }}">
                                                                    <img src="{{ asset('uploads/photos/' . $follower->photo) }}"
                                                                        class="card-friend">
                                                                </a>
                                                            @endif

                                                            {{-- NOME
                                                            --}}
                                                            <span class="name-following">
                                                                {{ $follower->name }}
                                                            </span>

                                                        </li>
                                                    </ul>
                                                @endforeach
                                            </div>

                                        @endif

                                    </div>

                                @endif

                                {{-- VER MAIS
                                --}}
                                <div class="card-footer see-more-friends">
                                    <a href="{{ route('seguindo', $user->username) }}">Ver Mais</a>
                                </div>

                            </div>


                            {{-- SEÇÃO SERVIÇOS
                            --}}
                            <div class="services-section">

                                <div class="card-body">

                                    {{-- TÍTULO
                                    --}}
                                    <h5>Serviços</h5>

                                    {{-- IMAGEM SERVIÇO
                                    --}}
                                    <div class="services-area">

                                        @foreach ($postsServices as $post)
                                            <div class="section-image-service">
                                                @if ($post->photo == null)
                                                    <a href="{{ route('servico.show', $post->id) }}">
                                                        <img src="{{ asset('imagens/institucional/card-teste-servico.jpg') }}"
                                                            class="img-fluid services-cards">
                                                    </a>
                                                @else
                                                    <a href="{{ route('servico.show', $post->id) }}">
                                                        <img src="{{ asset('uploads/services/' . $post->photo) }}"
                                                            alt="Foto Serviço" class="img-fluid services-cards">
                                                    </a>
                                                @endif
                                                <br>
                                                <span class="small caption-service">{{ $post->servico }}</span>
                                            </div>
                                        @endforeach


                                    </div>

                                </div>

                                {{-- VER MAIS SERVIÇOS
                                --}}
                                <div class="card-footer see-more-services">
                                    <a href="{{ route('servicos') }}">Ver Mais</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection


@section('modal')
    {{-- MODAL --}}
    @include('users.modalPhoto')
    {{-- @include('users.modalCapa') --}}
@endsection


@section('footer')
    @include('layouts.footer-logado')
@endsection

<script src="{{ asset('/js/modalfotoPerfil.js') }}"></script>
{{-- <script src="{{ asset('/js/modalfotoCapa.js') }}"></script>
--}}
