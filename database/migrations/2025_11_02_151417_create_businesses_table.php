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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit')->unique(); // NIT debe ser único
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

    
            $table->integer('country_id');
            $table->integer('department_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('city')->nullable();

            // Porcentajes de ganancia (usando decimal para precisión)
            $table->decimal('seller_commission_rate', 5, 2); // Ej: 10.50%
            $table->decimal('sponsor_commission_rate', 5, 2);
            $table->decimal('min_company_commission', 5, 2);
            $table->decimal('max_company_commission', 5, 2);

            $table->timestamps();

            // Índices para búsquedas eficientes
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
