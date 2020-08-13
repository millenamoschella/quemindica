@extends('layouts.layout-menuoff')


@section('content')


    {{-- DIV 1 --}}
    <div class="container h-100">
        <div class="div1-quemsomos ">
            <div class="row h-100 align-items-center ">
                <div class="col-12 ">

                    {{-- TÍTULO --}}
                    <h1 class="font-weight-light">
                        Quem Somos
                    </h1>

                    {{-- PARÁGRAFO 1 --}}
                    <p class="lead">
                        Quem Indica é uma comunidade online especializada em Indicar
                        serviços (freelancer) para
                        trabalhos cotidianos e produtos.
                    </p>

                </div>
            </div>
        </div>
    </div>

    {{-- IMAGEM 1 --}}
    <section class="imagem-time-sobre">
        <div class="">
            <img src="{{ asset('../imagens/institucional/quemsomos/equipe-sobre.png') }}" alt="Time Quem Indica"
                class="img-fluid">
        </div>
    </section>


    <div class="bg-white text-center secao-divs">
        <div class="container">

            {{-- DIV 2 --}}
            <div class="row align-items-center mb-5 div-2">
                <div class="col-lg-6 order-2 order-lg-1">

                    {{-- PARÁGRAFO 2 --}}
                    <p class="font-italic text-muted mb-4">
                        O espaço virtual tem o objetivo de conectar pessoas a trabalhadores formais ou informais
                        locais.
                        Ou seja, permite que serviços cotidianos possam ser livremente disponibilizados no site,
                        bem como indicados por uma pessoa que tenha perfil na comunidade. Em uma mistura de Rede Social,
                        Fórum e
                        E-commerce, o Quem Indica
                        promete beneficiar os usuários que fazem várias indicações.
                    </p>
                </div>
                {{-- IMAGEM 2 --}}
                <div class="col-lg-6 mx-auto order-1 order-lg-2"><img
                        src="{{ asset('../imagens/institucional/imagem-sobre2.jpg') }}" alt="Banner Time"
                        class="img-fluid mb-4 mb-lg-0">
                </div>

            </div>


            {{-- DIV 3 --}}
            <div class="row align-items-center mb-5 div-3">

                {{-- IMAGEM 3 --}}
                <div class="col-lg-6 px-5 mx-auto">
                    <img src="{{ asset('../imagens/institucional/quemsomos/sobre-4.jpg') }}" alt="Imagem Conexão"
                        class="img-fluid mb-4 mb-lg-0">
                </div>

                <div class="col-lg-6">

                    {{-- PARÁGRAFO 3 --}}

                    <p class="font-italic text-muted mb-4 ">
                        Quem Indica é o reflexo de uma sociedade cada vez mais interligada entre si, que apesar de
                        possuírem diversas diferenças,
                        elas apresentam algumas características em comum: o compartilhamento de informações e de
                        interesses
                        comuns entre os usuários,
                        e essa característica permite uma maior interação e mobilização social.
                    </p>
                </div>
            </div>


            {{-- DIV 4 --}}
            <div class="row align-items-center mb-5 div-4">
                <div class="col-lg-6 order-2 order-lg-1">
                    {{-- PÁRÁGRAFO 4 --}}
                    <p class="font-italic text-muted mb-4">
                        Assim, este espaço virtual vem com a proposta de: <br>
                        Recomendações de serviços/produtos numa determinada localidade;<br>
                        Adicionar fotos e avaliações do serviço que foi contratado;<br>
                        E um Feed de notícias que tem o objetivo de engajamento dos usuários com a plataforma.
                        Nesta página é possível ver as indicações dos amigos ou de alguém que esteja seguindo.
                    </p>
                </div>

                {{-- IMAGEM 4 --}}
                <div class="col-lg-6 mx-auto order-1 order-lg-2">
                    <img src="{{ asset('../imagens/institucional/quemsomos/sobre-7.jpg') }}" alt="Banner Tecnologia"
                        class="img-fluid mb-4 mb-lg-0">
                </div>
            </div>


        </div>
    </div>

    {{-- ÁREA AVATAR TIME --}}
    <div class="secao-avatar">
        <div class="container">
            <div class="row text-center mb-3">

                {{-- TÍTULO --}}
                <div class="col-lg-12">
                    <h2 class="display-4">Quem faz parte!</h2>
                </div>

            </div>

            {{-- AVATARS --}}
            <div class="row text-center avatars">

                {{-- MARCIA --}}
                <div class="col-xl-2 col-sm-6 mb-4 ">
                    <div class="bg-white rounded py-5 px-4 avatar-time">

                        <img src="{{ asset('../imagens/time/Marcia.png') }}" alt="Avatar Marcia" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

                        <h5 class="mb-0">Marcia Yokoto</h5>
                        <ul class="social mb-0 list-inline mt-3">

                            <li class="list-inline-item"><a href="https://github.com/marciayokota" class="social-link"
                                    target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="list-inline-item"><a
                                    href="https://www.linkedin.com/in/marcia-tiemi-miashiro-yokota-245046170/"
                                    class="social-link" target="_blank"><i
                                        class=" fa
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>


                {{-- MILLENA --}}
                <div class="col-xl-2 col-sm-6 mb-5">
                    <div class="bg-white rounded py-5 px-4 avatar-time">

                        <img src="{{ asset('../imagens/time/Millena.png') }}" alt="Avatar Millena" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

                        <h5 class="mb-0">Millena Moschella</h5>
                        <ul class="social mb-0 list-inline mt-3">

                            <li class="list-inline-item"><a href="https://github.com/millenamoschella" class="social-link"
                                    target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/millenamoschella/"
                                    class="social-link" target="_blank"><i
                                        class=" fa
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>


                {{-- SANDRA --}}
                <div class="col-xl-2 col-sm-6 mb-5">
                    <div class="bg-white rounded py-5 px-4 avatar-time">

                        <img src="{{ asset('../imagens/time/Sandra.png') }}" alt="Avatar Sandra" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

                        <h5 class="mb-0">Sandra Silmara</h5>

                        <ul class="social mb-0 list-inline mt-3">

                            <li class="list-inline-item"><a href="https://github.com/sandrazfd" class="social-link"
                                    target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/sandra-silmara/"
                                    class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>


                {{-- SARA --}}
                <div class="col-xl-2 col-sm-6 mb-5">
                    <div class="bg-white rounded py-5 px-4 avatar-time">

                        <img src="{{ asset('../imagens/time/Sara.png') }}" alt="Avatar Sara" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

                        <h5 class="mb-0">Sara Margarido</h5>

                        <ul class="social mb-0 list-inline mt-3">

                            <li class="list-inline-item"><a href="https://github.com/saramargarido" class="social-link"
                                    target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/saramargarido/"
                                    class="social-link" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>

                {{-- SHYRLES --}}
                <div class="col-xl-2 col-sm-6 mb-5">
                    <div class="bg-white rounded py-5 px-4 avatar-time">
                        <img src="{{ asset('../imagens/time/Shyrles.png') }}" alt="Avatar Shyrles" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

                        <h5 class="mb-0">Shyrles Monteiro</h5>

                        <ul class="social mb-0 list-inline mt-3">

                            <li class="list-inline-item"><a href="https://github.com/Shyrles" class="social-link"
                                    target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/shyrlesmonteiro/"
                                    class="social-link" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </div>



@endsection
