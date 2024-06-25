<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Service\AuthClass;

class UserController extends Controller
{
    private $userClass;

    public function __construct(AuthClass $userClass) {
        $this->userClass = $userClass;
    }

    public function registro(RegistroRequest $datos){
        $repuesta = $this->userClass->Crear($datos);
        if ($repuesta == true) {
            return response()->json([
                'mensaje' => 'Usuario registrado'
            ], 201);
        }
        return response()->json([
            'mensaje' => 'Usuario No registrado'
        ], 400);
    }
}
