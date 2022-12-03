<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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

            'name' => fake()->unique()->words(3, true),
            'description' => fake()->text(150),
            'price' => rand(10, 100),
            'product_code' => fake()->unique()->postcode(),
            'image' => 'https://picsum.photos/seed/'. fake()->uuid .'/200',
            'company' => fake()->word(),
            'platform' => fake()->randomElement(['PC', 'Xbox', 'PlayStation', 'Switch']),


        ];
    }
}

