<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login()
    {
        request()->validate([
            'email'     => 'required|string|email',
            'password'  => 'required|string',
        ]);
        $credentials = request()->only('email', 'password');
        $token = Auth::attempt($credentials);

        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'user'          => $user,
            'authorization' => [
                'token' => $token,
                'type'  => 'bearer',
            ]
        ]);
    }

    public function register()
    {

        $emails = User::pluck('email')->toArray();
        $email  = request()->email;
        $exist  = in_array($email, $emails);

        if ($exist) {

            return response()->json([
                'message'   => 'User is exist, change your email!'
            ]);
        }

        request()->validate([
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'phone'         => 'required|string|min:11|max:12',
            'password'      => 'required|string|min:6',
        ]);

        $user = User::create([
            'first_name' => request()->first_name,
            'last_name'  => request()->last_name,
            'email'      => request()->email,
            'phone'      => request()->phone,
            'password'   => Hash::make(request()->password),
        ]);

        return response()->json([
            'message'   => 'User created successfully',
            'user'      => $user
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'user'          => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type'  => 'bearer',
            ]
        ]);
    }
}
