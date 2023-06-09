<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'photo'=> fake()->randomElement(['blog-1.jpg','blog-2.jpg']),
            'name'=>fake()->name(),
            'title'=>fake()->text(20),
            'body'=>fake()->sentence(10)


        ];
    }
}
