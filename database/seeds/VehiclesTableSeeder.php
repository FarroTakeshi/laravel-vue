<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            ['VehiculoID'=> 1,
             'VehiculoImagen'=> '20180906152603182.jpg',
             'VehiculoColorDescripcion'=> 'e',
             'VehiculoAnioFabricacion'=> 2018,
             'VehiculoCodigo'=> '2010',
             'VehiculoFechaVigenciaInicio'=> '2018-01-10',
             'VehiculoFechaVigenciaFin'=> '2018-10-31',
             'VehiculoDisponibilidadVenta'=> 1,
             'VehiculoVersion'=> '2',
             'VehiculoFlagActivo'=> 1,
             'FechaCreacion'=> '2018-09-06 15:26:03',
             'FechaEdicion'=> '2018-09-06 22:46:12',
             'FechaEliminacion'=> '2018-09-06 22:46:12'],
        ];

        DB::table('tur_vehicle')->insert($vehicles);
    }
}
