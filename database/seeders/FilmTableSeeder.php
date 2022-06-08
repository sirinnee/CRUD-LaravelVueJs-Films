<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table("films")->insert([
        "titre" => $faker->name(20),
        "realisateur" => $faker->name(8),
        "pays" => $faker->country(8),
        "date_sortie" => $faker->date(),
        "description" => $faker->text(8),
        "poster" => $faker->text(8),
        "duree" => $faker->text(5),
        "langue"=>$faker->text(15)
        ]);
    }
}
