<?php

namespace Database\Factories;

use App\Models\postsTutorials;
use Illuminate\Database\Eloquent\Factories\Factory;

class postsTutorialsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = postsTutorials::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post' => $this->faker->numberBetween(1,40),
            'tutorial' => $this->faker->numberBetween(1,20)
        ];
    }
}
