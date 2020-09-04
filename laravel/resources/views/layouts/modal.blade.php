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



                                        <!-- {{-- EMAIL --}}
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

                                        </div> -->

                                        {{-- CELULAR --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="phone"
                                                class="area-input-modal-suporte @error('phone') is-invalid @enderror"
                                                type="tel" name="phone" placeholder="Celular" value="{{ old('phone') }}"
                                                required autocomplete="phone">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
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
                                        <div class="form-group row lembrar-login">
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
                                        <div class="col-12 container-botao-modal-login">
                                            <button class="btn-formulario-modal-login">
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
                            <div class="signup-form">

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="register-form"
                            id="register-form" class="">
                                    @csrf

                                    {{-- CODIGO --}}
                                <div class="wrap-area-input-modal-suporte-modal-suporte">
                                    <small>
                                        <label class="text-center" for="codigo">
                                            Já foi indicado? Digite o código que recebeu por SMS:
                                        </label>
                                    </small>
                                    <div class="wrap-area-input-modal-suporte-modal-suporte">
                                        <input class="area-input-modal-suporte" type="text" name="codigo" placeholder="000000">
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
                                
                                    <div class="row">

                                        {{-- NOME --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="name" type="text" class="area-input-modal-suporte form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- SOBRENOME --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="lastname" type="text" class="area-input-modal-suporte form-control "
                                            name="lastname" required autocomplete="lastname" autofocus value="{{ old('lastname') }}"
                                            placeholder="Sobrenome">


                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- USERNAME --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="username" type="text" class="area-input-modal-suporte form-control"
                                                name="username" required autocomplete="username" autofocus value="{{ old('username') }}"
                                                placeholder="username" onkeyup="return forceLower(this)>


                                            <span class=" focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{-- EMAIL --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                                <input id="email" type="email"
                                            class="form-control area-input-modal-suporte @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

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

                                        {{-- CELULAR --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                        
                                            <input id="phone" type="tel"
                                                class="form-control area-input-modal-suporte @error('phone') is-invalid @enderror"
                                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Celular">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>

                                        </div>


                                        {{-- SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="password" type="password"
                                                class="form-control area-input-modal-suporte @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password" placeholder="Senha">

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

                                        {{-- CONFIRMAR SENHA --}}
                                        <div class="wrap-area-input-modal-suporte-modal-suporte">
                                            <input id="password-confirm" type="password" class="form-control area-input-modal-suporte"
                                             name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">

                                            <span class="focus-area-input-modal-suporte"></span>
                                            <span class="icone-input-modal-suporte">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>

                                        </div>

                                        {{--CHECKBOX TERMOS--}}


                                        {{-- BOTÃO CADASTRAR --}}
                                        <div class="form-group row mb-0">

                                            <div class="col-12">
                                                <small class="d-block">
                                                    <input type="radio" id="terms" name="terms" value="accept" required>
                                                    <label for="terms">Lí e aceito os termos e condições.</label><br>

                                                    <a href="{{ route('politicas-termos') }}" target="_blank"
                                                        class="termos-politicas-register">
                                                        Política de privacidade
                                                    </a>

                                                </small>
                                            </div>

                                            <div class="col-md-6 offset-md-4 mt-3">
                                                <button type="submit" class="btn-formulario-modal-suporte">
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
