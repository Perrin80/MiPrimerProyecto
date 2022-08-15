<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(

            [
                'nombre' => 'Iluminación',
            ],
            [
                'nombre' => 'Electrónica',
            ],
            [
                'nombre' => 'Computación',
            ],
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
