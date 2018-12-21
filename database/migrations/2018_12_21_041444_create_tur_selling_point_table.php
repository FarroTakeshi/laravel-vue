<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurSellingPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tur_selling_point', function (Blueprint $table) {
            $table->increments('PuntoVentaID');
            $table->string('PuntoVentaNombre');
            $table->string('PuntoVentaImagen');
            $table->string('PuntoVentaNombreComercial');
            $table->string('PuntoVentaDireccion');
            $table->boolean('PuntoVentaFlagActivo');
            $table->timestamp('FechaCreacion')->nullable();
            $table->timestamp('FechaEdicion')->nullable();
            $table->timestamp('FechaEliminacion')->nullable();
            $table->integer('UsuarioIDCreacion')->unsigned()->nullable();
            $table->integer('UsuarioIDModificacion')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tur_selling_point');
    }
}
