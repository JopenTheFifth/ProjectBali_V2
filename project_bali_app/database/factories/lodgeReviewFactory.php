<?php

namespace Database\Factories;

use App\Models\lodgeReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class lodgeReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = lodgeReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text(200),
            'rating' => $this->faker->numberBetween(0, 10),
            'lodge_id' => $this->faker->numberBetween(1, 50),
            'user_id' => 1
        ];
    }
}

