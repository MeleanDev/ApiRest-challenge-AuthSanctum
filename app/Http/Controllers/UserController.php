<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Service\AuthClass;
use Illuminate\Support\Facades\Auth;

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

    public function login(LoginRequest $datos){
        if (!Auth::attempt($datos->only('email', 'password'))) {
            return response()->json([
                'mensaje' => 'Usuario No Logiado'
            ], 400);
        }

        $email = $this->userClass->buscarUser($datos->email);
        $token = $email->createToken('auth_token')->plainTextToken;

        return response()->json([
            'mensaje' => 'Usurio logiado',
            'usuario' => $email->name,
            'accessToken' => $token,
            'token_type' => 'Bearer'
        ], 200);
    }
}
