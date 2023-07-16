<?php
// Tabla Intermedia Necesaria Vaccines
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->nullable()->constrained();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->foreignId('pet_type_id')->constrained('pet_types', 'id');
            $table->string('breed');
            $table->integer('age');
            $table->string('gender', '20');
            $table->string('features');
            $table->string('color');
            $table->string('city', '140');
            $table->string('allergies')->nullable();
            $table->string('veterinarian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
