@extends('../layouts/layout-menulogado')

@section('content')
    <h2>Veja os últimos posts do dia</h2>

    <section id="posts">
        @foreach ($posts as $post)

            <article class="post">
                <p>{{ $post->conteudo }}</p>

                <a href="{{ route('post_delete', [encrypt($post->id)]) }}">Excluir</a>

            </article>

        @endforeach
    </section>


@endsection
