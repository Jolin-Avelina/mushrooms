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
        Schema::create('mushrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_link');
            $table->text('wikipedia_link');
            $table->string('genus_name');
            $table->string('specific_name');
            $table->string('book_name');
            $table->char('edibility');
            $table->string('edibility_notes');
            $table->char('poisonous');
            $table->boolean('has_bruises');
            $table->json('spore_print');
            $table->json("habitat");
            $table->json("season");
            $table->integer("enrichable");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mushrooms');
    }
};
