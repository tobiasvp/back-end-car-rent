<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     //
        // ];

        return [
            //
            'package_name' => fake()->sentence(),
            'package_detail' => fake()->sentence(),
            'price' => rand(0, 1),
            // 'is_active' => rand(0, 1),
            'img' =>   $this->faker->imageUrl(640, 480),

        ];
    }
}
