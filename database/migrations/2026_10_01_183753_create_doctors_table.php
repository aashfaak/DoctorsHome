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
        Schema::create('doctors', function (Blueprint $table) {
    $table->id();
    $table->foreignId('specialty_id')->constrained()->cascadeOnDelete();
    $table->string('name');
    $table->string('photo')->nullable();
    $table->unsignedTinyInteger('experience_years')->default(0);
    $table->unsignedInteger('fee')->default(0);
    $table->text('bio')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
