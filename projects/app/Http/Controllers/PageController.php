<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Result;
use App\Models\VotedAds;
use Illuminate\Http\Request;
use Auth;
use App\Models\NewsLetter;
use App\Models\Cms;
use Mail;
use App\Helper\Upload;
use ModelHelper;
use Helper;
use DB;
use MailHelper;
use LiveCart;
use Session;
use Response;
use App\Models\Blogs\Blog;
use App\Models\Blogs\BlogCategory;
use App\Models\ContactusRequest;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Property;
use App\Models\Location;
use App\Models\Attraction;
use App\Models\Deal;


use App\Models\Brand;
use App\Models\Collection;
use App\Models\Manufacture;
use App\Models\Store;
use App\Models\Country;
use App\Models\Career;
use App\Models\CareerCategory;
use App\Models\Domainfeedback;
use App\Models\ServiceData;
use App\Models\CmsData;
use App\Models\Weoffer;

use Image;
use Validator;

class PageController extends Controller
{

    function careerCategorList()
    {
        $data = new \stdClass();
        $data->title = "Job Category ";
        $data->meta_title = "Job Category ";
        $data->meta_keywords = "Job Category ";
        $data->meta_description = "Job Category ";
        return view("front.career.careerCategorList", compact("data"));
    }
    public function commingsoon()
    {
        return view('front.comingsoon');
    }

