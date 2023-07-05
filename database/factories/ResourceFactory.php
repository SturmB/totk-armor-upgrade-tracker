<?php

namespace Database\Factories;

use App\Models\TotkResource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TotkResource>
 */
class ResourceFactory extends Factory
{
    protected $model = TotkResource::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->word(),
            "image" => fake()->filePath(),
        ];
    }
}
