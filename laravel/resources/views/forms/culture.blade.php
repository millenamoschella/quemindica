{{-- ESCREVER INDICAÇÃO DE CULTURA
--}}
<form action="{{ route('culture_insert') }}" method="POST" enctype="multipart/form-data" class="form-culture">
    @csrf

    {{-- SEGMENTO --}}
    <div class="form-group col-md-4 px-0">
        <label for="cultureSegment">Segmento</label>
        <select id="cultureSegment" class="input-culture" name="culture__segments_id">
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
        <select id="plataforma" class="input-culture" name="plataforma">
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
        <textarea class="input-culture" rows="1" placeholder="Título" name="titulo" id="titulo"></textarea>
    </div>

    {{-- NOTA --}}
    <label for="ratings" class="label-culture-star">Avaliação:</label>
    <div class="rating">
        <input type="radio" class="rating-input" id="rating-5" name="nota" value="5">
        <label for="rating-5" class="rating-star"><i class="fa fa-star"></i></label>
        <input type="radio" class="rating-input" id="rating-4" name="nota" value="4">
        <label for="rating-4" class="rating-star"><i class="fa fa-star"></i></label>
        <input type="radio" class="rating-input" id="rating-3" name="nota" value="3">
        <label for="rating-3" class="rating-star"><i class="fa fa-star"></i></label>
        <input type="radio" class="rating-input" id="rating-2" name="nota" value="2">
        <label for="rating-2" class="rating-star"><i class="fa fa-star"></i></label>
        <input type="radio" class="rating-input" id="rating-1" name="nota" value="1">
        <label for="rating-1" class="rating-star"><i class="fa fa-star"></i></label>
    </div>

    {{-- COMENTÁRIO --}}
    <div class="form-group">
        <textarea class="input-culture" rows="3" placeholder="Qual a sua avaliação?" name="conteudo"
            id="conteudo"></textarea>
    </div>


    {{-- BOTÃO POSTAR --}}
    <button class="btn float-right button-posts">
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        <span>Postar</span>
    </button>

</form>
