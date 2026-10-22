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
        Schema::create('section_testimonial_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_testimoni_id')->constrained('section_testimonials')->onDelete('cascade');
            $table->string('name');
            $table->date('date');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_testimonial_details');
    }
};
