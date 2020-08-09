{{-- MODAL LOGIN --}}

<div id="modalEntrar" class="modal fade" tabindex="-1" role="dialog">

    {{-- MODAL LOGIN --}}
    <div class="modal-dialog">
        <div class="modal-content">

            {{-- HEADER MODAL --}}
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
            </div>

            {{-- CORPO MODAL --}}
            <div class="modal-body">

                {{-- FORMULÁRIO --}}
                <form class="form-signin" action="login.php" method="POST">

                    {{-- EMAIL --}}
                    <label for="input-modalEmail" class="sr-only">Endereço de email</label>
                    <input-modal type="email" id="input-modalEmail" class="form-control" placeholder="Seu email"
                        required="">
                        <br>

                        {{-- SENHA --}}
                        <label for="input-modalPassword" class="sr-only">Senha</label>
                        <input-modal type="password" id="input-modalPassword" class="form-control" placeholder="Senha"
                            required="">
                            <div class="checkbox mb-3">
                                <label>
                                    <input-modal type="checkbox" value="remember-me"> Lembrar de mim
                                </label>
                            </div>

                            {{-- BOTÃO --}}
                            <button class="btn btn-lg btn-block padrao" type="submit">Entrar</button>
                            <div class="mb-3 text-center">
                                <a href="#">Esqueci minha senha</a>
                            </div>
                            <button class="btn btn-lg btn-block padrao" type="submit">Cadastrar</button>

                </form>

            </div>

            {{-- FOOTER MODAL --}}
            <div class="modal-footer">

                {{-- BOTÃO --}}
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>

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

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
