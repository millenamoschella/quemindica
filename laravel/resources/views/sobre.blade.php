@extends('layouts.layout-off')


@section('content')


    {{-- ÁREA TÍTULO --}}
    <section class="banner_azul">
        <div class="container text-center">
            <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" class="rounded" id="quemindica" alt="Quem Indica">
            <h1><strong>Quem Somos</strong></h1>
        </div>
    </section>

    {{-- ÁREA SOBRE --}}
    <section class="banner_conteudo">
        <div class="container">

            {{-- TEXTO --}}
            <span class="text-justfy" id="sobre">
                <p>
                    Quem Indica é uma comunidade online especializada em Indicar serviços (freelancer) para
                    trabalhos cotidianos e produtos.
                    Disponível neste website www.quemindica.com.
                </p>
                <p>
                    O espaço virtual tem o objetivo de conectar pessoas a trabalhadores formais ou informais
                    locais.
                    Ou seja, permite que serviços cotidianos possam ser livremente disponibilizados no site,
                    bem como indicados por uma pessoa que tenha perfil na comunidade. Em uma mistura de Rede Social, Fórum e
                    E-commerce, o Quem Indica
                    promete beneficiar os usuários que fazem várias indicações.
                </p>
                <p>
                    Quem Indica é o reflexo de uma sociedade cada vez mais interligada entre si, que apesar de
                    possuírem diversas diferenças,
                    elas apresentam algumas características em comum: o compartilhamento de informações e de interesses
                    comuns entre os usuários,
                    e essa característica permite uma maior interação e mobilização social.
                </p>
                <p>
                    Assim, este espaço virtual vem com a proposta de: <br>
                    Recomendações de serviços/produtos numa determinada localidade;<br>
                    Adicionar fotos e avaliações do serviço que foi contratado;<br>
                    E um Feed de notícias que tem o objetivo de engajamento dos usuários com a plataforma.
                    Nesta página é possível ver as indicações dos amigos ou de alguém que esteja seguindo.
                </p><br>

                <h4 class="text-center"><strong>Quem Indica é uma plataforma perfeita para você!</strong></h4>
            </span>

            {{-- FOTO --}}
            <div class="text-center">
                <img src="{{ asset('../imagens/institucional/equipe.png') }}" class="rounded img-fluid img_grupo"
                    alt="Grupo Quem Indica">
            </div>

        </div>
    </section>

@endsection
