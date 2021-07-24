<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate(
        [
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]
        );
        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>$fields['password'],
        ]);
        $token = $user->createToken('myAppTokenYaJoBNaam')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return $response($response,201);

    }
    public function login(Request $request){
        $fields = $request->validate(
        [
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]
        );
        $user = User::where('email',$fields['email'])->first();

        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
                'message'=>'Crendiatas did not mathc'],401
            );
        }

        $token = $user->createToken('myAppTokenYaJoBNaam')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return $response($response,201);

    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message'=>'LOG OUT'
        ];
    }

}
