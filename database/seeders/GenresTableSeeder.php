<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre' => 'Drama',
                'slug' => 'drama',
                'created_at' => '2023-01-17 02:31:16',
                'updated_at' => '2023-01-17 02:31:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'genre' => 'Comedy',
                'slug' => 'comedy',
                'created_at' => '2023-01-17 02:31:16',
                'updated_at' => '2023-01-17 02:31:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'genre' => 'Horror',
                'slug' => 'horror',
                'created_at' => '2023-01-17 02:31:16',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'genre' => 'Action',
                'slug' => 'action',
                'created_at' => '2023-01-17 02:31:16',
                'updated_at' => '2023-01-17 02:31:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}