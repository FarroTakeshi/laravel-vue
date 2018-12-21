<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'turn_vehicle';

    public $timestamps = false;

    protected $fillable = [
        'VehiculoImagen',
        'VehiculoColorDescripcion',
        'VehiculoAnioFabricacion',
        'VehiculoCodigo',
        'VehiculoFechaVigenciaInicio',
        'VehiculoFechaVigenciaFin',
        'VehiculoDisponibilidadVenta',
        'VehiculoVersion',
        'VehiculoFlagActivo',
        'FechaCreacion'
        'FechaEdicion'
        'FechaEliminacion'
    ];
}
