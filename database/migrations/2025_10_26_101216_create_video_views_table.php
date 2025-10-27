<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_views', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('video_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            // Seguimiento del Video
            $table->boolean('video_played')->default(false);
            $table->float('video_max_watch_time', 8, 2)->default(0);
            $table->float('video_total_watch_time', 10, 2)->default(0);
            $table->boolean('video_completed')->default(false)->index();
            $table->smallInteger('completed_visits')->default(0);
            $table->float('video_duration', 8, 2)->nullable();
            $table->timestamp('last_completed_at')->nullable(); // <-- AÑADIDO

            // Datos de Contexto (Opcional pero muy recomendado)
            $table->ipAddress('ip_address')->nullable(); // <-- AÑADIDO
            $table->string('user_agent', 512)->nullable(); // <-- AÑADIDO

            $table->timestamps();
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_views');
    }
};
