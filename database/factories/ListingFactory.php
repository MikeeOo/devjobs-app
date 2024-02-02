<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomDigitNot(0),
            'company' => fake()->company(),
            'title' => fake()->sentence(3),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'tags' => 'laravel, api, backend',
            'logo' => fake()->imageUrl(500, 500, 'cities'),
            'description' => fake()->paragraphs(4, true),
        ];
    }
}
