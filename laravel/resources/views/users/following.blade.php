@extends('layouts.layout')

@section('title', 'Seguindo')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/following.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menulogado')
@endsection



@section('content')


    {{-- SEÇÃO AMIGOS --}}
    <div class="secao-amigos">

        <h1 class="text-center">Seguindo</h1>

        <div class="row">

            {{-- PESSOA SEGUIDAS --}}

            @if (!$user->followers->count())
                <div class="container text-center default-message-follow-page">
                    <p>Você ainda não está seguindo nenhum usuário</p>
                </div>
            @else

                @foreach ($user->followers as $follower)

                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="card-amigo">
                            <div class="card-front">


                                {{-- EXCLUIR OU BLOQUEAR --}}

                                <div class="card-links">

                                    {{-- SEGUIR AMIGO --}}

                                    {{-- @if ($user->id != Auth::user()->id)

                                        @if (is_null($follower))
                                            <a href="{{ route('follow', $user->id) }}" data-title="Seguir">
                                                <i class="fas fa-plus" aria-hidden="true"></i>
                                            </a>
                                            @else

                                            <a href="{{ route('unfollow', $user->id) }}" data-title="Parar de seguir">
                                                <i class="fas fa-minus" aria-hidden="true"></i>
                                            </a>

                                        @endif

                                    @endif --}}

                                    {{-- BLOQUEAR --}}
                                    <span>
                                        <a href="" data-title="Bloquear"><i class="fa fa-ban" aria-hidden="true"></i>
                                        </a>
                                    </span>

                                </div>

                                {{-- INFOS AMIGO --}}
                                <div class="card-user">

                                    {{-- FOTO AMIGO --}}
                                    <a href="{{ route('user', $follower->username) }}">
                                        @if ($follower->photo == null)
                                            <img src="{{ asset('imagens/institucional/user-default.jpg') }}"
                                                alt="foto default" class="">
                                        @else
                                            <img src="{{ asset('uploads/photos/' . $follower->photo) }}"
                                                alt="Foto perfil usuário" class="">
                                        @endif
                                    </a>

                                    {{-- NOME AMIGO E USERNAME
                                    --}}
                                    <h5>{{ $follower->name . ' ' . $follower->lastname }}</h5>

                                    <i><a href="{{ route('user', $user->username) }}">
                                            {{ '@' . $follower->username }}
                                        </a></i>

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

            @endif

        </div>

    </div>


@endsection

@section('footer')
    @include('layouts.footer-logado')
@endsection
