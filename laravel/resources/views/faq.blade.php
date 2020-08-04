@extends('layouts.layout-off')


@section('content')

    {{-- ÁTRA TÍTULO --}}

    <section class="banner_azul">
        <div class="container text-center">
            <img src="{{ asset('../imagens/logo/logo-icon.svg') }}" class="rounded" id="quemindica" alt="Quem Indica">
            <h1><strong>FAQ</strong></h1>
        </div>
    </section>

    {{-- ÁREA PERGUNTAS FREQUENTES --}}
    <section class="banner_faq">
        <div class="container questions_box">
            <h3 class="h3_title"><strong>Perguntas Frequentes</strong></h3>

            <div class='question'>
                <input type='checkbox' id='question-1'>
                <label for='question-1'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

            <div class='question'>
                <input type='checkbox' id='question-2'>
                <label for='question-2'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

            <div class='question'>
                <input type='checkbox' id='question-3'>
                <label for='question-3'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

            <div class='question'>
                <input type='checkbox' id='question-4'>
                <label for='question-4'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

            <div class='question'>
                <input type='checkbox' id='question-5'>
                <label for='question-5'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

            <div class='question'>
                <input type='checkbox' id='question-6'>
                <label for='question-6'>Qual sua pergunta?</label>
                <div class='answer'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis id, ratione, excepturi
                    sint, vero repellendus quasi
                    voluptas enim aspernatur amet odit sunt iure laudantium dolores incidunt eaque delectus quam. Lorem
                    ipsum dolor sit amet
                    consectetur adipisicing elit. Reprehenderit, magnam excepturi ab amet est laboriosam repellendus natus
                    soluta ipsam provident
                    ex quo laudantium earum tempora tenetur quas, doloremque perspiciatis placeat!
                </div>
            </div>

        </div>
    </section>

@endsection
