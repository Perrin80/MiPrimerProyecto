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
                'descripcion' => 'Ampolleta 80 watts',
                'imagenproducto' => 'https://byp.cl/media/catalog/product/0/0/001009326_4.jpg',
                'categoria_id' => 1,
            ],
            [
                'SKU' => 2,
                'nombre' => 'Playstation 5',
                'descripcion' => 'Consola de Videojuegos',
                'imagenproducto' => 'https://clsonyb2c.vtexassets.com/arquivos/ids/428948/PS5_Fisica_DS.jpg',
                'categoria_id' => 2,
            ],
            [
                'SKU' => 3,
                'nombre' => 'Macbook Pro',
                'descripcion' => 'Laptop Apple Sylicon',
                'imagenproducto' => 'https://i.blogs.es/e1fe2b/apple-macbook-pro-16/1366_2000.jpg',
                'categoria_id' => 3,
            ]
        ));
        $this -> command->info("Datos agregados correctamente");
    }
}
