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
            //
            "name" => $this->faker->name(),
            "desc" => $this->faker->text(),
            "price" => $this->faker->numberBetween(100000,300000),
            "size" => $this->faker->randomElement(["S", "M", "L", "XL", "XXL"]),
            "color" => $this->faker->colorName(),
        ];
    }
}
