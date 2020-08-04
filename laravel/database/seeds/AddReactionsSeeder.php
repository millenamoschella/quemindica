<?php

use Illuminate\Database\Seeder;

use App\Reaction;

class AddReactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reaction::create([
            'curtida' => 1,
            'comentario' => 'Ameeeeeeeeeeeeey',
            'post_id'=> 2,
            'user_id'=> 5,
        ]);

        Reaction::create([
            'curtida' => 1,
            'comentario' => 'Ele atende na Zona Sul',
            'post_id'=> 1,
            'user_id'=> 3,
        ]);
    }
}
