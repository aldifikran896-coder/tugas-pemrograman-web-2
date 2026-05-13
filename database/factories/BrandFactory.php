<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Samsung',
                'Xiaomi',
                'Apple',
                'Oppo',
                'Vivo'
            ]),

            'country' => fake()->country(),

            'founded_year' => fake()->numberBetween(1990, 2020)
        ];
    }
}