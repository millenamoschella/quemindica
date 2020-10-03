{{-- ESCREVER INDICAÇÃO DE PRODUTO
--}}
<form action="{{ route('product_insert') }}" method="POST" enctype="multipart/form-data" class="form-product">
    @csrf

    {{-- NOME DO PRODUTO --}}
    <div class="form-group">
        <textarea class="input-product" rows="1" placeholder="Produto" name="nome" id="nome"></textarea>
    </div>
    {{-- MARCA --}}
    <div class="form-group">
        <textarea class="input-product" rows="1" placeholder="Marca" name="marca" id="marca"></textarea>
    </div>

    {{-- SEGMENTO --}}

    <div class="form-group col-md-4 px-0">
        <label for="segments">Segmento</label>
        <select id="segments" class="input-product" name="segment_id">
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
        <textarea class="input-product" rows="1" placeholder="Preço" name="valor" id="valor"></textarea>
    </div>
    {{-- LOJA --}}
    <div class="form-group">
        <textarea class="input-product" rows="1" placeholder="Loja" name="loja" id="loja"></textarea>
    </div>


    {{-- NOTA --}}
    <label for="ratings">Avaliação:</label>
    <div id="wrapper">
        {{-- <form action="" method="post" class="form-product">
            --}}
            <p class="clasificacion">
                <input id="radio5" type="radio" name="nota" value="1">
                <label for="radio5"><i class="fas fa-star"></i></label>
                <input id="radio4" type="radio" name="nota" value="2">
                <label for="radio4"><i class="fas fa-star"></i></label>
                <input id="radio3" type="radio" name="nota" value="3">
                <label for="radio3"><i class="fas fa-star"></i></label>
                <input id="radio2" type="radio" name="nota" value="4">
                <label for="radio2"><i class="fas fa-star"></i></label>
                <input id="radio1" type="radio" name="nota" value="5">
                <label for="radio1"><i class="fas fa-star"></i></label>
            </p>
            {{-- </form> --}}
    </div>



    {{-- CONTEÚDO --}}
    <div class="form-group">
        <textarea class="input-product" rows="3" placeholder="Qual a sua avaliação?" name="conteudo"
            id="conteudo"></textarea>
    </div>


    {{-- BOTÃO POSTAR --}}
    <button class="btn float-right button-posts">
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        <span>Postar</span>
    </button>

</form>
