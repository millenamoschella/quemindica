@extends('layouts.layout-menulogado')


@section('content')


    {{-- SEÇÃO AMIGOS --}}
    <div class="secao-amigos">

        <h1 class="text-center">Seguindo</h1>

        <div class="row">

            {{-- USUÁRIO --}}

            @foreach ($users as $user)


                <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="card-amigo">
                        <div class="card-front">

                            {{-- EXCLUIR OU BLOQUEAR --}}
                            <div class="card-links">
                                <span><a href=""><i class="fas fa-plus" aria-hidden="true" title="Seguir"></i></a></span>
                                <span><a href=""><i class="fa fa-ban" aria-hidden="true" title="Bloquear"></i></a></span>
                            </div>

                            {{-- INFOS AMIGO --}}
                            <div class="card-user">

                                {{-- FOTO AMIGO --}}
                                <a href="#" data-toggle="modal" data-target="#modalFoto">
                                    @if ($user->photo == null)
                                        <img src="{{ asset('imagens/institucional/user-default.jpg') }}" alt="foto default"
                                            class="">
                                    @else
                                        <img src="{{ asset('uploads/photos/' . $user->photo) }}" alt="Foto perfil usuário"
                                            class="">
                                    @endif
                                </a>

                                {{-- NOME AMIGO E USERNAME --}}
                                <h5>{{ $user->name . ' ' . $user->lastname }}</h5>

                                <i><a href="{{ route('user', $user->username) }}">
                                        {{ '@' . $user->username }} </a></i>

                                {{-- INFOS --}}
                                <div class="user-info">
                                    <span>13<b>Indicações</b></span>
                                    <span>65<b>Pontos</b></span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>


@endsection
