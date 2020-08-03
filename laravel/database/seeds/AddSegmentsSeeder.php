<?php

use Illuminate\Database\Seeder;

use App\Segment;

class AddSegmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Segment::create(['tipo' => Null ]);
        Segment::create(['tipo' => 'Assistência Técnica']);
        Segment::create(['tipo' => 'Educação']);
        Segment::create(['tipo' => 'Design']);
        Segment::create(['tipo' => 'Eventos']);
        Segment::create(['tipo' => 'Moda']);
        Segment::create(['tipo' => 'Cosméticos']);
        Segment::create(['tipo' => 'Reformas']);
        Segment::create(['tipo' => 'Saúde']);
        Segment::create(['tipo' => 'Serviços domésticos']);
        Segment::create(['tipo' => 'Consertos']);
        Segment::create(['tipo' => 'Outros']);
    }
}
