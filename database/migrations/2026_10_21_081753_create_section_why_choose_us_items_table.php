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
        Schema::create('section_why_choose_us_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_why_choose_us_id')->constrained('section_why_choose_us')->onDelete('cascade');
            $table->integer('order');
            $table->string('title');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_why_choose_us_items');
    }
};
