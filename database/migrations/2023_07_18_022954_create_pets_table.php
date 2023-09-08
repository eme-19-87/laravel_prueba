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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->nullable()->constrained();
            $table->string('name');
            $table->foreignId('pet_type_id')->constrained('pet_types', 'id');
            $table->string('breed');
            $table->integer('age');
            $table->string('gender', '20');
            $table->string('features');
            $table->string('color');
            $table->string('city', '140');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
