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

                                <form action="{{ route('login') }}" method="POST" class="register-form"
                                    id="register-form">
                                    @csrf
                                    <div class="row">



                                        {{-- EMAIL --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="email"
                                                class="area-input-modal-suporte @error('email') is-invalid @enderror"
                                                type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                                required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>

                                        </div>


                                        {{-- SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="password"
                                                class="area-input-modal-suporte @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="Senha" required
                                                autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>

                                        </div>


                                        {{-- LEMBRAR LOGIN
                                        --}}
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Lembrar login') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- ESQUECI A SENHA
                                        --}}

                                        {{-- BOTÃO --}}
                                        <div class="col-12 container-botao-modal-suporte">
                                            <button class="btn-formulario-modal-suporte">
                                                {{ __('Entar') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu a sua senha?') }}
                                                </a>
                                            @endif
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
                                            <input class="area-input-modal-suporte" type="email" name="email"
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
