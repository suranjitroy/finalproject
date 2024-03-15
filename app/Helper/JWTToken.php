<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class JWTToken {

    public static function CreateToken($email){

        $key = env('JWT_KEY');

        $payload = [
            'iss' => 'hello-token',
            'iat' => time(),
            'exp' => time()+60*60,
            'email' => $email
        ];

       $jwt = JWT::encode($payload,$key,'HS256');
        return $jwt;
    
    }


    public static function VerifyToken($token){

        try{

            if($token == null){
                return 'unauthorized';

            }
            $key = env('JWT_KEY');
            $decode = JWT::decode($token, new Key($key, 'HS256'));
            return $decode->email;
        }
        catch (Exception $e){
           return 'unauthorized';
            // return response()->json([
            //     'status' => 'Failed',
            //     'message' => $e->getMessage(),
            //     //'message' => 'User Registration Not Successfull'
            // ], 401); 
        }

        

    }


}

