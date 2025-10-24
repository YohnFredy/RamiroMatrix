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
        Schema::create('matrix_points', function (Blueprint $table) {
             $table->id();
            $table->foreignId('user_id')->unique()->constrained()->restrictOnDelete();
            $table->decimal('personal')->default(0);
            $table->decimal('level1_points_total', 10, 2)->default(0);
            $table->decimal('level2_points_total', 10, 2)->default(0);
            $table->decimal('total_points', 12, 2)->default(0);
            $table->boolean('locked')->default(false);
            $table->dateTime('approved')->nullable();
            $table->timestamps();
            $table->index('user_id');
            $table->index('locked');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrix_points');
    }
};
