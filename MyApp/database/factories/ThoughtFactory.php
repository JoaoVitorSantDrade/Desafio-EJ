<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thought>
 */
class ThoughtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'content' => file_get_contents('https://loripsum.net/api/1/short/'),
            'id-icon' => $this->faker->numberBetween(1,3),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
