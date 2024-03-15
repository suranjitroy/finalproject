<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $all_data = Job::with('companie','companycategory')->get();
        // $category = CompanyCategory::all();
        // $companie = Companie::all();
        $all_data = Blog::all();

        return view('pages.blogs',[
            'datas' => $all_data,
            'title' => 'All Blogs',
            // 'categories' => $category,
            // 'companies' => $companie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $all_data = Blog::all();

        

        return view('admin.blog',[
            'datas' => $all_data,
            'title' => 'Blog Entry',
            
        ]);

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            Blog::create( $request->input() );

            return redirect()->back()->with('message','Blog Publised Successfully');

            // return response()->json([
            //     'status' => 'Success',
            //     'message' => 'Blog Publised Successfully'
            // ]);

        }catch(Exception $e){

            return response()->json([
                'status' => 'Success',
                'message' => $e->getMessage(),
                //'message' => 'Blog Not Publised'
            ]);

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
    public function edit(Blog $blog)
    {


        return view('admin.blogedit',[
            'title' => 'Blog Edit',
            'data'  => $blog
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        
        $blog->update( $request->input() );

        return redirect()->back()->with('message','Blog Update Sccueessfully!' );



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('delete-message','Blog Deleted Successfully!');
    }
}
