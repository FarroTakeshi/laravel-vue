<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index() {
        $vehicles = Vehicle::get();
        //return redirect('vehicle.index', compact('vehicles'));
        return response(Vehicle::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function create() {
        $vehicle = new Vehicle();
        $vehicle->VehiculoColorDescripcion    = $faker->imageUrl($width = 640, $height = 480, 'transport');
        $vehicle->VehiculoColorDescripcion    = $faker->lexify('????????');
        $vehicle->VehiculoAnioFabricacion     = $faker->year($max = 'now');
        $vehicle->VehiculoCodigo              = $faker->ean13();
        $vehicle->VehiculoFechaVigenciaInicio = $faker->date($format = 'Y-m-d', $max = 'now');
        $vehicle->VehiculoFechaVigenciaFin    = $faker->date($format = 'Y-m-d', $max = 'now');
        $vehicle->save();

        return response($crud->jsonSerialize(), Response::HTTP_CREATED);
    }
}
