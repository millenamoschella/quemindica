@extends('layouts.layout-menuoff')

@section('content')

    <div class="container mb-5 mt-5 py-5">


        <form class="text-center border border-light p-5" action="{{ url('store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf


            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Foto</strong>
                        <input type="file" name="photo">
                    </div>
                </div>

                <!-- Botão -->
                <button class="btn btn-block" type="submit">Criar</button>
        </form>


    </div>

@endsection
