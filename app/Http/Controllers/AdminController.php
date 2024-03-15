<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function headmenu(Request $request){
        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();
        return view('header-menu',[
            'data' => $user
       ]);
    }
}
