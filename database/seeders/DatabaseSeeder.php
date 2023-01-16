<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountriesTableSeeder::class,
        ]);
        $this->call(GenresTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(FilmsGenresTableSeeder::class);
    }
}
