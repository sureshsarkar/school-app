<?php
namespace App\Http\Controllers;
use App\Models\Career;
use App\Models\CareerCategory;
use App\Models\CareerEnquiry;
use App\Models\Deal;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Helper\Upload;
use ModelHelper;
use Helper;
use DB;
use MailHelper;
use LiveCart;
use Session;
use Response;
use Image;
use Validator;

class JobController extends Controller
{
    public function latestjob(Request $request,$cat_seo_url=''){
        $data=new \stdClass();
        $data->title="Job Category ";
        $data->meta_title="Job Category ";
        $data->meta_keywords="Job Category ";
        $data->meta_description="Job Category ";
$latestjob=Career::where(function ($query) use($request) {
    $query->where('company', 'like', '%' . $request->keywords . '%')
        ->orWhere('address', 'like', '%' . $request->keywords . '%')
        ->orWhere('description', 'like', '%' . $request->keywords . '%');
})->with(['categories','locations']);
        if($request->category>0) {
            $latestjob = $latestjob->whereHas('categories', function ($query) use ($request) {
                $query->where('id', $request->category);
            });
        }
        if($request->location>0) {
            $latestjob = $latestjob->whereHas('locations', function ($query) use ($request) {
                $query->where('id', $request->location);
            });
        }
        if($cat_seo_url){
            $category=CareerCategory::where('seo_url',$cat_seo_url)->first();
            $latestjob = $latestjob->whereHas('categories', function ($query) use ($category) {
                $query->where('id', $category->id);
            });
        }
        $latestjob = $latestjob->where('publish','published')->orderBy('id','desc')->paginate(10);


        $locations= Deal::where('publish','published')->orderBy('title','asc')->get();
        $categories= CareerCategory::where('publish','published')->orderBy('title','asc')->get();
        return view("front.career.latest-jobs",compact("data","latestjob",'locations','categories'));
    }



    public function featuredjob(Request $request){
        $data=new \stdClass();
        $data->title="Job Category ";
        $data->meta_title="Job Category ";
        $data->meta_keywords="Job Category ";
        $data->meta_description="Job Category ";
        $featuresjob=Career::where(function ($query) use($request) {
            $query->where('company', 'like', '%' . $request->keywords . '%')
                ->orWhere('address', 'like', '%' . $request->keywords . '%')
                ->orWhere('description', 'like', '%' . $request->keywords . '%');
        })->with(['categories','locations']);
if($request->category>0) {
    $featuresjob = $featuresjob->whereHas('categories', function ($query) use ($request) {
        $query->where('id', 'LIKE', '%' . $request->category . '%');
    });
            }
        if($request->location>0) {
            $featuresjob = $featuresjob->whereHas('locations', function ($query) use ($request) {
                $query->where('id', 'LIKE', '%' . $request->location . '%');
            });
        }
        $featuresjob = $featuresjob->where('publish','published')->orderBy('id','desc')->where('is_featured',1)->paginate(12);
       $locations= Deal::where('publish','published')->orderBy('title','asc')->get();
       $categories= CareerCategory::where('publish','published')->orderBy('title','asc')->get();
        return view("front.career.features-job",compact("data","featuresjob",'locations','categories'));
    }

    public function jobdetails(Request $request,$job_seo_url){

        $job=Career::with(['categories','locations'])->where('seo_url',$job_seo_url)->where('publish','published')->first();
        $data=new \stdClass();
        $data->title=$job->title;
        $data->meta_title=$job->meta_title;
        $data->meta_keywords=$job->meta_keywords;
        $data->meta_description=$job->meta_description;

        $locations= Deal::where('publish','published')->orderBy('title','asc')->get();
        $categories= CareerCategory::where('publish','published')->orderBy('title','asc')->get();
        $similarjobs=Career::with(['categories','locations'])->where('category',$job->category)->where('publish','published')->limit(8)->get();
        return view("front.career.job-details",compact("data","job",'locations','categories','similarjobs'));
    }

    public function applynow(Request $request,$job_seo_url){
        $job=Career::with(['categories','locations'])->where('seo_url',$job_seo_url)->where('publish','published')->first();
        $data=new \stdClass();
        $data->title=$job->title;
        $data->meta_title=$job->meta_title;
        $data->meta_keywords=$job->meta_keywords;
        $data->meta_description=$job->meta_description;
        return view("front.career.apply-form",compact("data","job"));
    }

    function careerenquiry(Request $request,$jobid){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'contactnumber' => 'required|min:10|numeric',
            'image'=>'required|mimes:pdf,doc,docx,txt,png,jpeg,jpg'
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $data=$request->except(["_token"]);
        if($request->hasFile("image")){
            $ext=$request->file("image")->getClientOriginalExtension();
            $file_name=uniqid().".".$ext;
            $request->file("image")->move(public_path('uploads'),$file_name);
            $data['image']='uploads/'.$file_name;
        }
        $data['job_id']=$jobid;
        $data=CareerEnquiry::create($data);
        return redirect()->back()->with("success","Thank you for sending your query, Our expert contact soon");
    }
}
