{{-- MODAL FOTO CAPA--}}

<div id="modalFotoCapa" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-cover-section text-center">

            {{-- BOTÃO FECHAR --}}

            <div class="fechar">
                <button type="button" class="close-modal-cover" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            {{-- TÍTULO MODAL FOTO --}}
            <h4 class="modal-title-cover">Foto de Capa</h4>

            {{-- CORPO MODAL FOTO --}}
            <div class="modal-body">
                <div class="main">
                    <div class="container">

                        <div class="signup-content">


                            {{-- FORMULÁRIO --}}
                            <div class="signup-form">

                                <form action="{{ route('storeCover', Auth::user()->id) }}" method="POST"
                                    enctype="multipart/form-data" class="register-form" id="register-form">
                                    @csrf
                                    <div class="row">

                                        {{-- UPLOAD --}}

                                        {{-- ÁREA UPLOAD DE IMAGEM
                                        --}}

                                        <div class="image-area mt-4">
                                            <img id="coverResult" src="#" alt=""
                                                class="img-fluid rounded shadow-sm mx-auto d-block">
                                        </div>

                                        {{-- INPUT UPLOAD DE IMAGEM
                                        --}}
                                        <div class="input-group mt-5 px-2 py-2 input-upload">
                                            <input id="upload" name="cover" value="cover" type="file"
                                                onchange="readURL(this);" class="form-control border-0">

                                            <label id="upload-label" for="upload"
                                                class="font-weight-light text-muted">Escolha uma foto</label>

                                            <div class="input-group-append">
                                                <label for="upload" class="btn btn-light m-0 px-4"> <i
                                                        class="fa fa-cloud-upload mr-2 text-muted"></i>
                                                    <small class="text-uppercase font-weight-bold text-muted">Carregar
                                                    </small>
                                                </label>
                                            </div>
                                        </div>


                                        {{-- BOTÃO --}}
                                        <div class="col-12 container-btn-modal-cover">
                                            <button class="btn-cover-modal">
                                                Salvar
                                            </button>
                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
