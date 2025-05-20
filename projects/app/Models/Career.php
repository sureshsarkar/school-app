<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public $table = "careers";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'title',
        'seo_url',
        'company',
        'emp_type',
        'skill_id',
        'location',
        'address',
        'map',
        'pincode',
        'no_of_position',
        'image',
        'bannerImage',
        'publish',
        'category',
        'exp_year_from',
        'exp_year_to',
        'salary_from',
        'salary_to',
        'start_date',
        'end_date',
        'contact',
        'website',
        'email',
        'is_featured',
        'shortDescription',
        'mediumDescription',
        'longDescription',
        'description',
       'meta_title',
		'meta_keywords',
		'meta_description',
    ];

    public function categories(){
        return $this->belongsTo(CareerCategory::class,'category');
    }
    public function locations(){
        return $this->belongsTo(Deal::class,'location');
    }



}

