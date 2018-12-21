<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellingPoint extends Model
{
    protected $table = 'turn_selling_point';

    public $timestamps = false;

    protected $fillable = [
        'PuntoVentaNombre',
        'PuntoVentaImagen',
        'PuntoVentaNombreComercial',
        'PuntoVentaDireccion',
        'PuntoVentaFlagActivo',
        'FechaCreacion',
        'FechaEdicion',
        'FechaEliminacion',
        'UsuarioIDCreacion',
        'UsuarioIDModificacion'
    ];

}
