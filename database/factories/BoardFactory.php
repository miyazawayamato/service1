<?php

namespace Database\Factories;

use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Board::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'qualification_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'name' => $this->faker->name,
            'message' => $this->faker->realText(100),
        ];
    }
}
