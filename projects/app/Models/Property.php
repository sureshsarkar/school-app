<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public $fillable=[
        "name",
            "seo_url",
            "heading",
            "price",
      
            'location_id',
            "mobile",
            "email",
            "website",
            "short_description",
            "long_description",
            "description",

         

         
            "feature_image",
            "banner_image",
           


            "status",
            "meta_title",
            "meta_keywords",
            "meta_description",
            "header_section",
            "footer_section",
            "website",


         
            'is_trending',



            "discounted_price",
            'country_id',
            'collection_id',
            'brand_id',
            'manufacture_id',
            'store_id',

            'product_type',
            'coupon_code',
            'affiliate_url',
            'start_date',
            'end_date',
            'verified_on',
            'badge_text',
            'no_of_use',
        'ordering',
        'exclusive',
        'brand'
          

      
    ];

    public function country(){
        return $this->belongsTo(\App\Models\Country::class,"country_id","id");
    }
    public function store(){
        return $this->belongsTo(\App\Models\Store::class,"store_id","id");
    }
    public function collection(){
        return $this->belongsTo(\App\Models\Collection::class,"collection_id","id");
    }
    public function category(){
        return $this->belongsTo(\App\Models\Location::class,"location_id","id");
    }
}
