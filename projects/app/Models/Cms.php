<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    public $table = "cms";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		'shortDescription',
		'mediumDescription',
		'longDescription',
		'description',
		'image',
		'image2',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'templete',
		'bannerImage',
		'publish',
		'is_parent',
		'longDescriptiontwo',
		'longDescriptionthree',
		'longDescriptionfour',

		'header_section',
		'footer_section',
		'cta_description'

    ];

    public static $rules = [
        // create rules
    ];

    // Cm 
}

