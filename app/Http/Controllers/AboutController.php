<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    //About Page

    public function aboutpage(){

        $about = About::get()->first();
        return view('pages.about', [
            'data' => $about
        ]);
    }

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

        $about = About::all();   
        return view('admin.about',[
            'datas' => $about,
            'title' => 'Blog Entry' 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            About::create( $request->input() );

            return redirect()->back()->with('message', 'About info Successfully');
        }catch(Exception $e){
            return redirect()->back()->with('delete-message', 'About info NotSuccessfully');
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
    public function edit(About $about)
    {

        

        //dd( $about );
        return view('admin.aboutedit',[
            'title' => 'About Edit',
            'datas'  => $about,
            'data'  => $about->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about->update( $request->input() );
        return redirect()->route('admin.about.create')->with('message','About info Update Sccueessfully!' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
