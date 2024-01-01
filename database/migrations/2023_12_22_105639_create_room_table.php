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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained('city');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('hotelname');
            $table->integer('price');
            $table->integer('room');
            $table->integer('person');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('address');
            $table->boolean('status');
            $table->text('description');
            $table->string('image'); // Assuming the image is stored as a file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
