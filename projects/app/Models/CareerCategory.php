<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    public $table = "career_categories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
            'title',
        'seo_url',
        'image',
        'shortDescription',
        'benefits',
        'longDescription',
        'description',
        'isHome',

        'icon',

        'publish',
        'isParent',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'bannerImage',
        'ordering',
        'templete',
        'head_section',
        'form_heading',
        'form_paragraph',
        'infographics'


    ];
public function jobs(){
     return $this->hasMany(Career::class, 'category', 'id');
}
}
