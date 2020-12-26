<?php

namespace Database\Factories;

use App\Models\AccommodationResource;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccommodationResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccommodationResource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resource_name' => $this->faker->name,
            'icon_path' => 'wifi.jpg'
        ];
    }
}
