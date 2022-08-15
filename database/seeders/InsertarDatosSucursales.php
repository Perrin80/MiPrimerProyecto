<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(

            [
                'nombre' => 'Viña del Mar',
                'direccion' => 'dirección 1'
            ],
            [
                'nombre' => 'Reñaca',
                'direccion' => 'dirección 2'
            ],
            [
                'nombre' => 'Concón',
                'direccion' => 'dirección 3'
            ]
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
