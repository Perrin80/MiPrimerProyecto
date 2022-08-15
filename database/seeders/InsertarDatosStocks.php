<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosStocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert(array(

            [
                'cantidad' => 10,
                'precio' => 100,
                'activo' => true,
                'producto_id' => 1,
                'sucursal_id' => 1,
            ],
            [
                'cantidad' => 20,
                'precio' => 200,
                'activo' => false,
                'producto_id' => 2,
                'sucursal_id' => 2,
            ],
            [
                'cantidad' => 30,
                'precio' => 300,
                'activo' => true,
                'producto_id' => 3,
                'sucursal_id' => 3,
            ],
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
