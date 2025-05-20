<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class CareerEnquiry extends Model

{

    public $table = "career_enquiry";



    public $primaryKey = "id";



    public $timestamps = true;



    public $fillable = [

		'id',
	    'name',
		'email',
        'contactnumber',
        'message',
        'image',
        'job_id'
    ];



    public static $rules = [

        // create rules

    ];



}

