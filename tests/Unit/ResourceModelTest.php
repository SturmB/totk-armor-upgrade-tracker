<?php

namespace Tests\Unit;

use App\Models\TotkArmor;
use App\Models\TotkRequirement;
use App\Models\TotkResource;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResourceModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Makes sure the model is working.
     *
     * @return void
     */
    public function test_saves_resource_model_to_database(): void
    {
        $resource = TotkResource::factory()->create();

        $this->assertModelExists($resource);
    }

    /**
     * Makes sure the armors many-to-many relationship is working.
     *
     * @return void
     */
    public function test_resource_is_connected_to_armors_with_pivot(): void
    {
        $resource = TotkResource::factory()
            ->hasAttached(TotkArmor::factory()->count(3), [
                "tier" => fake()->numberBetween(1, 4),
                "quantity_needed" => fake()->numberBetween(1, 50),
            ])
            ->create();

        $this->assertModelExists($resource->armors->first());
        $this->assertModelExists($resource->armors->first()->pivot);
    }

    /**
     * Makes sure the users many-to-many relationship is working.
     *
     * @return void
     */
    public function test_resource_is_connected_to_users_with_pivot(): void
    {
        $resource = TotkResource::factory()
            ->has(User::factory()->count(3))
            ->create();

        $this->assertModelExists($resource->users->first());
    }

    /**
     * Makes sure the requirements one-to-many relationship is working.
     *
     * @return void
     */
    public function test_resource_is_connected_to_requirements(): void
    {
        $resource = TotkResource::factory()
            ->has(TotkRequirement::factory()->count(3))
            ->create();

        $this->assertModelExists($resource->requirements->first());
    }
}
