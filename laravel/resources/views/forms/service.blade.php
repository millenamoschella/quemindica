{{-- ESCREVER INDICAÇÃO DE SERVIÇO
--}}
<form action="{{ route('service_insert') }}" method="POST" enctype="multipart/form-data" class="form-service">
    @csrf

    {{-- TÍTULO DE SERVIÇO
    --}}
    <div class="form-group">
        <input type="text" class="input-service" rows="1" placeholder="Serviço Prestado" name="servico" id="service">
    </div>

    {{-- NOME PRESTADOR --}}
    <div class="form-group">
        <input id="name" type="text" class=" input-service @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" id="txtEmpName"
            onkeypress="return AvoidSpace(event)">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    {{-- Celular --}}
    <div class="form-group">
        <input id="phone" type="tel" class=" input-service @error('phone') is-invalid @enderror" name="phone"
            value="{{ old('phone') }}" required autocomplete="phone" placeholder="Celular">

        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    {{-- Valor --}}
    <div class="form-group">
        <input type="number" class=" input-service" rows="1" placeholder="Valor" name="valor" id="valor">
    </div>

    {{-- Email --}}
    <div class="form-group">

        <input type="email" class=" input-email-service input-service @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Email" id=" txtEmpName"
            onkeypress="return AvoidSpace(event)" onchange="this.value = this.value.toUpperCase();">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    {{-- Cidade --}}
    <div class="form-group">
        <input type="text" class=" input-service" rows="1" placeholder="Cidade/local" name="local" id="local">
    </div>

    {{-- FOTO SERVIÇO --}}
    <div class="form-group">
        <input type="file" class="photo" name="photo" value="photo">
    </div>


    {{-- SEGMENTO --}}

    <div class="form-group col-md-4 px-0">
        <label for="segments">Segmento</label>
        <select id="segments" class="input-service segments-options" name="segment_id">
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

    {{-- NOTA --}}
    <label for="ratings">Avaliação:</label>
    <div class="stars-rating-service">
        <input type="radio" id="cm_star-empty" name="nota" value="" checked>
        <label for="cm_star-1"><i class="fas fa-star"></i></label>
        <input type="radio" id="cm_star-1" name="nota" value="1">
        <label for="cm_star-2"><i class="fas fa-star"></i></label>
        <input type="radio" id="cm_star-2" name="nota" value="2">
        <label for="cm_star-3"><i class="fas fa-star"></i></label>
        <input type="radio" id="cm_star-3" name="nota" value="3">
        <label for="cm_star-4"><i class="fas fa-star"></i></label>
        <input type="radio" id="cm_star-4" name="nota" value="4">
        <label for="cm_star-5"><i class="fas fa-star"></i></label>
        <input type="radio" id="cm_star-5" name="nota" value="5">
    </div>


    {{-- CONTEÚDO --}}
    <div class="form-group">
        <textarea class=" input-service" rows="3" placeholder="O que tem a dizer sobre este profissional?"
            name="conteudo" id="conteudo"></textarea>
    </div>


    {{-- BOTÕES POSTAR --}}
    <div class="form-group icones-postagem">

        {{-- ÍCONES PARA MARCAR UMA PESSOA, ADD IMAGEM OU
        LOCAL A POSTAGEM --}}
        <button class="btn icon-post"><i class="fa fa-paperclip" aria-hidden="true"></i></button>
        <button class="btn icon-post"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
        <button class="btn icon-post"><i class="fa fa-user" aria-hidden="true"></i></button>



        {{-- BOTÃO POSTAR --}}
        <button class="btn float-right button-posts">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            <span>Postar</span>
        </button>

    </div>

</form>
