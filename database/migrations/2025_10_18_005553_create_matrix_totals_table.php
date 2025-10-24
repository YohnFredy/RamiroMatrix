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
        Schema::create('matrix_totals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();

            $table->enum('status', ['active', 'full'])->default('active');

            $table->unsignedTinyInteger('current_affiliates')->default(0); // maximo matriz 3 
            $table->unsignedTinyInteger('two_levels_total_affiliates')->default(0);

            $table->unsignedSmallInteger('direct_affiliates')->default(0); // Directos del auspiciador
            $table->unsignedInteger('total_affiliates')->default(0);  // Total Matrix

            $table->unsignedInteger('total_unilevel')->default(0);  // Total en Unilevel


            $table->timestamps();

            $table->unique('user_id');
            $table->index(['status', 'current_affiliates']);
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrix_totals');
    }
};
