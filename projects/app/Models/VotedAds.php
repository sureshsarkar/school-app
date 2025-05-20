<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VotedAds extends Model
{
    public $table = "voted_ads";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
        'id',
        'user_id',
        'category_id',
        'ads_id',

    ];

    public static $rules = [
        // create rules
    ];

}

