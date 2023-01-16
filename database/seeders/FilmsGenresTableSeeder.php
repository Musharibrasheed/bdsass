<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsGenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('films_genres')->delete();
        
        \DB::table('films_genres')->insert(array (
            0 => 
            array (
                'id' => 24,
                'films_id' => 37,
                'genres_id' => 1,
            ),
            1 => 
            array (
                'id' => 25,
                'films_id' => 38,
                'genres_id' => 3,
            ),
            2 => 
            array (
                'id' => 26,
                'films_id' => 38,
                'genres_id' => 4,
            ),
            3 => 
            array (
                'id' => 27,
                'films_id' => 39,
                'genres_id' => 2,
            ),
            4 => 
            array (
                'id' => 28,
                'films_id' => 40,
                'genres_id' => 3,
            ),
        ));
        
        
    }
}