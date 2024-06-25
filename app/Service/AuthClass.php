<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthClass
{
    public function Crear($datos){
        try {
            $user = new User();
            $user->name = $datos->name;
            $user->email = $datos->email;
            $user->password = Hash::make($datos->password);
            $user->save();
            return $datos = true;
        } catch (\Throwable $th) {
            return $datos = false;
        }
    }

    public function buscarUser($email){
        $datos = User::where('email', $email)->firstOrFail();
        return $datos;
    }
}
