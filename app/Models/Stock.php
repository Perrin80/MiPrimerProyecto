<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    public function productos(){

        return $this->belongsTo('App\Models\Producto');

    }

    public function sucursales(){

        return $this->belongsTo('App\Models\Categoria');
        
    }
}
