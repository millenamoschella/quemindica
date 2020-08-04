@extends('layouts.layout-minhaconta')


@section('content')

    {{-- ÁREA TÍTULOS --}}
    <div class="container-fluid text-center mt-5 pt-5">
        <h2 text id="tituloServicos">O Serviço que você procura está aqui!</h2>
        <h2 text id="tituloServicos">Indicado pelas pessoas que você mais confia!</h2>
    </div>

    <div class="container-fluid  mt-0">
        <div class="row  pt-4 pb-2">

            {{-- SERVIÇO 1 --}}
            <div class="col-md-3 col-12" id="topo">
                <div class="card bg-warning text-black border-white" style=>
                    <!--botom topo -->
                    <div class="img-animation">
                        <img class="card-img-top" src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}"
                            alt="Imagem de capa do card">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit
                            sit maiores quo sapiente id deserunt nam, nostrum facere perspiciatis voluptatibus! Delectus
                            esse quam iusto optio odio corrupti vero nobis!</p>
                        <a href="#" class="btn btn-info">Contratar</a>
                    </div>
                </div>
            </div>

            {{-- SERIÇO 2 --}}
            <div class="col-md-3 col-12" id="topo">
                <div class="card bg-secondary text-white border-white" style=>
                    <!--botom topo -->
                    <div class="img-animation">
                        <img class="card-img-top" src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}"
                            alt="Imagem de capa do card">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit
                            sit maiores quo sapiente id deserunt nam, nostrum facere perspiciatis voluptatibus! Delectus
                            esse quam iusto optio odio corrupti vero nobis!</p>
                        <a href="#" class="btn btn-info">Contratar</a>
                    </div>
                </div>
            </div>

            {{-- SERVIÇO 3 --}}
            <div class="col-md-3 col-12" id="topo">
                <div class="card bg-warning text-black border-white" style=>
                    <!--botom topo -->
                    <div class="img-animation">
                        <img class="card-img-top" src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}"
                            alt="Imagem de capa do card">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit
                            sit maiores quo sapiente id deserunt nam, nostrum facere perspiciatis voluptatibus! Delectus
                            esse quam iusto optio odio corrupti vero nobis!</p>
                        <a href="#" class="btn btn-info">Contratar</a>
                    </div>
                </div>
            </div>

            {{-- SERIÇO 4 --}}
            <div class="col-md-3 col-12" id="topo">
                <div class="card bg-secondary text-white border-white" style=>
                    <!--botom topo -->
                    <div class="img-animation">
                        <img class="card-img-top" src="{{ asset('../imagens/institucional/card-teste-servico.jpg') }}"
                            alt="Imagem de capa do card">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit
                            sit maiores quo sapiente id deserunt nam, nostrum facere perspiciatis voluptatibus! Delectus
                            esse quam iusto optio odio corrupti vero nobis!</p>
                        <a href="#" class="btn btn-info">Contratar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
