<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursales';

    public function productos(){

        return $this->belongsToMany('App\Models\Producto');

    }

    public function stocks(){

        return $this->hasMany('App\Models\Stock', 'stocks_id');

    }

}
