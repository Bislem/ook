<?php

namespace Database\Factories;

use App\Models\services;
use Illuminate\Database\Eloquent\Factories\Factory;

class servicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->realText(100),
            'content' => $this->faker->realText(1000),
            'slug' => $this->faker->unique()->slug,
            'image' => $this->faker->imageUrl(1000,600),
            'description' => $this->faker->realText(255),
            'price' => $this->faker->numberBetween(50,4000)
        ];
    }
}
