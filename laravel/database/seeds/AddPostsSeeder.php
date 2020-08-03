<?php

use Illuminate\Database\Seeder;

use App\Post;

class AddPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'conteudo' => 'Filme maravilhoso, chorei litros',
            'user_id' => 1,
            'service_id'=> 1,
            'product_id'=> 1,
            'culture_id'=> 3
        ]);

        Post::create([
            'conteudo' => 'Melhor serviço de Pedreira, super rápida e limpa',
            'user_id' => 3,
            'service_id'=> 3,
            'product_id'=> 1,
            'culture_id'=> 1
        ]);

        Post::create([
            'conteudo' => 'Minha música favorita',
            'user_id' => 2,
            'service_id'=> 1,
            'product_id'=> 1,
            'culture_id'=> 5
        ]);

        Post::create([
            'conteudo' => 'Melhor professor de PHP',
            'user_id' => 5,
            'service_id'=> 4,
            'product_id'=> 1,
            'culture_id'=> 1
        ]);
    }
}
