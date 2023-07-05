<?php

namespace Database\Factories;

use App\Models\TotkArmor;
use App\Models\TotkRequirement;
use App\Models\TotkResource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TotkRequirement>
 */
class RequirementFactory extends Factory
{
    protected $model = TotkRequirement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "armor_id" => fn () => TotkArmor::factory()->create(),
            "resource_id" => fn () => TotkResource::factory()->create(),
            "tier" => fake()->numberBetween(1, 4),
            "quantity_needed" => fake()->numberBetween(1, 50),
        ];
    }
}
