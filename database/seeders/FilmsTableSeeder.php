<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('films')->delete();
        
        \DB::table('films')->insert(array (
            0 => 
            array (
                'id' => 37,
                'film' => 'Harry Poter',
                'description' => 'Harry PoterHarry PoterHarry Poter',
                'release_date' => '2023-01-16',
                'rating' => '3',
                'ticket_price' => '1111.0',
                'country' => 4,
                'photo' => '1DuWlolJJQ.jpg',
                'slug' => 'harry-poter',
                'created_at' => '2023-01-16 16:58:13',
                'updated_at' => '2023-01-16 16:58:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 38,
                'film' => 'Godzilla',
                'description' => 'Good ZillaGood ZillaGood ZillaGood ZillaGood ZillaGood Zilla',
                'release_date' => '2023-01-16',
                'rating' => '4',
                'ticket_price' => '111.0',
                'country' => 1,
                'photo' => 'FhXn4VtxLj.jpg',
                'slug' => 'godzilla',
                'created_at' => '2023-01-16 17:43:43',
                'updated_at' => '2023-01-16 17:43:44',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 39,
                'film' => 'Black Adam',
                'description' => 'Black AdamBlack AdamBlack Adam',
                'release_date' => '2023-01-16',
                'rating' => '4',
                'ticket_price' => '222.0',
                'country' => 14,
                'photo' => 'iyh7cUHd1m.jpg',
                'slug' => 'black-adam',
                'created_at' => '2023-01-16 17:54:43',
                'updated_at' => '2023-01-16 17:54:43',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 40,
                'film' => 'The Meg',
                'description' => 'The Meg The Meg The Meg',
                'release_date' => '2023-01-16',
                'rating' => '4',
                'ticket_price' => '122.0',
                'country' => 7,
                'photo' => 'dKcKZHtI3K.jpg',
                'slug' => 'the-meg',
                'created_at' => '2023-01-16 18:55:32',
                'updated_at' => '2023-01-16 18:55:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}