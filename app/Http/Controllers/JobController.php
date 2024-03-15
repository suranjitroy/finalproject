<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Job;
use App\Models\Companie;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $all_data = Job::with('companie','companycategory')->get();

        return view('admin.joblist',[
            'datas' => $all_data,
            'title' => 'Job List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companieData = Companie::all();
        $categoyData = CompanyCategory::all();

        return view('admin.job',[
            'title'=> 'Job Entry',
            'companies'  => $companieData,
            'categories' => $categoyData
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $job = $request->validate([
                'job_name' =>'required',
                'job_position' =>'required',
                'job_description' =>'required',
                'skills' =>'required',
                'education' =>'required',
                'location' =>'required',
                'time' =>'required',
                'salary' =>'required',
                'company_info' =>'required',
                'company_id' =>'required',
                'category_id' =>'required'

            ]);
            
            Job::create( $job );

            //dd( $request->input());
           
            return redirect()->back()->with('message', 'Job Submission Successfull!');

        }catch(Exception $e){
        //        return response()->json([
        //     'status' => 'Failed',
        //      'message' => $e->getMessage(),
        //     //'message' => 'Company Name Not Created'
        // ],401);

        return redirect()->back()->with('delete-message', 'Job Submission Not Successfull!');
        }
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $companieData = Companie::all();
        $categoyData = CompanyCategory::all();

        return view('admin.jobedit',[
            'title' => 'Job Edit',
            'data' => $job,
            'jobcom' => $job->companie,
            'jobcat' => $job->companycategory,
            'companies'  => $companieData,
            'categories' => $categoyData
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
       
        try{

            $data = $request->validate([
                'job_name' =>'required',
                'job_position' =>'required',
                'job_description' =>'required',
                'skills' =>'required',
                'education' =>'required',
                'location' =>'required',
                'time' =>'required',
                'salary' =>'required',
                'company_info' =>'required',
                'company_id' =>'required',
                'category_id' =>'required'

            ]);
            
            $job->update( $data );

            //dd( $request->input());
           
            return redirect()->back()->with('message', 'Job Update Successfull!');

        }catch(Exception $e){
        //        return response()->json([
        //     'status' => 'Failed',
        //      'message' => $e->getMessage(),
        //     //'message' => 'Company Name Not Created'
        // ],401);

        return redirect()->back()->with('delete-message', 'Job Update Not Successfull!');
        }




        // try{
        //     $job->update( $request->input() );
        //     return redirect()->back()->with('message', 'Job Updated Successfully!');
        // }
        // catch(Exception $e){
        //     return redirect()->back()->with('delete-message', 'Job Updated Not Successfull!');
        // }
        

        //dd($companycategory->id);

        
        //return redirect()->route('bloginfo')->with('message','Blog Update Sccueessfully!' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->back()->with('delete-message', 'Job Deleted Successfull!');
    }

    // function datatest(Request $request){

    //     $input = $request->all();
    //     dd($input);
    //     //return Job::with('test')->get();
    // }
    public function job(){

        $all_data = Job::with('companie','companycategory')->get();

        return view('pages.jobs',[
            'datas' => $all_data,
            'title' => 'Job List'
        ]);
    }


}
