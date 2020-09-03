@extends('layouts.layout-menulogado')

@section('content')


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <div class="container">
                    <strong>Foto</strong>
                    <img src="{{ asset('public/imagens/minhaConta' . $photo->foto) }}" alt="Foto" height="600"
                        width="600px">

                </div>

            </div>

        </div>

    </div>
