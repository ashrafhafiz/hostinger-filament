<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'brand_id' => Brand::factory(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'sku' => $this->faker->word(),
            'image' => $this->faker->word(),
            'description' => $this->faker->text(),
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'is_visible' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(["deliverable","downloadable"]),
            'published_at' => $this->faker->date(),
        ];
    }
}
