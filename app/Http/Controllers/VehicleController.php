<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index() {
    	$vehicles = Vehicle::get();
    	//return redirect('vehicle.index', compact('vehicles'));
    	return response(Vehicle::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
