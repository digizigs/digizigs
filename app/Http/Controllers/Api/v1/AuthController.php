<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $register = $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $register['password'] = bcrypt($request->password);
        $user = User::create($register);
        $token = auth()->login($user);

        //$accessToken = $user->createToken('authToken')->accessToken;
        return response(['user' => $user ,'token' => $token]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            $user = auth()->user();
            //return $this->respondWithToken($token);
            return response()->json(['success' => true,'token'=>$token,'user'=>$user], 200);
        }

        return response()->json(['success' => false,'message'=>'Invalid email or password'], 401);
    }

    public function user(){

        return response()->json(['user' => 'Vishwa'], 200);

    }

    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    public function users()
    {
        return User::all();
    }

    public function me()
    {
        return response()->json($this->guard()->user());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    public function guard()
    {
        return Auth::guard();
    }
}
