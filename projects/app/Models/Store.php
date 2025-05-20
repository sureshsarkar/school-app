<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $table = "stores";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
	
		'long_description',
		'description',
		'image',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'is_home',
		'bannerImage',
		'publish',

		'header_section',
		'footer_section',
		'country_id',
		'ordering',
		'store_affilate_url',
		'is_popular'

    ];

    public static $rules = [
        // create rules
    ];

    
    public function country(){
        return $this->belongsTo(\App\Models\Country::class,"country_id","id");
    } 
}

