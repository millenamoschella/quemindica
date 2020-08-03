<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddGenre::class);
        $this->call(AddUsersSeeder::class);
        $this->call(AddSegmentsSeeder::class);
        $this->call(AddCultureSegmentsSeeder::class);
        $this->call(AddServicesSeeder::class);
        $this->call(AddProductsSeeder::class);
        $this->call(AddCulturesSeeder::class);
        $this->call(AddPostsSeeder::class);
    }
}
