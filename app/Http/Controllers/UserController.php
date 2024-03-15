<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Helper\JWTToken;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function userLogin(Request $request){
 
        $count = User::where('email','=',$request->input('email'))
              ->where('password','=',$request->input('password'))
              ->count();

        if($count==1){

            $token = JWTToken::CreateToken( $request->input('email') );
            // return response()->json([
            //     'status' => 'Success',
            //     'message' => 'User Login Successfully',
                
            // ])->cookie('token',$token, 60*24*30);
            return redirect()->route('dash')->with('message','User Login Successfull')->cookie('token',$token, 60*24*30);
        }else{
            
            // return response()->json([
            //     'status' => 'failed',
            //     'message' => 'Unauthorized'
            // ]);
            return redirect()->back()->with('delete-message','Unauthorized!');
        }

    }  
    public function userLogout(){
        

        // return response()->json([
        //     'status' => 'Success'
        // ]);
return redirect()->route('admin.user.log')->cookie('token', '', -1);

    } 



  

}
