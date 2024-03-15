<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;

class CompanieCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_category = CompanyCategory::all();
        return view('admin.category',[
            'title' => 'Category Entry',
            'datas' => $all_category

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            CompanyCategory::create( $request->input() );

            return back()->with('message','Company Category Created Successfully');
            

            // return response()->json([
            //     "status" => "Success",
            //     "message" => "Company Category Created Successfully"
            // ]);
        }catch(Exception $e){
            return back()->with('delete-message','Company Category Not Successfully');
            // return response()->json([
            //     "status" => "Faile",
            //     "message" => "Company Category Not Created"
            // ]);
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
    public function edit(CompanyCategory $companycategory)
    {
        //$all_category = CompanyCategory::all();
        
        return view('admin.categoryedit',[
            'title' => 'Ctegory Edit',
            'data' => $companycategory,
            //'datas' => $all_category
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyCategory $companycategory)
    {
        $companycategory->update( $request->input() );

        //dd($companycategory->id);

        return redirect()->route('categoryinfo')->with('message', 'Category Updated Successfully!');
        //return redirect()->route('bloginfo')->with('message','Blog Update Sccueessfully!' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
