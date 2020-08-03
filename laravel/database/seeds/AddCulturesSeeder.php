<?php

use Illuminate\Database\Seeder;

use App\Culture;

class AddCulturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Culture::create([
            'titulo' => Null,
            'autor' => Null,
            'ano' => Null,
            'plataforma' => Null,
            'genre_id' => 1,
            'cultureSegment_id' => 1,
        ]);

        Culture::create([
            'titulo' => 'The Blacklist',
            'autor' => 'Jon Bokenkamp',
            'ano' => 2020,
            'plataforma' => 'Netflix',
            'genre_id' => 3,
            'cultureSegment_id' => 3,
        ]);

        Culture::create([
            'titulo' => 'A sutil arte de ligar o f*da-se',
            'autor' => 'Mark Manson',
            'ano' => 2016,
            'plataforma' => 'Netflix',
            'genre_id' => 13,
            'cultureSegment_id' => 4,
        ]);

        Culture::create([
            'titulo' => 'Milagre na cela 7',
            'autor' => 'Mehmet Ada Öztekin',
            'ano' => 2019,
            'plataforma' => 'Kildle',
            'genre_id' => 2,
            'cultureSegment_id' => 3,
        ]);

        Culture::create([
            'titulo' => 'Senhor do Tempo',
            'autor' => 'Charlie Brown Jr.',
            'ano' => 1997,
            'plataforma' => 'Spotfy',
            'genre_id' => 7,
            'cultureSegment_id' => 1,
        ]);
    }
}
