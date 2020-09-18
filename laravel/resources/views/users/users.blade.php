@extends('layouts.layout')

@section('title', 'Usuários')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('/css/users.css') }}">
@endsection

@section('header')
    @include('layouts.layout-menulogado')
@endsection


@section('content')


    {{-- SEÇÃO AMIGOS --}}
    <div class="secao-amigos">

        <h1 class="text-center">Usuários</h1>

        <div class="row section-users-card">

            {{-- USUÁRIO --}}

            @foreach ($users as $user)


                <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="card-amigo">
                        <div class="card-front">

                            {{-- EXCLUIR OU BLOQUEAR --}}

                            {{-- <div class="card-links">

                                @if ($user->id != Auth::user()->id)

                                    @if (is_null($follower))
                                        <a href="{{ route('follow', $user->id) }}" data-title="Seguir">
                                            <i class="fas fa-plus" aria-hidden="true"></i>
                                        </a>
                                        @else

                                        <a href="{{ route('unfollow', $user->id) }}" data-title="Parar de seguir">
                                            <i class="fas fa-minus" aria-hidden="true"></i>
                                        </a>

                                    @endif 

                                @endif

                                <span>
                                    <a href="" data-title="Bloquear"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </span>

                            </div> --}}


                            {{-- INFOS AMIGO --}}
                            <div class="card-user">

                                <div class="users-photo">
                                    {{-- FOTO AMIGO --}}
                                    <a href="{{ route('user', $user->username) }}">
                                        @if ($user->photo == null)
                                            <img src="{{ asset('imagens/institucional/user-default.jpg') }}" alt="foto default"
                                            class="">
                                        @else
                                            <img src="{{ asset('uploads/photos/' . $user->photo) }}" alt="Foto perfil usuário"
                                            class="">
                                        @endif
                                    </a>
                                </div>

                                {{-- NOME AMIGO E USERNAME --}}
                                <h5>{{ $user->name . ' ' . $user->lastname }}</h5>

                                <i><a href="{{ route('user', $user->username) }}">
                                        {{ '@' . $user->username }} </a></i>

                                {{-- INFOS --}}
                                {{-- <div class="user-info">
                                    <span>13<b>Indicações</b></span>
                                    <span>65<b>Pontos</b></span>
                                </div> --}}

                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>


@endsection

@section('footer')
    @include('layouts.footer-logado')
@endsection