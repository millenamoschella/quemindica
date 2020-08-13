@extends('layouts.layout-menuoff')


@section('content')

    <div class="secao-faq">

        <div class="container">

            <h1 class="py-5 text-center">FAQ</h1>

            <div class="row">

                {{-- MENU TÓPICOS --}}
                <div class="col-lg-4 menu-faq">
                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">

                        <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1"
                            aria-selected="true">
                            <i class="fa fa-question p-2" aria-hidden="true"></i>
                            Perguntas Frequentes
                        </a>

                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2"
                            aria-selected="false">
                            <i class="fa fa-user p-2" aria-hidden="true"></i>
                            Perfil
                        </a>

                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3"
                            aria-selected="false">
                            <i class="fa fa-cog p-2" aria-hidden="true"></i>
                            Conta
                        </a>

                        <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4"
                            aria-selected="false">
                            <i class="fa fa-quote-right p-2" aria-hidden="true"></i>
                            Serviços e Indicações
                        </a>

                        <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5"
                            aria-selected="false">
                            <i class="fa fa-star-half-o p-2" aria-hidden="true"></i>
                            Pontuação
                        </a>

                    </div>
                </div>

                {{-- PERGUNTAS --}}
                <div class="col-lg-8 secao-perguntas">
                    <div class="tab-content" id="faq-tab-content">

                        {{-- PERGUNTA: PERGUNTAS FREQUENTES --}}
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">

                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-1-content-1" aria-expanded="false"
                                                aria-controls="accordion-tab-1-content-1">
                                                Pergunta 1
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1"
                                        aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 2 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-1-content-2" aria-expanded="false"
                                                aria-controls="accordion-tab-1-content-2">
                                                Pergunta 2
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2"
                                        aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 3 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-1-content-3" aria-expanded="false"
                                                aria-controls="accordion-tab-1-content-3">
                                                Pergunta 3
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-3"
                                        aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PERGUNTA: PERFIL --}}
                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                            <div class="accordion" id="accordion-tab-2">

                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-2-content-1" aria-expanded="false"
                                                aria-controls="accordion-tab-2-content-1">
                                                Pergunta 1
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-2-content-1"
                                        aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 2 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-2-content-2" aria-expanded="false"
                                                aria-controls="accordion-tab-2-content-2">
                                                Pergunta 2
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-2"
                                        aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 3 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-2-content-3" aria-expanded="false"
                                                aria-controls="accordion-tab-2-content-3">
                                                Pergunta 3
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-3"
                                        aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PERGUNTA: CONTA --}}
                        <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                            <div class="accordion" id="accordion-tab-3">

                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-3-content-1" aria-expanded="false"
                                                aria-controls="accordion-tab-3-content-1">
                                                Pergunta 1
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-3-content-1"
                                        aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 2 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-3-content-2" aria-expanded="false"
                                                aria-controls="accordion-tab-3-content-2">
                                                Pergunta 2
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-2"
                                        aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 3 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-3-content-3" aria-expanded="false"
                                                aria-controls="accordion-tab-3-content-3">
                                                Pergunta 3
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-3"
                                        aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PERGUNTA: SERVÇOS E INDICAÇÕES --}}
                        <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                            <div class="accordion" id="accordion-tab-4">

                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-4-content-1" aria-expanded="false"
                                                aria-controls="accordion-tab-4-content-1">
                                                Pergunta 1
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-4-content-1"
                                        aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 2 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-4-content-2" aria-expanded="false"
                                                aria-controls="accordion-tab-4-content-2">
                                                Pergunta 2
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-2"
                                        aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 3 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-4-content-3" aria-expanded="false"
                                                aria-controls="accordion-tab-4-content-3">
                                                Pergunta 3
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-3"
                                        aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PERGUNTA: PONTUAÇÃO --}}
                        <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                            <div class="accordion" id="accordion-tab-5">

                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-5-content-1" aria-expanded="false"
                                                aria-controls="accordion-tab-5-content-1">
                                                Pergunta 1
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-5-content-1"
                                        aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 1 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-5-content-2" aria-expanded="false"
                                                aria-controls="accordion-tab-5-content-2">
                                                Pergunta 2
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-2"
                                        aria-labelledby="accordion-tab-5-heading-2" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- PERGUNTA 3 --}}
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#accordion-tab-5-content-3" aria-expanded="false"
                                                aria-controls="accordion-tab-5-content-3">
                                                Pergunta 3
                                                <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-3"
                                        aria-labelledby="accordion-tab-5-heading-3" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
                                                laoreet
                                                nulla, sit amet blandit dolor. Vivamus fermentum purus metus, ac rutrum
                                                massa iaculis vel. Aliquam nec molestie purus. Praesent porttitor lectus
                                                vitae est tempus fermentum. Ut vel dolor egestas, eleifend odio nec,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>


@endsection
