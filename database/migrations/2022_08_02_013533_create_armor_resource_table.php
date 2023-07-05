<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create("totk_armor_resource", function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger("totk_armor_id");
            $table->unsignedSmallInteger("totk_resource_id");
            $table->unsignedTinyInteger("tier");
            $table->unsignedSmallInteger("quantity_needed");
            $table->timestamps();

            $table
                ->foreign("totk_armor_id")
                ->references("id")
                ->on("totk_armors")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table
                ->foreign("totk_resource_id")
                ->references("id")
                ->on("totk_resources")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists("totk_armor_resource");
    }
};
