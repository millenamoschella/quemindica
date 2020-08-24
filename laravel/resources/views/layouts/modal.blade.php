{{-- MODAL LOGIN --}}

<div id="modalEntrar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content modal-suporte text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="btn-fechar-suporte" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL LOGIN --}}
            <h4 class="modal-title-suporte">Login</h4>

            {{-- CORPO MODAL LOGIN --}}
            <div class="modal-body">
                <div class="main">
                    <div class="container">

                        <div class="signup-content">


                            {{-- IMAGEM --}}
                            <div class="signup-img">
                                <img src="{{ asset('../imagens/institucional/login.svg') }}" class="img-fluid"
                                    alt="Banner Suporte">
                            </div>

                            {{-- FORMULÁRIO --}}
                            <div class="signup-form">

                                <form action="suporte.php" method="POST" class="register-form" id="register-form">
                                    <div class="row">



                                        
                                        {{-- EMAIL --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="text" name="email"
                                            placeholder="Email">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        {{-- SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="password" name="password"
                                                placeholder="Senha">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        <div class="mb-3 col-12 text-center">
                                            <small class="d-block">
                                                <a href="#">Esqueci minha senha</a>
                                            </small><br>
                                        </div>
                                        
                                        {{-- BOTÃO --}}
                                        <div class="col-12 container-botao-modal-suporte">
                                            <button class="btn-formulario-modal-suporte">
                                                Entrar
                                            </button>
                                        </div>
                                    
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- MODAL SUPORTE --}}

<div id="modalSuporte" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content modal-suporte text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="btn-fechar-suporte" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL SUPORTE --}}
            <h4 class="modal-title-suporte">Suporte</h4>

            {{-- CORPO MODAL SUPORTE --}}
            <div class="modal-body">
                <div class="main">
                    <div class="container">

                        <div class="signup-content">


                            {{-- IMAGEM --}}
                            <div class="signup-img">
                                <img src="{{ asset('../imagens/institucional/suporte-novo.png') }}" class="img-fluid"
                                    alt="Banner Suporte">
                            </div>

                            {{-- FORMULÁRIO --}}
                            <div class="signup-form">

                                <form action="suporte.php" method="POST" class="register-form" id="register-form">
                                    <div class="row">



                                        {{-- NOME --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="text" name="name"
                                                placeholder="Nome">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        {{-- EMAIL --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="text" name="email"
                                                placeholder="Email">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        {{-- MENSAGEM --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <textarea class="area-input-modal-suporte" name="message"
                                                placeholder="Mensagem"></textarea>
                                            <span class="focus-area-input-modal-suporte"></span>
                                        </div>

                                        {{-- BOTÃO --}}
                                        <div class="container-botao-modal-suporte">
                                            <button class="btn-formulario-modal-suporte">
                                                Enviar
                                            </button>
                                        </div>
                                    
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- MODAL REGISTRAR --}}

<div id="modalRegistrar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content modal-suporte text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="btn-fechar-suporte" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL REGISTRAR --}}
            <h4 class="modal-title-suporte">Registrar</h4>

            {{-- CORPO MODAL REGISTRAR --}}
            <div class="modal-body">
                <div class="main">
                    <div class="container">

                        <div class="signup-content">

                        {{-- FORMULÁRIO --}}
                        <form action="suporte.php" method="POST" class="register-form" id="register-form">
                        {{-- CODIGO --}}
                                        <div class="w-100">
                                        <small><label class="text-center" for="codigo">Já foi indicado? Digite o código que recebeu por SMS:</label></small>
                                            <div class="wrap-area-input-modal-suporte-modal-suporte">
                                                <input class="area-input-modal-suporte" type="text" name="codigo"
                                                    placeholder="000000">
                                                <span class="focus-area-input-modal-suporte"></span>
                                                <span class="icone-input-modal-suporte">
                                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>

                            {{-- IMAGEM --}}
                            <div class="signup-img">
                                <img src="{{ asset('../imagens/institucional/register.svg') }}" class="img-fluid"
                                    alt="Banner Suporte">
                            </div>


                            <div class="signup-form">

                                    <div class="row">

                                        {{-- NOME --}}
                                            <div class="wrap-area-input-modal-suporte-modal-suporte">
                                                <input class="area-input-modal-suporte" type="text" name="name"
                                                    placeholder="Nome">
                                                <span class="focus-area-input-modal-suporte"></span>
                                                <span class="icone-input-modal-suporte">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        
                                        {{-- EMAIL --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="text" name="email"
                                            placeholder="Email">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        {{-- SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="password" name="password"
                                                placeholder="Senha">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        {{-- SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input class="area-input-modal-suporte" type="password" name="password"
                                                placeholder="Confirmar Senha">
                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>


                                        {{--CHECKBOX--}}



                                        <div class="mb-3 col-12">
                                            <small class="d-block">
                                            <input type="radio" id="terms" name="terms" value="accept">
                                            <label for="terms">Lí e aceito os termos e condições.</label><br>
                                                <a href="#">Política de privacidade</a>
                                            </small><br>
                                        </div>
                                        
                                        {{-- BOTÃO --}}
                                        <div class="col-12 container-botao-modal-suporte">
                                            <button class="btn-formulario-modal-suporte">
                                                Cadastrar
                                            </button>
                                        </div>
                                    
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
