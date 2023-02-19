<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller

{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return response()->json(Auth::user(), 200);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
}

};
