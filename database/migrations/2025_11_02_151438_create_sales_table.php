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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            // Relaciones con las tablas users y businesses
            $table->foreignId('user_id')->comment('ID del usuario que compra')->constrained('users')->onDelete('cascade');
            $table->foreignId('seller_id')->comment('ID del usuario vendedor')->constrained('users')->onDelete('cascade');
            $table->foreignId('business_id')->constrained('businesses')->onDelete('cascade');

            // Valores monetarios (usando decimal para precisión)
            $table->decimal('total_sale_amount', 15, 2);
            $table->decimal('total_commission_amount', 15, 2);
            $table->decimal('seller_commission_earned', 15, 2);

            $table->string('invoice_number')->unique(); // El número de factura debe ser único

            $table->timestamps();

            // Índice para búsqueda por número de factura
            $table->index('invoice_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
