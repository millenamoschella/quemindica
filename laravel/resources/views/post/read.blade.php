@extends('../layouts/layout-menulogado')

@section('content')
<h2>Veja os últimos posts do dia</h2>

<section id="posts">
    @forelse($posts as $post)
    <article class="post">

        <p>{{ $post->conteudo }}</p>
        <a href="{{ route('post_delete', [encrypt($post->id)]) }}">Excluir</a>
    </article>
    @empty
    <div class="no-post">
        Nenhum post encontrado
    </div>
    @endforelse
    
</section>
@endsection