<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\ProductoClass;

class ProductoController extends Controller
{
    private $productoClass;

    public function __construct(ProductoClass $productoClass) {
        $this->productoClass = $productoClass;
    }

    public function lista(){
        $datos = $this->productoClass->lista();
        if ($datos->isEmpty()) {
            return response()->json([
                'mensaje' => 'No se encuentran registros'
            ], 200);
        }
        return response()->json(['message' => $datos], 200);
    }

    public function crear(ProductoRequest $datos){
        $repuesta = $this->productoClass->crear($datos);
        if ($repuesta == true) {
            return response()->json([
                'mensaje' => 'Producto registrado con exito',
            ], 201);
        }
        return response()->json([
            'mensaje' => 'Error en el registro',
        ], 400);

    }
}
