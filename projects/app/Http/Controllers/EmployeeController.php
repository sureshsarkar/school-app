<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index(){
    
        $data=new \stdClass();
        $data->title="Student Profile ";
        $data->meta_title="Student Profile";
        $data->meta_keywords="Student Profile";
        $data->meta_description="Student Profile";
        $user= Auth::guard('employee')->user();

        return view('front.user.profile',compact('user','data'));
    }


       public function syllabus(){
    
        $data=new \stdClass();
        $data->title="Student Syllabus";
        $data->meta_title="Student Syllabus";
        $data->meta_keywords="Student Syllabus";
        $data->meta_description="Student Syllabus";
        $user= Auth::guard('employee')->user();

        return view('front.user.syllabus',compact('user','data'));
    }

}
