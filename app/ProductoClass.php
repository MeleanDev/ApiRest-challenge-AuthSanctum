<?php

namespace App;

use App\Models\Producto;

class ProductoClass
{
    public function lista(){
        $datos = Producto::all();
        return $datos;
    }
}
