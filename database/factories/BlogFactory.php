<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $published = rand(1, 2) == 1 ? true : false;
        return [
            'title' => $this->faker->realText(),
            'category' => $this->faker->realText(),
            'subtitile' => $this->faker->realText(),
            'description' => $this->faker->realText(),
            'published' => $published,
            'user_id' => User::factory()->create()->id,
        ];
    }
}
