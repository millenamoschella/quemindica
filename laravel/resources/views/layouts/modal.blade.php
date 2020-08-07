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
                    <label for="inputEmail" class="sr-only">Endereço de email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required="">
                    <br>

                    {{-- SENHA --}}
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar de mim
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

    {{-- INÍCIO MODAL SUPORTE --}}
    <div class="modal-dialog">
        <div class="modal-content">

            {{-- HEADER MODAL SUPORTE --}}
            <div class="modal-header">
                <h4 class="modal-title">Suporte</h4><!-- Título -->
            </div>

            {{-- CORPO MODAL SUPORTE --}}
            <div class="modal-body">
                <div class="main">
                    <div class="container">
                        <div class="signup-content">

                            {{-- IMAGEM --}}
                            <div class="signup-img">
                                <img src="{{ asset('../imagens/institucional/banner02.jpg') }}" class="img-fluid"
                                    alt="Banner Suporte">
                            </div>

                            {{-- FORMULÁRIO --}}
                            <div class="signup-form">

                                <form action="suporte.php" method="POST" class="register-form" id="register-form">
                                    <div class="row">

                                        {{-- NOME --}}
                                        <div class="col">
                                            <label for="nome">Nome</label>
                                            <input type="text" value="" name="nome" id="nome" class="form-control"
                                                placeholder="Nome">
                                        </div>

                                        {{-- SOBRENOME
                                        --}}
                                        <div class="col">
                                            <label for="sobrenome">Sobrenome</label>
                                            <input type="text" value="" name="sobrenome" id="sobrenome"
                                                class="form-control" placeholder="Sobrenome">
                                        </div>

                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="text" value="" name="email" id="email"
                                            placeholder="@.com">
                                    </div>

                                    {{-- TEXTAREA --}}
                                    <div class="form-group purple-border">
                                        <label for="exampleFormControlTextarea4">Mensagem</label>
                                        <textarea class="form-control" name="mensagem" id="email" rows="3">
                                            </textarea>
                                    </div>

                                    {{-- BOTÃO --}}
                                    <div class="input-group-append" id="enviar">
                                        <button class="btn btn-md btn-dark m-0 px-3" type="button" value=""
                                            class="submit" name="enviar" id="enviar">Enviar</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- FOOTER MODAL SUPORTE --}}
            <div class="modal-footer">
                {{-- BOTÃO FECHAR --}}
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

        </div>
    </div>

</div>
