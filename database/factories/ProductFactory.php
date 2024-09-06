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
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "price" => floatval(fake()->numberBetween(0, 1000)),
            "image_url" => "https://iqq6kf0xmf.gjirafa.net/images/caf45f5a-7495-4b3a-bd13-7b1303924b22/caf45f5a-7495-4b3a-bd13-7b1303924b22.webp?w=190",
            "product_type" => fake()->numberBetween(0, 4),
            "brand" => "dell"
        ];
    }
}
