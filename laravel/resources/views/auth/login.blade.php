@extends('layouts.layout-menuoff')

@section('content')

    <div class="container-fluid section-modal-login-page">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">

                {{-- LOGO --}}
                <span class="logo-quemindica-login">
                    <span><img src="{{ asset('../../../public/imagens/logo/logo.png') }}" alt=""></span>
                </span>

            </div>

            <div class="col-md-8 col-xs-12 col-sm-12 page-login-form ">
                <div class="container-fluid">

                    {{-- TÍTULO FORMULÁRIO --}}
                    <div class="row">
                        <h2 class="login-page-title">Log In</h2>
                    </div>


                    <div class="row">

                        {{-- FORMULÁRIO --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- CELULAR --}}
                            <div class="wrap-modal-login-page">
                                <input id="phone" class="input-login-page @error('phone') is-invalid @enderror" type="tel"
                                    name="phone" placeholder="Celular" value="{{ old('phone') }}" required
                                    autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <span class="focus-icone-login"></span>
                                <span class="icone-login-page">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>

                            </div>

                            {{-- SENHA --}}
                            <div class="wrap-modal-login-page">
                                <input id="password" class="input-login-page @error('password') is-invalid @enderror"
                                    type="password" name="password" placeholder="Senha" required
                                    autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <span class="focus-icone-login"></span>
                                <span class="icone-login-page">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>

                            </div>


                            {{-- LEMBRAR DE MIM --}}
                            <div class="form-group row remember-me-login">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar de mim ❤') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{-- BOTÃO --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn login-page-btn">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn login-page-btn" href="{{ route('password.request') }}">
                                            {{ __('Esqueci minha senha') }}
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













@endsection
