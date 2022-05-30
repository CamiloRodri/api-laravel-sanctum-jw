<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class AuthApiController
 */
class AuthApiController extends Controller
{
    public function response($user)
    {
        $token = $user->createToken( str()->random(40) )->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed'
        ]) ;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return $this->response($user);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]) ;

        if( !Auth::attempt($credentials) ){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        return $this->response( Auth::user() );
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();

        return response()->json([
            'message' => 'You have successfully logged out and token was successfull'
        ]);
    }
}
