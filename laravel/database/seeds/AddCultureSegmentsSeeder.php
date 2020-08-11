<?php

use Illuminate\Database\Seeder;

use App\Culture_Segment;

class AddCultureSegmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Culture_Segment::create(['tipo' => Null]);
        Culture_Segment::create(['tipo' => 'Música']);
        Culture_Segment::create(['tipo' => 'Filme']);
        Culture_Segment::create(['tipo' => 'Série']);
        Culture_Segment::create(['tipo' => 'Livro']);
    }
}
