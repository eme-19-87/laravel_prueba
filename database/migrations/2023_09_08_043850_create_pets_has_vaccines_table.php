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
        Schema::create('pets_has_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('detail');

            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('vaccine_id');

            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets_has_vaccines');
    }
};
