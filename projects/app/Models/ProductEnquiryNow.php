<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductEnquiryNow extends Model
{
    public $table = "product_enquiry_now_requests";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'email',
		'mobile',
        'message',
        'product_id',
        'product_name',
      
		

    ];

    public static $rules = [
        // create rules
    ];

    // Cm 
}

