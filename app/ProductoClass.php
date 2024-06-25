<?php

namespace App;

use App\Models\Producto;

class ProductoClass
{
    public function lista(){
        $datos = Producto::all();
        return $datos;
    }

    public function crear($datos){
        try {
            $producto = new Producto();
            $producto->nombre = $datos->nombre;
            $producto->descripcion = $datos->descripcion;
            $producto->precio = $datos->precio;
            $producto->disponible = $datos->disponible;
            $producto->save();
            return $datos = true;
        } catch (\Throwable $th) {
            return $datos = false;
        }
    
    }
}
