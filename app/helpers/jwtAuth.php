<?php

namespace App\helpers;

use Firebase\JWT\JWT;
use Illuminate\support\Facade\DB;
use App\Models\User;

class jwtAuth{

    protected $key;

    public function __construct(){
        $this->key = 'm1-cl4v3-35-pr1v4d4.';
    }

    public function signUp($email, $password, $getToken=null){
        $user = User::where(
            array(
                'email'=> $email,
                'password' => $password
            )
        )->first();

        if(is_object($user)){
            $token = array(
                'sub' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'iat' => time(),
                'exp' => time() + (60 * 60 * 24)
            );

            $jwt = JWT::encode($token,  $this->key, 'HS256');

            $decode = JWT::decode($jwt, $this->key, array('HS256'));

            if(is_null($getToken)){
                return array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Login correcto.',
                    'token' => $jwt
                );    
            } else {
                return array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Login correcto.',
                    'token' => $decode
                );    
            }

        } else {
            return array(
                'status' => 'error',
                'code' => 400,
                'message' => 'Login incorrecto.'
            );    
    }
    }

    public function checkToken(){


    }
}