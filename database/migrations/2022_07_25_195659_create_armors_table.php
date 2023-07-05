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
        Schema::create("totk_armors", function (Blueprint $table) {
            $table->smallIncrements("id");
            $table->string("name", 100)->unique();
            $table->string("image", 100)->nullable();
            $table->boolean("upgradable")->default(1);
            $table->unsignedSmallInteger("totk_armor_set_id")->nullable();
            $table->timestamps();

            $table
                ->foreign("totk_armor_set_id")
                ->references("id")
                ->on("totk_armor_sets")
                ->cascadeOnUpdate()
                ->nullOnDelete()
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists("totk_armors");
    }
};
