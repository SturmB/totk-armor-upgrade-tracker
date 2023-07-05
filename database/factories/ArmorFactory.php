<?php

namespace Database\Factories;

use App\Models\TotkArmor;
use App\Models\TotkArmorSet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TotkArmor>
 */
class ArmorFactory extends Factory
{
    protected $model = TotkArmor::class;
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
            "upgradable" => fake()->boolean(),
            "armor_set_id" => fn() => TotkArmorSet::factory()->create(),
        ];
    }
}
