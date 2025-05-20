<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = "countries";

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
		'ordering'

    ];

    public static $rules = [
        // create rules
    ];

    // Cm 
}

