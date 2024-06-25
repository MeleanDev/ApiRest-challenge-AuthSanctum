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

    public function producto(Producto $id){
        return response()->json($id);
    }

    public function editar(ProductoRequest $datos, Producto $id){
        $repuesta = $this->productoClass->editar($datos, $id);
        if ($repuesta == true) {
            return response()->json([
                'mensaje' => 'Producto editado con exito',
            ], 200);
        }
        return response()->json([
            'mensaje' => 'Error en la edicion del producto',
        ], 400);

    }

    public function eliminar(Producto $id){
        $this->productoClass->eliminar($id);
        return response()->json([
            'mensaje' => 'Producto eliminado'
        ]);
    }
}
