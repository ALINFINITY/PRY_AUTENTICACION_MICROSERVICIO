<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'El email es obligatorio',
                'password.required' => 'La contraseña es obligatoria'
            ]
        );

        if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $token = $user->createToken('api-token')->plainTextToken;

        $res = [
            'message' => 'inicio de sesion exitoso',
            'token' => $token,
            'user' => $user
        ];

        return response()->json($res, 200);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json([
                'message' => 'Token no proporcionado o inválido'
            ], 401);
        }

        // Eliminar tokens
        $user->tokens()->delete();

        return response()->json([
            'message' => 'Logout global exitoso: todos los tokens eliminados'
        ], 200);
    }

    public function register(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|string|email',
                'password' => 'required|string',
                'name' => 'required|string'
            ]
        );

        $user = User::create(['name' => $validate['name'], 'email' => $validate['email'], 'password' => $validate['password']]);
        $token = $user->createToken("first-token");
        return ['token' => $token->plainTextToken];
    }

    public function validate_token(Request $request)
    {
        return response()->json(
            [
                'message' => 'Token válido',
                'user' => $request->user()
            ],
            200
        );
    }
}
