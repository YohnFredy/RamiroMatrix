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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index(); // <-- Índice añadido aquí
            $table->text('short_description');
            $table->string('slug')->unique(); // <-- El método unique() ya crea un índice
            $table->string('image_path')->nullable();
            $table->string('youtube_url');
            $table->timestamps(); // Crea created_at y updated_at

            // Opcional pero recomendado: Índice para ordenar por fecha de creación
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
