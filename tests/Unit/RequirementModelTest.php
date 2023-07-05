<?php

namespace Tests\Unit;

use App\Models\TotkArmor;
use App\Models\TotkRequirement;
use App\Models\TotkResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RequirementModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Makes sure the model is working.
     *
     * @return void
     */
    public function test_saves_requirement_model_to_database(): void
    {
        $requirement = TotkRequirement::factory()->create();

        $this->assertModelExists($requirement);
    }

    /**
     * Makes sure the armor one-to-many relationship is working.
     *
     * @return void
     */
    public function test_requirement_is_connected_to_armor(): void
    {
        $requirement = TotkRequirement::factory()
            ->for(TotkArmor::factory()->create())
            ->create();

        $this->assertModelExists($requirement->armor);
    }

    /**
     * Makes sure the resource one-to-many relationship is working.
     *
     * @return void
     */
    public function test_requirement_is_connected_to_resource(): void
    {
        $requirement = TotkRequirement::factory()
            ->for(TotkResource::factory()->create())
            ->create();

        $this->assertModelExists($requirement->resource);
    }
}
