<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand_id' => Brand::factory(),

            'model' => fake()->word(),

            'price' => fake()->numberBetween(1000000, 20000000),

            'stock' => fake()->numberBetween(1, 100),

            'ram' => fake()->randomElement([
                '4GB',
                '6GB',
                '8GB',
                '12GB'
            ]),

            'storage' => fake()->randomElement([
                '64GB',
                '128GB',
                '256GB'
            ]),

            'description' => fake()->sentence()
        ];
    }
}