<?php

namespace Database\Factories;

use App\Models\Lodge;
use App\Models\LodgeType;
use Illuminate\Database\Eloquent\Factories\Factory;

class LodgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lodge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surface' => $this->faker->numberBetween(1, 150),
            'price_per_night' => $this->faker->numberBetween(1, 999),
            'max_person' => $this->faker->numberBetween(1, 8),
            'lodge_type_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
