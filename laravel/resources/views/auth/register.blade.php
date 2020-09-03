@extends('layouts.layout-menuoff')

@section('content')
    <div class="container registrar">
        <div class="card secao-config-user">

            <h4 class="text-center">Registrar</h4>

            <div class="card-body">

                {{-- FORMULÁRIO --}}
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="register-form"
                    id="register-form" class="">
                    @csrf

                    {{-- CODIGO --}}
                    <div class="col-6 m-auto">
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
                    <div class="signup-img text-center">
                        <img src="{{ asset('../imagens/institucional/register.svg') }}" class="img-fluid"
                            alt="Banner Suporte" style="width: 600px">
                    </div>

                    <div class="signup-form col-12">

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

                        {{-- SOBRENOME --}}
                        <div class="form-group row">
                            <label for="lastname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="area-input-modal-suporte form-control "
                                    name="lastname" required autocomplete="lastname" autofocus value="{{ old('lastname') }}"
                                    placeholder="">


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- EMAIL --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

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

                        {{-- SENHA --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

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
                                <input id="password-confirm" type="password" class="form-control area-input-modal-suporte"
                                    name="password_confirmation" required autocomplete="new-password">

                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                        </div>

                        {{-- CPF --}}
                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text"
                                    class="form-control area-input-modal-suporte @error('cpf') is-invalid @enderror"
                                    name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                                @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- CELULAR --}}
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

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
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- CEP --}}
                        <div class="form-group row">
                            <label for="born_date" class="col-md-4 col-form-label text-md-right">{{ __('Cep') }}</label>

                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control area-input-modal-suporte"
                                    name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code">

                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fas fa-search-location" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- RUA --}}
                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Rua') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control area-input-modal-suporte" name="street"
                                    value="{{ old('street') }}" required autocomplete="street">


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-road" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- BAIRRO --}}
                        <div class="form-group row">
                            <label for="neighborhood"
                                class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control area-input-modal-suporte"
                                    name="neighborhood" value="{{ old('neighborhood') }}" required
                                    autocomplete="neighborhood">


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- CIDADE --}}
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control area-input-modal-suporte" name="city"
                                    value="{{ old('city') }}" required autocomplete="city">


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fas fa-city" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- ESTADO --}}
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control area-input-modal-suporte" name="state"
                                    value="{{ old('state') }}" required autocomplete="state">


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fas fa-city" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- DATA DE NASCIMENTO --}}
                        <div class="form-group row">
                            <label for="born_date"
                                class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="born_date" type="date" class="form-control area-input-modal-suporte"
                                    name="born_date" value="{{ old('born_date') }}" required autocomplete="born_date">

                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- FOTO --}}
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control area-input-modal-suporte" name="photo"
                                    value="{{ old('photo') }}" required autocomplete="photo">

                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-photo" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{-- SOBRE --}}
                        <div class="form-group row">
                            <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('Sobre') }}</label>

                            <div class="col-md-6">

                                <textarea class="form-control area-input-modal-suporte" name="about" id="about" cols="30"
                                    rows="10" value="{{ old('about') }}"></textarea>


                                <span class="focus-area-input-modal-suporte"></span>
                                <span class="icone-input-modal-suporte">
                                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        {{--CHECKBOX
                        TERMOS--}}


                        {{-- BOTÃO CADASTRAR --}}
                        <div class="form-group row mb-0 text-center">

                            <div class="col-md-6 offset-md-4 text-center">
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


@endsection
