<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => Str::ucfirst($this->faker->word()),
            'artists' => Str::ucfirst($this->faker->word()),
            'genres' => Str::ucfirst($this->faker->word()),
            'styles' => Str::ucfirst($this->faker->word()),
        ];
    }
}
