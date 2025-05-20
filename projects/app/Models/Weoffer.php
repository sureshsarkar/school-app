<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weoffer extends Model
{
    public $table = "weoffers";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		
		'description',
		'image',
		'type',
		'seo_url',
		
		'is_home',
		
		'publish',

		'ordering',

    ];

    public static $rules = [
        // create rules
    ];

   
}

