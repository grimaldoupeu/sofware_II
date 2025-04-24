<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('municipalidades', function (Blueprint $table) {
        $table->string('titulo')->nullable();
        $table->text('descripcion')->nullable();
        $table->string('redes_url')->nullable();
        $table->string('red_facebook')->nullable();
        $table->string('red_twitter')->nullable();
        $table->string('red_whatsapp')->nullable();
        $table->string('coordenadas_x')->nullable();
        $table->string('coordenadas_y')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('municipalidades', function (Blueprint $table) {
        $table->dropColumn([
            'titulo', 'descripcion', 'redes_url', 'red_facebook', 'red_twitter',
            'red_whatsapp', 'coordenadas_x', 'coordenadas_y'
        ]);
    });
}

};