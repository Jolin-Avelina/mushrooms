<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stems', function (Blueprint $table) {
            $table->id();
            $table->foreignId("mushroom_id")->constrained();
            $table->string("name");
            $table->json("stem_height");
            $table->json("stem_width");
            $table->json("stem_root");
            $table->json("stem_surface");
            $table->json("stem_color");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stems');
    }
};
