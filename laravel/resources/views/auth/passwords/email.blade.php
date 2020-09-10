@extends('layouts.layout-menuoff')

@section('content')

    <div class="section-reset-password">

        <div class="reset-page">
            <div class="form">

                <h3 class="card-title text-center reset-title">Modificar Senha</h3>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- FORMULÁRIO --}}
                <form method="POST" action="{{ route('password.email') }}" class="reset-form">
                    @csrf

                    <div class="reset">

                        {{-- TEXTO --}}
                        <label for="mensagem" class="message">
                            Digite seu endereço de e-mail ou celular e enviaremos um link para redefinir sua senha.
                        </label>

                        {{-- EMAIL --}}
                        <div class="wrap-input-icone">
                            <input id="email" type="email" class="input-password @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email">

                            {{-- MENSAGEM DE ERRO --}}
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            {{-- ÍCONES --}}
                            <span class="focus-icone-rest"></span>
                            <span class="icone-reset">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                        </div>

                        {{-- CELULAR --}}
                        <div class="wrap-input-icone">
                            <input id="phone" type="phone" class="input-password @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                placeholder="celular">

                            {{-- MENSAGEM DE ERRO --}}
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            {{-- ÍCONES --}}
                            <span class="focus-icone-rest"></span>
                            <span class="icone-reset">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                        </div>

                        {{-- BOTÃO --}}
                        <button type="submit" class="btn reset-password-btn">Enviar</button>

                </form>

            </div>
        </div>

    </div>


@endsection
