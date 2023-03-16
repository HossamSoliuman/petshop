<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'photo'=>fake()->randomElement(['1.jpg','2.jpg','3.jpg']),
            'name'=> $this->faker->text(7),
            'price'=>Random::generate(2,'2-9')
        ];
    }
}
