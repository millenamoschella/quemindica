<?php

use Illuminate\Database\Seeder;

use App\Genre;

class AddGenre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['genero' => 'romance']);
        Genre::create(['genero' => 'aventura']);
        Genre::create(['genero' => 'drama']);
        Genre::create(['genero' => 'terror']);
        Genre::create(['genero' => 'policial']);
        Genre::create(['genero' => 'POP']);
        Genre::create(['genero' => 'Rock']);
        Genre::create(['genero' => 'Sertanejo']);
        Genre::create(['genero' => 'Eletronica']);
        Genre::create(['genero' => 'Inddie']);
        Genre::create(['genero' => 'Blues']);
        Genre::create(['genero' => 'Suspense']);
        Genre::create(['genero' => 'Comedia']);
    }
}
