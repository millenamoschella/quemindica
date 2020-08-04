@extends('layouts.layout-minhaconta')


@section('content')


    <div class="grid-container">

        {{-- ASIDE ESQUERDO --}}
        <aside class="left">

            {{-- ÁREA USUÁRIO FOTO E PONTUAÇÃO --}}

            <div id="avatar-usuario">
                <div class="row">
                    <div class="profile-header-container">
                        <div class="profile-header-img">
                            <img class="img-circle" src="{{ asset('../imagens/institucional/usuario.png') }}">

                            <div class="rank-label-container">
                                <span class="label label-default rank-label">350 pontos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ÁREA MENU LATERAL ESQUERDO --}}

            <div class="wrapper d-flex align-items-stretch">
                <nav id="sidebar" class="menu-lateral">
                    <ul class="list-unstyled components mb-5">
                        <li><a href="{{ url('perfil') }}"><span class="icone fa fa-home"></span>Minha conta</a></li>
                        <li><a href="{{ url('configuracao') }}"><span class="icone fa fa-cogs"></span>Configurar Conta</a>
                        </li>
                        <li><a href="{{ url('amigos') }}"><span class="icone fa fa-user"></span>Amigos</a></li>
                        <li><a href="{{ url('servicos') }}"><span class="icone fa fa-shopping-cart"></span>Serviços</a>
                        </li>
                        <li><a href="{{ url('avaliacoes') }}"><span class="icone fa fa-star"></span>Avaliações</a></li>
                    </ul>
                </nav>
            </div>

            {{-- ÁREA HASHTAGS --}}
            <div id="explorar-hashtags">
                <h4>Hashtags</h4>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#">#BELEZA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#LIVROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#FILMES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#RESTAURANTE</a></li>
                </ul>
            </div>

        </aside>

        {{-- ASIDE DIREITO --}}
        <aside class="right">

            {{-- ÁREA BUSCA --}}
            <div class="busca">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Recipient's username"
                            aria-describedby="button-addon2" placeholder="Pesquisar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="button-addon2"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- ÁREA CADS SERVIÇOS --}}
            <div id="cards-servicos">
                <h4>Serviços</h4>

                <div class="cards-servicos">
                    <img src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}" alt="Imagem de capa do card"
                        class="img-thumbnail">
                    <img src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}" alt="Imagem de capa do card"
                        class="img-thumbnail">
                    <img src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}" alt="Imagem de capa do card"
                        class="img-thumbnail">
                </div>
            </div>
        </aside>

        {{-- ÁREA ESCREVER PUBLICAÇÃO --}}
        <main class="main">
            <div class="container-fluid gedf-wrapper">
                <div class="row">

                    {{-- ÁREA POST --}}
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3"
                                        placeholder="Escreva a sua indicação"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">compartilhar</button>
                            </div>

                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fa fa-globe"></i></button>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#"><i class="fa fa-globe"></i>Público</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-users"></i>Amigos</a>
                            </div>
                        </div>
                    </div>

                    {{-- ÁREA EXEMPLO POSTAGEM --}}
                    <div class="card gedf-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2"><img class="rounded-circle" width="45"
                                            src="../quem-indica/imagens/usuario.png" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">@usuário
                                        </div>

                                        <div class="h7 text-muted">Nome do Usuário
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10:30
                            </div>
                            <a class="card-link" href="#">
                                <h5 class="card-title">Título postagem</h5>
                            </a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam
                                est,
                                voluptates officiis iure soluta
                                alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae
                                repellendus. Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque,
                                reprehenderit!
                                Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga
                                quae.
                                Consectetur id molestias itaque facere? Hic!
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="#" class="card-link"><i class="fa fa-gittip"></i> Curtir</a>
                            <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                            <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartilhar indicação</a>
                        </div>
                    </div>

                </div>
            </div>
        </main>

    </div>


@endsection
