 @extends('layouts.layout-menulogado')


 @section('content')


     {{-- SEÇÃO FOTO E NOME DO USUÁRIO --}}
     <section class="py-5 mt-5 secao-foto-user-perfil">
         <div class="info-usuario-perfil">

             {{-- FOTO USUÁRIO --}}
             <div class="foto-perfil-user">

                 <a href="#" data-toggle="modal" data-target="#modalFoto">
                     <img src="{{ asset('imagens/minhaConta/fotoUsuario.jpg') }}" alt="Foto perfil usuário">
                 </a>

             </div>

             {{-- NOME USUÁRIO --}}
             <div class="stars">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o" aria-hidden="true"></i>
             </div>

             <h1 class="nome-usuario-perfil">Shyrles Monteiro</h1>


             {{-- BOTÕES ADICIONAR E MENSAGEM --}}
             <div class="adicionar-mensagem-perfil">
                 <button class="adicionar">Adicionar</button>
                 <button class="mensagem">Mensagem</button>
             </div>

         </div>
     </section>







     {{-- MODAL FOTO PERFIL--}}

     <div id="modalFoto" class="modal fade" tabindex="-1" role="dialog">
         <div class="modal-dialog ">
             <div class="modal-content modal-suporte text-center">

                 {{-- BOTÃO FECHAR --}}

                 <div class="fechar">
                     <button type="button" class="btn-fechar-suporte" data-dismiss="modal">
                         <i class="fa fa-times" aria-hidden="true"></i>
                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                     </button>
                 </div>

                 {{-- TÍTULO MODAL FOTO --}}
                 <h4 class="modal-title-suporte">Foto do Usuário</h4>

                 {{-- CORPO MODAL FOTO --}}
                 <div class="modal-body">
                     <div class="main">
                         <div class="container">

                             <div class="signup-content">


                                 {{-- FORMULÁRIO --}}
                                 <div class="signup-form">








                                     <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data"
                                         class="register-form" id="register-form">
                                         @csrf

                                         <div class="row">

                                             {{-- UPLOAD --}}

                                             {{-- ÁREA UPLOAD DE IMAGEM
                                             --}}
                                             <div class="image-area mt-4">
                                                 <img id="resultadoFotoUser" src="#" alt=""
                                                     class="img-fluid rounded shadow-sm mx-auto d-block">
                                             </div>

                                             {{-- INPUT UPLOAD DE IMAGEM
                                             --}}
                                             <div class="input-group mt-5 px-2 py-2 input-upload">

                                                 <input id="upload" type="file" onchange="readURL(this);"
                                                     class="form-control border-0">

                                                 <label id="upload-label" for="upload"
                                                     class="font-weight-light text-muted">Escolha uma foto</label>
                                                 <div class="input-group-append">

                                                     <label for="upload" class="btn btn-light m-0 px-4"> <i
                                                             class="fa fa-cloud-upload mr-2 text-muted"></i>
                                                         <small
                                                             class="text-uppercase font-weight-bold text-muted">Carregar</small>
                                                     </label>
                                                 </div>
                                             </div>


                                             {{-- BOTÃO --}}
                                             <div class="col-12 container-botao-modal-suporte">
                                                 <button type="submit" class="btn-formulario-modal-suporte">
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




     <script>
         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();

                 reader.onload = function(e) {
                     $('#resultadoFotoUser')
                         .attr('src', e.target.result);
                 };
                 reader.readAsDataURL(input.files[0]);
             }
         }

         $(function() {
             $('#upload').on('change', function() {
                 readURL(input);
             });
         });

         /*  ==========================================
             MOSTRAR FOTO
         * ========================================== */
         var input = document.getElementById('upload');
         var infoArea = document.getElementById('upload-label');

         input.addEventListener('change', showFileName);

         function showFileName(event) {
             var input = event.srcElement;
             var fileName = input.files[0].name;
             infoArea.textContent = 'File name: ' + fileName;
         }

     </script>



 @endsection
