@extends('layouts.layout-menuoff')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <h4 class="">Registrar</h4>

                    <div class="card-body">

                        {{-- FORMULÁRIO --}}
                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf

                            {{-- CODIGO --}}
                            <div class="w-100">
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


                            <div class="signup-form">
                                {{-- NOME --}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="area-input-modal-suporte form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                </div>

                                {{-- EMAIL --}}
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control area-input-modal-suporte @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                </div>

                                {{-- CELULAR --}}
                                <div class="form-group row">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel"
                                            class="form-control area-input-modal-suporte @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <span class="focus-area-input-modal-suporte"></span>
                                        <span class="icone-input-modal-suporte">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>

                                {{-- SENHA --}}
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control area-input-modal-suporte @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">

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
                                </div>

                                {{-- CONFIRMAR SENHA --}}
                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password"
                                            class="form-control area-input-modal-suporte" name="password_confirmation"
                                            required autocomplete="new-password">

                                        <span class="focus-area-input-modal-suporte"></span>
                                        <span class="icone-input-modal-suporte">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                </div>

                                {{--CHECKBOX
                                TERMOS--}}

                                <div class="mb-3 col-12">
                                    <small class="d-block">
                                        <input type="radio" id="terms" name="terms" value="accept">
                                        <label for="terms">Lí e aceito os termos e condições.</label><br>
                                        <a href="{{ route('politicas-termos') }}" target="_blank">Política de
                                            privacidade</a>
                                    </small><br>
                                </div>

                                {{-- BOTÃO CADASTRAR --}}
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
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

@endsection
