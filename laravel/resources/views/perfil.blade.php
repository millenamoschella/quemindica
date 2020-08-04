@extends('layouts.layout-minhaconta')


@section('content')


    <div class="container mt-4 mb-n5" id="posicao">
        <div class="row  pt-4 pb-5">

            {{-- ÁREA FOTO E NOME DO USUÁRIO + HASHTAGS --}}
            <div class="col-sm-2 sm-12 pt-3" id="minhasHashtags">
                <img class="imagemUsuario" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}" alt="Foto do Usuário">
                <p class="nomeUsuario">Shyrles Monteiro</p>

                {{-- ÁREA ASIDE ESQUERDO HASHTAGS QUE O USUÁRIO SEGUE
                --}}
                <h5 class="mt-0 text-center text-white mb-5"><strong># Minhas Hashtags </strong></h5>
                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#quemindica</p>
                    </div>
                </div>

                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#teamo</p>
                    </div>
                </div>

                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#amo</p>
                    </div>
                </div>

                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#riodejaneiro</p>
                    </div>
                </div>

                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#jesus</p>
                    </div>
                </div>

                <div class="media">
                    <img class="mr-3" id="imgHashtag" src="{{ asset('imagens/minhaConta/hashtag-teste.png') }}"
                        alt="Imagem de uma lupa com hashtag">
                    <div class="media-body text-white">
                        <p>#riodejaneiro</p>
                    </div>
                </div>

            </div>

            {{-- ÁREA PUBLICAÇÕES DO USUÁRIO --}}
            <div class="col justify-content-center mt-5 mb-3">

                <div class="col-sm-6 sm-12">

                    {{-- ÁREA EXEMPLO PUBLICAÇÃO/INDICAÇÃO --}}
                    <div class="media">
                        <img class="mr-3" id="fotoPequena" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}"
                            alt=" Imagem de exemplo genérica">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Shyrles Monteiro</strong></h5>
                            <h6 class="mt-0" style="width: 35rem;">Alguém faz montagem de móveis? Preciso montar um
                                guarda-roupa e uma cômoda</h6>
                        </div>
                    </div>

                    {{-- ÁREA EXEMPLO PUBLICAÇÃO/INDICAÇÃO --}}
                    <div class="media">
                        <img class="mr-3" id="fotoPequena" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}"
                            alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Shyrles Monteiro</strong></h5>
                            <h6 class="mt-0" style="width: 35rem;">Algum Pintor de casa?</h6>
                        </div>
                    </div>

                    {{-- ÁREA EXEMPLO PUBLICAÇÃO/INDICAÇÃO --}}
                    <div class="media">
                        <img class="mr-3" id="fotoPequena" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}"
                            alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Shyrles Monteiro</strong></h5>
                            <img src="imagens/minhaConta/carreto.jpg" alt="imagem da indicação de carreto">
                        </div>
                    </div>

                    {{-- ÁREA EXEMPLO PUBLICAÇÃO/INDICAÇÃO --}}
                    <div class="media">
                        <img class="mr-3" id="fotoPequena" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}"
                            alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Shyrles Monteiro</strong></h5>
                            <h6 class="mt-0" style="width: 35rem;">Alguém conhece alguma escola ou hotelzinho infantil na
                                região, que fica com a criança em caso de emergência por períodos mais curtos? Ou algum site
                                de baba que cobra por diária de confiança... Indicações pleaaseee!!!! Muito obrigada bjs .
                                Procurando Recomendaçãos!</h6>
                        </div>
                    </div>

                    {{-- ÁREA EXEMPLO PUBLICAÇÃO/INDICAÇÃO --}}
                    <div class="media">
                        <img class="mr-3" id="fotoPequena" src="{{ asset('../imagens/minhaConta/fotoUsuario.jpg') }}"
                            alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Shyrles Monteiro</strong></h5>
                            <h6 class="mt-0" style="width: 35rem;">Eai, qual anime ta mais ansioso?</h6>
                            <h6 class="mt-0" style="width: 35rem;">Animes:</h6>
                            <h6 class="mt-0" style="width: 35rem;">Boku no Hero 4 temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">Nanatsu no Taizai 3ª temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">Shokugeki no Souma 4ª temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">Granblue Fantasy 2ª temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">Psycho Pass 3ª temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">Radiant 2ª temporada</h6>
                            <h6 class="mt-0" style="width: 35rem;">- Kito</h6>
                            <img src="imagens/minhaConta/recomendacaoOtaku.jpg" alt="imagem da indicação de serie">
                        </div>
                    </div>

                </div>

            </div>

            {{-- ÁREA AMIGOS ASIDE DIREIRO --}}
            <div class="col justify-content-right ml-5 mb-0 mr-6" id="ladoDireito">

                <div class="col sm-5 pt-3 mt-4">

                    <h5 class="mt-0 text-warning ml-5"><strong>Amigos</strong></h5>

                    {{-- 1º ROW --}}
                    <div class="media ml-5">

                        {{-- AMIGO 1 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('../imagens/minhaConta/sara.jfif') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Sara margarido
                        </div>

                        {{-- AMIGO 2 --}}
                        <div class="card bg-warning text-white border-warning ml-3 mr-3 mt-3 mb-5"
                            style="width: 7rem; height: 7rem;">
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('../imagens/minhaConta/aline.png') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Aline margarido
                        </div>

                        {{-- AMIGO 3 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('../imagens/minhaConta/gabriel.jfif') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Gabriel Teacher
                        </div>

                    </div>

                    {{-- 2º ROW --}}
                    <div class="media ml-5">

                        {{-- AMIGO 4 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('../imagens/minhaConta/joao.jfif') }}"
                                    alt="Imagem do usuario">
                            </div>
                            João margarido
                        </div>

                        {{-- AMIGO 5 --}}
                        <div class="card bg-warning text-white border-warning ml-3 mr-3 mt-3 mb-5"
                            style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('imagens/minhaConta/juliana.png') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Juliana Alencar
                        </div>

                        {{-- AMIGO 6 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('imagens/minhaConta/leonardo.jfif') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Leonardo Margarido
                        </div>

                    </div>

                    {{-- 3º ROW --}}
                    <div class="media ml-5">

                        {{-- AMIGO 7 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('imagens/minhaConta/marcia.png') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Marcia margarido
                        </div>

                        {{-- AMIGO 8 --}}
                        <div class="card bg-warning text-white border-warning ml-3 mr-3 mt-3 mb-5"
                            style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('imagens/minhaConta/larissa.png') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Larissa margarido
                        </div>

                        {{-- AMIGO 9 --}}
                        <div class="card bg-warning text-white border-warning mt-3 mb-5" style="width: 7rem; height: 7rem;">
                            <!--botom topo -->
                            <div class="img-animation">
                                <img class="card-img-top rounded-4" src="{{ asset('imagens/minhaConta/leonardo.jfif') }}"
                                    alt="Imagem do usuario">
                            </div>
                            Leonardo Margarido
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>


@endsection
