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
        Schema::create('appointments', function (Blueprint $table) {
    $table->id();
    $table->foreignId('doctor_id')->nullable()->constrained()->nullOnDelete();
    $table->string('type'); // video, home, clinic
    $table->string('name');
    $table->string('email')->nullable();
    $table->string('phone');
    $table->date('date');
    $table->time('time');
    $table->text('notes')->nullable();
    $table->string('status')->default('pending'); // pending, confirmed, done, cancelled
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
