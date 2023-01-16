<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'john',
                'email' => 'john@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ih11awISK.dfRRvAnzHm3uwDKeppKWjX2cM4qe.g323.L8M1Obw.W',
                'remember_token' => NULL,
                'created_at' => '2023-01-14 16:25:06',
                'updated_at' => '2023-01-14 16:25:06',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Jack',
                'email' => 'jack@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GE4QjuVmFex1VkcJHFeys.zNVubZZODseLn2CKSkzt9UVWuZ7n6Fm',
                'remember_token' => NULL,
                'created_at' => '2023-01-16 20:40:58',
                'updated_at' => '2023-01-16 20:40:58',
            ),
        ));
        
        
    }
}