@extends('layouts.layout-off')


@section('content')

    {{-- ÁREA BANNER --}}
    <section class="d-flex banner_top">
        <div class="container">
            <div class="box">
                <img src="{{ asset('../imagens/institucional/trabalhadores-lupa.png') }}" class="service img-fluid" alt="">
                <div class="box_text_top">
                    <h4 class="text-center font_h4">Procura um serviço?</h4>
                    <p class="text-center texto_home font_p"> No Quem Indica você encontra o que precisa com indicações
                        feitas pelas pessoas que você mais confia...
                        Estamos prontos para ajudar você encontrar o profissional que precisa!
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ÁREA CADASTRO --}}
    <section class="d-flex banner_cadastro">
        <div class="container-fluid d-flex align-content-around flex-wrap justify-content-center">
            <div class="d-flex">
                <form class="form-inline">
                    <div class="input-group mb-2 mr-sm-2 mr-xs-2 line_register">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>

                    <div class="line_register">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="password" class="form-control mb-2 mr-sm-2 mr-xs-2" id="inlineFormInputName2"
                            placeholder="Senha">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Entrar</button>
                    <button type="submit" class="btn btn-primary mb-2 ml-2 btn_hidden">Entrar</button>
                </form>
            </div>
        </div>
    </section>

    {{-- ÁREA SOBRE O QUEM INDICA --}}
    <section class="d-flex banner_middle">

        <div class="container">
            <div class="text-center box_img">
                <img src="{{ asset('../imagens/institucional/rede-social.png') }}" class="img_rede_social img-fluid" alt="">
            </div>
            <div class="box_text">
                <h4 class="text-center font_h4">O que indica?</h4>
                <p class="text-center texto_meio font_p px-5">Não só de serviços e produtos que vivemos... aqui seu encontro
                    é perfeito
                    com cultura e lazer! Entre e descubra o que seus amigos estão vendo, ouvindo, lendo...</p>
            </div>
        </div>

    </section>

    {{-- ÁREA TIME --}}
    <section class="d-flex banner_team">

        <div class="container">
            <div class="text-center box_img_left">
                <img src="{{ asset('../imagens/institucional/equipe.png') }}" class="team" alt="">
            </div>

            <div class="box_text_right">
                <h3 class="text-center font_h3 py-3"><strong>Quem Indica é uma rede social feita para todos!</strong></h3>

                <img src="imagens/logo_icon.svg" id="logo_banner" class="rounded mx-auto d-block" alt="">

                <p class="text-center font_p pt-1"><strong>E por todos!</strong></p>
            </div>

        </div>
    </section>

@endsection
