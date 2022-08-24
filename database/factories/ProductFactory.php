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
        $price = fake()->randomFloat(2, 50, 100);
        // $calc_price = $price + (rand(10, 70) * $price) / 100;
        // $old_price = $calc_price > 100 ? 0 : $calc_price;
        $infos = 'Weight|400g;Dimensions|10 x 10 x 15 cm;Materials|60% cotton, 40% polyester;Other Info|American heirloom jean shorts pug seitan letterpress';
        $tags = 'Fashion;Organic;Old Fashion;Men;Dress';
        return [
            'name' => fake()->name(),
            'price' => $price,
            // 'old_price' => $old_price,
            'short_desc' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'infos' => $infos,
            'tags' => $tags,
            'created_at' => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
