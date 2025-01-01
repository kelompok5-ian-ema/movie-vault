<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'description' => 'A mind-bending thriller about dreams within dreams.',
                'release_year' => 2010,
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A journey to the far reaches of space to save humanity.',
                'release_year' => 2014,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Batman faces the Joker in Gotham City.',
                'release_year' => 2008,
            ],
        ]);
    }
}
