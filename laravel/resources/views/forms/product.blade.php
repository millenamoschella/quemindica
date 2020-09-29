{{-- ESCREVER INDICAÇÃO DE PRODUTO
--}}
<form action="{{ route('product_insert') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- NOME DO PRODUTO --}}
    <div class="form-group">
        <textarea class="form-control" rows="1" placeholder="Produto" name="nome" id="nome"></textarea>
    </div>
    {{-- MARCA --}}
    <div class="form-group">
        <textarea class="form-control" rows="1" placeholder="Marca" name="marca" id="marca"></textarea>
    </div>

    {{-- SEGMENTO --}}

    <div class="form-group col-md-4 px-0">
        <label for="segments">Segmento</label>
        <select id="segments" class="form-control" name="segment_id">
            <option selected>Escolha uma opção</option>
            <option value="1">Assistência Técnica</option>
            <option value="2">Educação</option>
            <option value="3">Design</option>
            <option value="4">Eventos</option>
            <option value="5">Moda</option>
            <option value="6">Cosméticos</option>
            <option value="7">Reformas</option>
            <option value="8">Saúde</option>
            <option value="9">Serviços domésticos</option>
            <option value="10">Consertos</option>
            <option value="11">Outros</option>
        </select>
    </div>

    {{-- PREÇO --}}
    <div class="form-group">
        <textarea class="form-control" rows="1" placeholder="Preço" name="valor" id="valor"></textarea>
    </div>
    {{-- LOJA --}}
    <div class="form-group">
        <textarea class="form-control" rows="1" placeholder="Loja" name="loja" id="loja"></textarea>
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
    {{-- CONTEÚDO --}}
    <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="Qual a sua avaliação?" name="conteudo"
            id="conteudo"></textarea>
    </div>

    {{-- BOTÕES POSTAR --}}
    <div class="form-group icones-postagem">

        {{-- ÍCONES PARA MARCAR UMA PESSOA, ADD IMAGEM OU
        LOCAL A POSTAGEM --}}
        <button class="btn icon-post"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
        <button class="btn icon-post"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
        <button class="btn icon-post"><i class="fa fa-user" aria-hidden="true"></i></button>

        {{-- POSTAR --}}
        <button class="btn float-right button-posts">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            <span>Postar</span>
        </button>

    </div>

</form>
