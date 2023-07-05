<?php

namespace Database\Factories;

use App\Models\TotkArmorSet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TotkArmorSet>
 */
class ArmorSetFactory extends Factory
{
    protected $model = TotkArmorSet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "image" => fake()->filePath(),
        ];
    }
}
