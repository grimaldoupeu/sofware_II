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
        Schema::create('municipalidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('titulo')->nullable();
            $table->text('descripcion');
            $table->string('redes_url')->nullable();
            $table->string('red_facebook')->nullable();
            $table->string('red_twitter')->nullable();
            $table->string('red_whatsapp')->nullable();
            $table->string('coordenadas_x')->nullable();
            $table->string('coordenadas_y')->nullable();  // Asegúrate de que esta línea esté presente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalidades');
    }
};
