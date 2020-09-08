@extends('layouts.layout-menulogado')


@section('content')

    <div class="edit">
        <div class="card container mt-5 mb-5 edit-section">
            <form method="POST" action="{{ url('updateProfile' . $user->id) }}" enctype="multipart/form-data"
                class="register-form" id="register-form">
                @csrf

                <div class="row">

                    {{-- FOTO USUÁRIO --}}
                    <div class="col-md-3 border-right user-edit-photo">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <a href="#" data-toggle="modal" data-target="#modalFoto">
                                @if (Auth::user()->photo == null)
                                    <img src="{{ asset('imagens/institucional/usuario.png') }}" alt="foto default"
                                        class="use-edit-photo">
                                @else
                                    <img src="{{ asset('uploads/photos/' . Auth::user()->photo) }}"
                                        alt="Foto perfil usuário" class="use-edit-photo">
                                @endif
                            </a>
                        </div>
                    </div>


                    {{-- CAMPOS FORMULÁRIO --}}
                    <div class="col-md-8">
                        <div class="p-3 py-5">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right title-edit">Editar perfil</h4>
                            </div>

                            {{-- LINHA 1 --}}
                            <div class="row mt-2">

                                {{-- NOME --}}
                                <div class="col-md-6">
                                    <input id="name" type="text" class="area-input-edit form-control" name="name"
                                        value="{{ $user->name }}">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                {{-- SOBRENOME --}}
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="area-input-edit form-control" name="lastname"
                                        value="{{ $user->lastname }}">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 2 --}}
                            <div class="row mt-2">

                                {{-- USERNAME --}}
                                <div class="col-md-6">
                                    <input id="username" type="text" class="area-input-edit form-control" name="username"
                                        required autocomplete="username" autofocus value="{{ old('username') }}"
                                        placeholder="{{ $user->username }}" onkeyup="return forceLower(this)"
                                        disabled="disabled">

                                    <span class=" focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                {{-- EMAIL --}}
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control area-input-edit" name=" email"
                                        value="{{ old('email') }}" placeholder="{{ $user->email }}" disabled="disabled">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 3 --}}
                            <div class="row mt-2">

                                {{-- CELULAR --}}
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control area-input-edit" name="phone"
                                        value="{{ $user->phone }}" disabled="disabled">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                </div>

                                {{-- CPF --}}
                                <div class="col-md-6">
                                    <input id="cpf" type="text" class="form-control area-input-edit" name=" cpf"
                                        value="{{ $user->cpf }}" placeholder="CPF">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 4 --}}
                            <div class="row mt-2">

                                {{-- CEP --}}
                                <div class="col-md-12">
                                    <input id="zip_code" type="text" class="form-control area-input-edit" name="zip_code"
                                        value="{{ $user->zip_code }}" placeholder="CEP">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fas fa-search-location" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 5 --}}
                            <div class="row mt-2">

                                {{-- RUA --}}
                                <div class="col-md-12">
                                    <input id="street" type="text" class="form-control area-input-edit" name="street"
                                        value="{{ $user->street }}" placeholder="Rua">


                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-road" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 6 --}}
                            <div class="row mt-2">

                                {{-- BAIRRO --}}
                                <div class="col-md-12">
                                    <input id="bairro" type="text" class="form-control area-input-edit" name="neighborhood"
                                        value="{{ $user->neighborhood }}" placeholder="Bairro">


                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 7 --}}
                            <div class="row mt-2">

                                {{-- CIDADE --}}
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control area-input-edit" name="city"
                                        value="{{ $user->city }}" placeholder="Cidade">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fas fa-city" aria-hidden="true"></i>
                                    </span>
                                </div>

                                {{-- ESTADO --}}
                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control area-input-edit" name="state"
                                        value="{{ $user->state }}" placeholder="Estado">


                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fas fa-city" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            {{-- LINHA 8 --}}
                            <div class="row mt-2">

                                {{-- DATA DE NASCIMENTO --}}
                                <div class="col-md-12">
                                    <input id="born_date" type="date" class="form-control area-input-edit" name="born_date"
                                        value="{{ $user->born_date }}">

                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- LINHA 9 --}}
                            <div class="row mt-2">

                                {{-- BIO --}}
                                <div class="col-md-12 text-edit">
                                    <textarea class="form-control area-input-edit" name="about" id="about" cols="30"
                                        rows="10" value="{{ $user->about }}" placeholder="{{ $user->about }}"></textarea>


                                    <span class="focus-area-input-edit"></span>
                                    <span class="edit-icone-input">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            {{-- BOTÃO SALVAR --}}
                            <div class="col-md-6 offset-md-4 mt-3 section-btn-edit">
                                <button type="submit" class="edit-btn">
                                    {{ __('Salvar') }}
                                </button>
                            </div>

            </form>

        </div>
    </div>

    </div>

    </div>
    </div>


@endsection
