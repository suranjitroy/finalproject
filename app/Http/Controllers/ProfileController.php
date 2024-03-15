<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // public function userRegistration(Request $request){

    //     try{

    //         Profile::create( $request->input() );

    //         return response()->json([
    //             'status' => 'Success',
    //             'message' => 'User Registration Successfull'
    //         ], 200);

    //     }catch(Exception $e){
    //         return response()->json([
    //             'status' => 'Failed',
    //             'message' => $e->getMessage()
    //         ], 401); 
    //     }
        
    // }

    // public function userRegister(Request $request){

    //     $profile =  Profile::all();
    //     $status = 'Failed';
    //     return view('test',[
    //         'datas' => $profile,
    //         'status' => $status
    //     ]);
    // }

    public function show(Request $request){



        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();
       
        
         return view('admin.profile',[
        'data' => $user
       ]);


    }

}
