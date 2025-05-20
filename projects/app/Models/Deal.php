<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public $table = "deals";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
		'description',
		'image',
		'type',

		'is_home',

		'publish',

		'ordering',

    ];

    public static $rules = [
        // create rules
    ];


}

