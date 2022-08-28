<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_sucursal')->insert(array(

            [
                'sucursal_id' => 1,
                'producto_id' => 1
            ],
            [
                'sucursal_id' => 2,
                'producto_id' => 1
            ],
            [
                'sucursal_id' => 2,
                'producto_id' => 2
            ]
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
