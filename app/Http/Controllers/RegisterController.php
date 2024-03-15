<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
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
        try{

            User::create( $request->input() );

            return redirect()->back()->with('message','User Registration Successfull');

            // return response()->json([
            //     'status' => 'Success',
            //     'message' => 'User Registration Successfull'
            // ], 200);

        }catch(Exception $e){
            return redirect()->back()->with('delete-message','Unauthorized! Please Register');
            // return response()->json([
            //     'status' => 'Failed',
            //     'message' => $e->getMessage(),
            //     //'message' => 'User Registration Not Successfull'
            // ], 401); 
        }
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
    
}
