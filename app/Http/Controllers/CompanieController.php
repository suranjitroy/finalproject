<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $all_data = Companie::all();

      
        return view('admin.companie',[
            'datas' => $all_data,
            'title' => 'Companie Registration',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

        Companie::create( $request->input() );

        return redirect()->back()->with('message','Company Deatil Created Successfull');

        // return response()->json([
        //     'status' => 'Success',
        //     'message' => 'Company Name Created Successfully'
        // ],200);

        }catch( Exception $e){
        return redirect()->back()->with('delete-message','Company Detail Not Created');
        //   return response()->json([
        //     'status' => 'Failed',
        //      'message' => $e->getMessage(),
        //     //'message' => 'Company Name Not Created'
        // ],401);
  
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
    public function edit(Companie $companie)

    {
        return view('admin.companieedit',[
            'title' => 'Company Registration Edit',
            'data'  => $companie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Companie $companie)
    {
        $companie->update( $request->input() );

        return redirect()->route('companyinfo')->with('message','Company Name Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companie $companie)
    {
        
        //dd($companie);
        $companie->delete();
        return redirect()->route('companyinfo')->with('delete-message','Company Name Deleted Successfully!');
    }
        public function admindash(){
        return view('admin.index');
    }
    public function userProfile(Request $request){

        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();
       return view('admin.index',[
        'data' => $user
       ]);


    }
}
