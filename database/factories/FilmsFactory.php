<?php

namespace Database\Factories;

use App\Models\Films;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Films::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'film' => $this->faker->word,
        'description' => $this->faker->text,
        'release_date' => $this->faker->word,
        'rating' => $this->faker->randomElement(['2', '3', '4', '5']),
        'ticket_price' => $this->faker->word,
        'counrty' => $this->faker->randomDigitNotNull,
        'photo' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
