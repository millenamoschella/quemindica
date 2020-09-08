{{-- MODAL LOGIN --}}

<div id="modalEntrar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content section-modal-login text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="close-modal-login" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL LOGIN --}}
            <h4 class="modal-title-login">Login</h4>

            {{-- CORPO MODAL LOGIN --}}
            <div class="modal-body-login">
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

                                <form action="{{ route('login') }}" method="POST" class="register-form form-login"
                                    id="register-form">
                                    @csrf
                                    <div class="row">


                                        {{-- CELULAR --}}
                                        <div class="wrap-modal-login">
                                            <input id="phone"
                                                class="input-modal-login @error('phone') is-invalid @enderror"
                                                type="tel" name="phone" placeholder="Celular" value="{{ old('phone') }}"
                                                required autocomplete="phone">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-input-modal-login"></span>
                                            <span class="modal-login-icone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- SENHA --}}
                                        <div class="wrap-modal-login">
                                            <input id="password"
                                                class="input-modal-login @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="Senha" required
                                                autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-input-modal-login"></span>
                                            <span class="modal-login-icone">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- LEMBRAR LOGIN
                                        --}}
                                        <div class="form-group row remember-me">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Lembrar login') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- BOTÃO --}}
                                        <div class="col-12 div-btn-login">
                                            <button class="btn-login">
                                                {{ __('Entar') }}
                                            </button>

                                            {{-- ESQUECI A SENHA
                                            --}}
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


{{-- MODAL REGISTRAR --}}

<div id="modalRegistrar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content section-register text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="close-modal-register" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL REGISTRAR --}}
            <h4 class="modal-title-register">Registrar</h4>

            {{-- CORPO MODAL REGISTRAR --}}
            <div class="modal-body-register">
                <div class="main">
                    <div class="container">

                        <div class="signup-content">




                            {{-- FORMULÁRIO --}}
                            <div class="signup-form">

                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                                    class="register-form" id="register-form" class="">
                                    @csrf

                                    {{-- CODIGO --}}
                                    <div class="wrap-register-modal">
                                        <small>
                                            <label class="text-center" for="codigo">
                                                Já foi indicado? Digite o código que recebeu por SMS:
                                            </label>
                                        </small>
                                        <div class="wrap-register-modal">
                                            <input class="input-modal-register" type="text" name="codigo"
                                                placeholder="000000">
                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-hashtag" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>

                                    {{-- IMAGEM --}}
                                    <div class="banner-register">
                                        <img src="{{ asset('../imagens/institucional/register.svg') }}"
                                            class="img-fluid" alt="Banner Suporte">
                                    </div>

                                    <div class="row">

                                        {{-- NOME --}}
                                        <div class="wrap-register-modal">
                                            <input id="name" type="text"
                                                class="input-modal-register form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" placeholder="Nome" required
                                                autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- SOBRENOME --}}
                                        <div class="wrap-register-modal">
                                            <input id="lastname" type="text" class="input-modal-register form-control "
                                                name="lastname" required autocomplete="lastname" autofocus
                                                value="{{ old('lastname') }}" placeholder="Sobrenome">


                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- USERNAME --}}
                                        <div class="wrap-register-modal">
                                            <input id="username" type="text" class="input-modal-register form-control"
                                                name="username" required autocomplete="username" autofocus
                                                value="{{ old('username') }}" placeholder="username" onkeyup="return forceLower(this)>


                                            <span class=" focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- EMAIL --}}
                                        <div class="wrap-register-modal">
                                            <input id="email" type="email"
                                                class="form-control input-modal-register @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="E-mail">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- CELULAR --}}
                                        <div class="wrap-register-modal">

                                            <input id="phone" type="tel"
                                                class="form-control input-modal-register @error('phone') is-invalid @enderror"
                                                name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                                placeholder="Celular">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>

                                        </div>


                                        {{-- SENHA --}}
                                        <div class="wrap-register-modal">
                                            <input id="password" type="password"
                                                class="form-control input-modal-register @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Senha">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- CONFIRMAR SENHA
                                        --}}
                                        <div class="wrap-register-modal">
                                            <input id="password-confirm" type="password"
                                                class="form-control input-modal-register" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="Confirme sua senha">

                                            <span class="focus-input-modal-register"></span>
                                            <span class="modal-register-icone">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{--CHECKBOX
                                        TERMOS--}}

                                        {{-- BOTÃO CADASTRAR
                                        --}}
                                        <div class="container">

                                            <div class="row py-3">
                                                <div class="col-12 terms-section">

                                                    <input type="radio" id="terms" name="terms" value="accept" required>
                                                    <label for="terms">Lí e aceito os termos e condições.</label><br>

                                                    <a href="{{ route('politicas-termos') }}" target="_blank"
                                                        class="register-terms">
                                                        Política de privacidade
                                                    </a>

                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3 mb-3">
                                                <button type="submit" class="modal-register-btn">
                                                    {{ __('Cadastrar') }}
                                                </button>
                                            </div>

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
