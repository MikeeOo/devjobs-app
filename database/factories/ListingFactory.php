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
    private function csv(): string
    {
        $str = '';

        for ($i = 0; $i < 4; $i++) {
            $str = $str.fake()->word().',';
        }

        return substr($str, 0, -1);
    }

    public function definition(): array
    {
        return [
            'user_id' => fake()->randomDigitNot(0),
            'company' => fake()->company(),
            'title' => fake()->sentence(3),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'tags' => $this->csv(),
            'logo' => null,
            'description' => fake()->paragraphs(4, true),
        ];
    }
}
