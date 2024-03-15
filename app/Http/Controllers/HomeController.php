<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\About;
use App\Models\Companie;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;

class HomeController extends Controller
{
    public function homepage(){

        $all_data = Job::with('companie','companycategory')->get();
        $category = CompanyCategory::all();
        $companie = Companie::all();
        $about = About::get()->first();

        return view('pages.index',[
            'datas' => $all_data,
            'title' => 'Job List',
            'categories' => $category,
            'companies' => $companie,
            'data' => $about
        ]);
    }


}
