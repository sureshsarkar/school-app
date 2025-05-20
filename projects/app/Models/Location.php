<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table = "locations";

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
		'attraction_image',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'templete',
		'bannerImage',
		'cta_image',
		'cta_description',
		'cta_title',

		'cta_anchor',
		'publish',

		'header_section',
		'footer_section',
		'is_parent',
		'ordering',
		'is_home',
		'broucher',
        'parent_id',
        'created_at'

    ];

    public static $rules = [
        // create rules
    ];

    // Cm

    public function getCreatedAtAttribute($date)
    {
        return $this->attributes['created_at'] = Carbon::parse($date)->format('F d, Y');
    }
    public function parentname(){
        return $this->belongsTo(Location::class,'parent_id','id');
    }
    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
}

