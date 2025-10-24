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
        Schema::create('forced_matrices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            
            // Patrocinador de posición (Placement Sponsor)
            $table->foreignId('placement_id')->constrained('users')->restrictOnDelete();

            // Auspiciador directo (Sponsor o Enroller)
            $table->foreignId('sponsor_id')->constrained('users')->restrictOnDelete();

            $table->timestamps();
            $table->unique('user_id');
            $table->index('placement_id');
            $table->index('sponsor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forced_matrices');
    }
};
