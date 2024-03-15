<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
   // use HasFactory;

    protected $fillable = [
    'job_name',
    'job_position',
    'job_description',
    'skills',
    'education',
    'location',
    'time',
    'salary',
    'company_info',
    'company_id',
    'category_id'];

    protected $casts = [
        'skills' => 'array'
    ];

   public function companie(){
        return $this->belongsTo( Companie::class, 'company_id' );
    }
    public function companycategory(){
        return $this->belongsTo( CompanyCategory::class, 'category_id' );
    }

    // public function test(){
    //     return $this->belongsTo(CompanyCategory::class, 'category_id');
    // }

}
