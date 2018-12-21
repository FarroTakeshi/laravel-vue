<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tur_vehicle', function (Blueprint $table) {
            $table->increments('VehiculoID');
            $table->string('VehiculoImagen');
            $table->string('VehiculoColorDescripcion');
            $table->integer('VehiculoAnioFabricacion');
            $table->string('VehiculoCodigo');
            $table->date('VehiculoFechaVigenciaInicio');
            $table->date('VehiculoFechaVigenciaFin');
            $table->integer('VehiculoDisponibilidadVenta');
            $table->string('VehiculoVersion');
            $table->boolean('VehiculoFlagActivo');
            $table->timestamp('FechaCreacion')->nullable();
            $table->timestamp('FechaEdicion')->nullable();
            $table->timestamp('FechaEliminacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tur_vehicle');
    }
}
