<?php

namespace Database\Factories;

use App\Models\posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class postsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = posts::class;

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
            'author' =>  $this->faker->numberBetween(1,30),
            'category' => $this->faker->numberBetween(1,50),
        ];
    }
}
