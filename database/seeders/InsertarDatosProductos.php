<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(

            [
                'SKU' => 1,
                'nombre' => 'Ampolleta',
                'descripcion' => 'Ampolleta 350 watts',
                'categoria_id' => 1,
            ],
            [
                'SKU' => 2,
                'nombre' => 'Playstation 5',
                'descripcion' => 'Consola de videojuegos',
                'categoria_id' => 2,
            ],
            [
                'SKU' => 3,
                'nombre' => 'Macbook Pro',
                'descripcion' => 'Laptop Apple Sylicon',
                'categoria_id' => 3,
            ]
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
