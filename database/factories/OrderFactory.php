<?php

namespace Database\Factories;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            "customer_id" => function () {
                return Customer::factory()->create()->id;
            },
            'order_date' => $this->faker->date(),
            'total_amount' => $this->faker->randomFloat(0, 100, 10000),
            'status' => 1,
        ];
    }
}
