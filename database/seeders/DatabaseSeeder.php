<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FilmTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FilmTableSeeder::class
            ]);

    }
}
