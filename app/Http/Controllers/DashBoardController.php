<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{

    // public function show(){

    //         return view('admin.index');
    // }

    public function userProfile(Request $request){

        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();
        
         return view('admin.index',[
        'data' => $user
       ]);


    }
    // public function headmenu(Request $request){
    //     $email = $request->header('email');
    //     $user = User::where('email', '=', $email)->first();
    //     return view('header-menu',[
    //         'data' => $user
    //    ]);
    // }



}
