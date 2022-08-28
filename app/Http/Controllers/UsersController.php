<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use App\helpers\jwtAuth;
use Symfony\Component\Console\Output\ConsoleOutput;



class UsersController extends Controller
{    
    public function register(Request $request){
        $json = $request->input('json', null);
        $params = json_decode($json);
        
        $email = (!is_null($json)&&isset($params->email)) ? $params->email : null;
        $name = (!is_null($json)&&isset($params->name)) ? $params->name : null;
        $password = (!is_null($json)&&isset($params->password)) ? $params->password : null;

        if(!is_null($email) && !is_null($name) && !is_null($password)){
            $user = new User();
            $user->email = $email;
            $user->name = $name;
            $user->password = hash('sha256', $password);

            $isset_user = User::where('email', $email)->get();
            
            if(count($isset_user) == 0){
                $user->save();
                $response = array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Usuario Creado Correctamente'
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'code' => 400,
                    'message' => 'El correo utilizado ya se encuentra registrado.'
                );
            }

        } else {
            $response = array(
                'status' => 'error',
                'code' => 400,
                'message' => 'El correo no puede ser creado.'
            );
        }

        return response()->json($response, 200);
    }

    public function login(Request $request){

        $jwtAuth = new jwtAuth;
        $json = $request->input('json', null);

        $params = json_decode($json);

        $email = (!is_null($json)&&isset($params->email)) ? $params->email : null;
        $password = (!is_null($json)&&isset($params->password)) ? $params->password : null;

        if(!is_null($email) && !is_null($password)){
            $pwd = hash('sha256', $password);
            $response = $jwtAuth->signUp($email, $pwd);
        } else {
            $response = array(
                'status' => 'error',
                'code' => 400,
                'message' => 'Error de login.'
            );
        }

        return response()->json($response, 200);
    }

}