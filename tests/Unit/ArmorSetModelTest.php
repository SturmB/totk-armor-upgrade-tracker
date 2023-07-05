<?php

namespace Tests\Unit;

use App\Models\TotkArmor;
use App\Models\TotkArmorSet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArmorSetModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Makes sure the model is working.
     *
     * @return void
     */
    public function test_saves_armor_set_model_to_database(): void
    {
        $armorSet = TotkArmorSet::factory()->create();

        $this->assertModelExists($armorSet);
    }

    /**
     * Makes sure the armors one-to-many relationship is working.
     *
     * @return void
     */
    public function test_armor_set_is_connected_to_armors(): void
    {
        $armorSet = TotkArmorSet::factory()
            ->has(TotkArmor::factory()->count(3))
            ->create();

        $this->assertModelExists($armorSet->armors->first());
    }
}