    function domainfeedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'contactnumber' => 'required',
            'image' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        $data = $request->except(["_token"]);
        if ($request->hasFile("image")) {
            $ext = $request->file("image")->getClientOriginalExtension();
            $file_name = uniqid() . "." . $ext;
            $request->file("image")->move(public_path('uploads'), $file_name);
            $data['image'] = 'uploads/' . $file_name;
        }
        $data = Domainfeedback::create($data);
        return redirect()->back()->with("success", "Thank you for sending your query, Our expert contact soon");
    }

    function careerDetail($id)
    {
        $data = Career::where("id", $id)->first();
        if ($data) {
            return view("front.career.common", compact("data"));
        }
        return abort(404);
    }

    function careerCategoryList($seo_url)
    {
        $data = CareerCategory::where("seo_url", $seo_url)->first();
        if ($data) {
            return view("front.career.careerCategoryList", compact("data"));
        }
        return abort(404);
    }

    function singleProduct($seo_url)
    {
        $data = Location::where("seo_url", $seo_url)->first();
        if ($data) {
            return view("front.products.common", compact("data"));
        }
        return abort(404);
    }



    function reviewSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => "required",
            "message" => "required"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        Testimonial::create($request->all());
        return redirect()->back()->with("success", "Thank you for submitting your review");
    }

    function productDetailPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => "required",
            "message" => "required",
            "product_id" => "required",
            "product_name" => "required",
            "mobile" => "required"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        ProductEnquiryNow::create($request->all());
        return redirect()->back()->with("success", "Thank you for submitting your enquiry");
    }

    function contactPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => "required",
            "message" => "required|min:10"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }

        ContactusRequest::create($request->all());
        $mailData = ["type" => "thank_you_for_feedback_user", 'username' => $request->name, "to" => $request->email];
        MailHelper::emailSender($mailData);
        $mailData = [
            "type" => "feedback_admin",

            'username' => $request->name,
            'companyname' => $request->company_name,
            'useremail' => $request->email,
            'usermobile' => $request->mobile,
            'usermessage' => $request->message,
            "to" => ModelHelper::getDataFromSetting('contact_us_receiving_mail')
        ];
        MailHelper::emailSender($mailData);
        return redirect()->back()->with("success", "Thank you for submitting your query, we will get in touch shortly");

    }


    function adsPost(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'brand' => "required",
            "description" => "required|min:10|max:250"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        $user = \Illuminate\Support\Facades\Auth::guard('employee')->user();
        if (!$user) {
            return redirect()->route('employee.login');
        }
        /*        if($request->hasFile("image")){
                    $ext=$request->file("image")->getClientOriginalExtension();
                    $file_name=uniqid().".".$ext;
                    $request->file("image")->move(public_path('ads'),$file_name);
                    $filename='uploads/'.$file_name;
                }*/
        if ($request->hasFile("image")) {
            $image = Upload::fileUpload($request->file("image"), "ads");
        }

        Service::create([
            'user_id' => $user->id,
            'category_id' => $request->category_id,
            'brand' => $request->brand,
            'campaign_name' => $request->campaign_name,
            'link_work' => $request->link_work,
            'description' => $request->description,
            'image' => $image ?? '',
        ]);

        /* $mailData=["type"=>"thank_you_for_feedback_user",'username'=>$request->name,"to"=>$request->email];
         MailHelper::emailSender($mailData);
         $mailData=[
             "type"=>"feedback_admin",

             'username'=>$request->name,
             'companyname'=>$request->company_name,
             'useremail'=>$request->email,
             'usermobile'=>$request->mobile,
             'usermessage'=>$request->message,
             "to"=>ModelHelper::getDataFromSetting('contact_us_receiving_mail')
         ];
         MailHelper::emailSender($mailData);*/
        return redirect()->back()->with("success", "Thank you for submitting your query, we will get in touch shortly");

    }


    function newsletterPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email'
        ]);
        if ($validator->fails()) {
            // return  response()->json(["status"=>400,"message"=>$validator->errors()->first()]);
        }
        $data = NewsLetter::where("email", $request->email)->first();
        if ($data) {
            // return  response()->json(["status"=>400,"message"=>'Already subscribe']);
            return redirect()->back()->with("danger", "This Email Is Already Taken");

        } else {
            NewsLetter::create(["email" => $request->email]);
            $mailData = [
                "type" => "newsletter",
                'useremail' => $request->email,
                "to" => ModelHelper::getDataFromSetting('contact_us_receiving_mail')
            ];
            MailHelper::emailSender($mailData);
            return redirect()->back()->with("success", "Thank you for subscribe");

            // MailHelper::emailSender($mailData);
            // return  response()->json(["status"=>200,"message"=>'Thank you for subscribe']);
        }
    }


    function categoryData($seo)
    {
        $data = BlogCategory::where("seo_url", $seo)->first();
        if ($data) {
            $blogs = Blog::where("publish", "published")->where("status", "active")->where("blog_category_id", $data->id)->orderBy("id", "desc")->paginate(12);
            return view("front.group.category", compact("data", "blogs"));
        }
        return abort(404);
    }

    function blogSingle($seo_url)
    {
        $data = Blog::where("publish", "published")->where("status", "active")->where("seo_url", $seo_url)->first();
        if ($data) {
            $category = BlogCategory::find($data->blog_category_id);
            return view("front.group.single", compact("data", "category"));
        }
        return abort(404);
    }


    function servicesdetails($seo_url)
    {
        $data = Service::where("publish", "published")->where("seo_url", $seo_url)->first();
        if ($data) {
            return view("front.static.career-tips", compact("data"));

        }
        return abort(404);
    }
    function casestudiesdetails($seo_url)
    {

        $data = Location::where("publish", "published")->where("seo_url", $seo_url)->first();
        // var_dump($data->parentname->seo_url); die('dd');
        if ($data) {

            if ($data->parentname->seo_url == 'real-estate') {
                return view("front.static.case-studies-real-estate", compact("data"));
            } elseif ($data->parentname->seo_url == 'venture-development') {
                return view("front.static.case-studies-venture-development", compact("data"));
            } elseif ($data->parentname->seo_url == 'strategic-advisory') {
                return view("front.static.case-studies-strategic-advisory", compact("data"));
            }
        }
        return abort(404);
    }


    function whatweofferdetails($seo_url)
    {
        $data = Weoffer::where("publish", "published")->where("seo_url", $seo_url)->first();
        if ($data) {

            return view("front.group.singleofferdetails", compact("data"));
        }
        return abort(404);
    }





    public function index(Request $request)
    {
        $data = Cms::where("seo_url", 'home')->first();
        if ($data) {
            if ($data->templete == "home") {
                $templete = "front.static." . $data->templete;
                return view($templete, compact("data"));
            }
        }
        return abort(404);
    }
    public function dynamicDataCategory(Request $request, $seo_url = null)
    {

        if ($seo_url == "home") {
            return redirect("/");
            //  return redirect()->route('front-home');
        }

       

        $data = Cms::where("seo_url", $seo_url)->first();
        if ($seo_url == "user-login") {
            //     pre(Auth::guard('employee')->user());
            

            if (!\Illuminate\Support\Facades\Auth::guard('employee')->check()) {
                // return redirect('/user-login');
                $templete = "front.static.login";
                return view($templete, compact("data"));
            }
        }


         if (isset($request->roll_no)) {
            // return $request;
            $data = Cms::where("seo_url", "result")->first();
            $user = Customer::where("roll_no", $request->roll_no)
                ->where("name", $request->name)
                ->where("father_name", $request->father_name)
                ->first();

            if ($user) {
                $resultData = Result::where("user_id", $user->id)->get();
                return view("front.static.result", compact("data", "user", "resultData"));
            } else {
                return view("front.static.result", compact("data"));
            }
        }
        

        if ($data) {

            $templete = "front.static." . $data->templete;


            // if ($data->templete == "result") {
            //     return view($templete, compact("data"));
            // }

            if ($data->templete == "blogs") {
                $blogs = Blog::where("publish", "published")->where("status", "active")->orderBy("id", "desc")->paginate(12);
                return view($templete, compact("data", "blogs"));
            }

            if ($data->templete == "company-form") {
                $categories = Deal::where('publish', 'published')->get();

                return view($templete, compact("data", "categories"));

            }
            return view($templete, compact("data"));
        }

        $data = Location::where("seo_url", $seo_url)->first();
        if ($data) {
            $templete = "front.static.category." . $data->templete;
            return view($templete, compact("data"));
        }



        return abort(404);
    }

    public function companyads(Request $request, $seo_url)
    {
        $data = Deal::where("seo_url", $seo_url)->where('publish', 'published')->first();
        if ($data) {
            $services = Service::where('category_id', $data->id)->where('publish', 'published')->get();

            $templete = "front.static.company-video";
            return view($templete, compact("data", 'services'));
        }
        return abort(404);
    }
    public function storevote(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::guard('voter')->user();
        if (!$user) {
            return redirect()->route('voter.login');
        }
        $check_vote = VotedAds::where('user_id', $user->id)->where('ads_id', $request->ads_id)->first();
        if ($check_vote) {
            return redirect()->to('category')->with("danger", 'Already voted for this ad');
        }
        VotedAds::create([
            'user_id' => $user->id,
            'ads_id' => $request->ads_id,
            'category_id' => $request->category_id,
        ]);

        return redirect()->to('vote/success')->with('success', 'successfully voted');
    }

    public function votesuccess(Request $request)
    {
        $data = new \stdClass();
        $data->title = "Success";
        $data->meta_title = "Success ";
        $data->image = " ";
        $data->meta_keywords = "Success ";
        $data->meta_description = "Success ";
        return view('front.static.success', compact('data'));
        // return redirect()->to('vote/success')->with('success','successfully voted');
    }

    public function notfound()
    {
        return view("errors.404");
    }

    function sitemap()
    {
        return response()->view("front.sitemap")->header('Content-Type', 'text/xml');
    }
}