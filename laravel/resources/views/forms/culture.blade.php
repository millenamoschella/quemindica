 {{-- ESCREVER INDICAÇÃO DE CULTURA
 --}}
 <form action="{{ route('culture_insert') }}" method="POST" enctype="multipart/form-data">
     @csrf

     {{-- SEGMENTO --}}
     <div class="form-group col-md-4 px-0">
         <label for="cultureSegment">Segmento</label>
         <select id="cultureSegment" class="form-control" name="culture__segments_id">
             <option selected>Escolha uma opção</option>
             <option value="1">Música</option>
             <option value="2">Filme</option>
             <option value="3">Série</option>
             <option value="4">Livro</option>

         </select>
     </div>

     {{-- PLATAFORMA --}}
     <div class="form-group col-md-4 px-0">
         <label for="plataforma">Plataforma</label>
         <select id="plataforma" class="form-control" name="plataforma">
             <option selected>Escolha uma opção</option>
             <option value="Netflix">Netflix</option>
             <option value="HBO GO">HBO GO</option>
             <option value="Prime Video">Prime Video</option>
             <option value="E-book">Kindle (e-book)</option>
             <option value="Livro">Livro de papel</option>
             <option value="Spotify">Spotify</option>
             <option value="Deezer">Deezer</option>
             <option>Outros</option>
         </select>
     </div>

     {{-- TITULO --}}
     <div class="form-group">
         <textarea class="form-control" rows="1" placeholder="Título" name="titulo" id="titulo"></textarea>
     </div>

     {{-- COMENTÁRIO --}}
     <div class="form-group">
         <textarea class="form-control" rows="3" placeholder="Qual a sua avaliação?" name="conteudo"
             id="conteudo"></textarea>
     </div>

     {{-- NOTA --}}
     {{-- <label for="">Avaliação:</label>
     <div class="stars-rating">
         <input type="radio" id="cm_star-empty" name="fb" value="" checked />
         <label for="cm_star-1"><i class="fas fa-star"></i></label>
         <input type="radio" id="cm_star-1" name="fb" value="1" />
         <label for="cm_star-2"><i class="fas fa-star"></i></label>
         <input type="radio" id="cm_star-2" name="fb" value="2" />
         <label for="cm_star-3"><i class="fas fa-star"></i></label>
         <input type="radio" id="cm_star-3" name="fb" value="3" />
         <label for="cm_star-4"><i class="fas fa-star"></i></label>
         <input type="radio" id="cm_star-4" name="fb" value="4" />
         <label for="cm_star-5"><i class="fas fa-star"></i></label>
         <input type="radio" id="cm_star-5" name="fb" value="5" />
     </div> --}}

     {{-- BOTÃO POSTAR --}}
     <button class="btn float-right button-posts">
         <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
         <span>Postar</span>
     </button>

 </form>
