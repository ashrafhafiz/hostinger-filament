<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'number' => $this->faker->word(),
            'total_price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'status' => $this->faker->randomElement(["pending","processing","completed","declined"]),
            'shipping_price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'notes' => $this->faker->text(),
        ];
    }
}
