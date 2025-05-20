<?php
namespace App\Helper;


use App\Models\Agent;
use Auth;
use DB;
use File;

use ModelHelper;
use LiveCart;
use App\Models\BasicSetting;
use App\Models\PropertyRate;
use App\Models\Property;
use App\Models\Location;
use App\Models\Country;


use App\Models\PropertyGallery;
use App\Models\Blogs\BlogCategory;

use App\Models\Brand;
use App\Models\Collection;
use App\Models\Manufacture;
use App\Models\Store;


use App\Models\CareerCategory;


use App\Models\Cms;




use Request;
use Session;
/**
 * Class Helper
 * @package App\Helper
 */
class Helper{

	function pageSession($page){
		if($page=="home"){
			if(is_null(Request::segment(1))){
			    dd("gau");
			    $id=ModelHelper::getDataFromSetting('default_country');
			}
		}else{
			$id=$page;
		}
		$country=Country::find($id);
		//dd($country);
		Session()->put("country_id",$country->id);
		Session()->put("country_seo",$country->seo_url);
		Session()->put("country_name",$country->title);
		//dd(Session()->get('country_id'));
	}

	function getSessionCountry(){
		if(Session()->has('country_id')){
			if(ModelHelper::getDataFromSetting('default_country')==Session()->get('country_id')){
				return '';
			}
			return Session()->get('country_seo').'/';
		}else{
			return '';
		}
	}

	function getDateDataAcToDate($date){
		$current_date=date('Y-m-d');
		$current_time=strtotime($current_date);


		$date_time=strtotime($date);

		if($date_time<$current_time){
			return "Expired";
		}

		$ten_days=strtotime("+ 10 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 10 days";
		}

		$ten_days=strtotime("+ 9 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 9 days";
		}

		$ten_days=strtotime("+ 8 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 8 days";
		}

		$ten_days=strtotime("+ 7 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 7 days";
		}

		$ten_days=strtotime("+ 6 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 6 days";
		}

		$ten_days=strtotime("+ 5 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 5 days";
		}

		$ten_days=strtotime("+ 4 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 4 days";
		}

		$ten_days=strtotime("+ 3 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 3 days";
		}

		$ten_days=strtotime("+ 2 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in 2 days";
		}

		$ten_days=strtotime("+ 1 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring in Tomorrow";
		}

		$ten_days=strtotime("+ 0 days",$current_time);
		if($ten_days==$date_time){
			return "Expiring Today";
		}
		$ten_days=strtotime("+ 10 days",$current_time);
		if($ten_days<=$date_time){
			return " Valid till ".date('d F, Y',$date_time);
		}
	}

	function getCategoryCountAcToStore($store){
		$data=[];
		$ar=Property::select("location_id");

		$ar->whereHas("store",function($q){
            $q->where(["publish"=>"published"]);
        });

		$ar=$ar->where("store_id",$store)->distinct()->get();
		foreach($ar as $a){
			$data[]=$a->location_id;
		}
		return $data;
	}
	function getStoreCountAcToCategory($cat){
		$data=[];
		$ar=Property::select("store_id");

		$ar->whereHas("store",function($q){
            $q->where(["publish"=>"published"]);
        });

		$ar=$ar->where("location_id",$cat)->distinct()->get();
		foreach($ar as $a){
			$data[]=$a->store_id;
		}
		//dd($data);
		return $data;
	}

	function metaGenerationWithAllData($request){
		$data=$request->all();
		if(isset($request->name)){
			$name=$request->name;
		}else{
			$name=$request->title;
		}
		if($request->meta_keywords){
		 	$data['meta_keywords']=$request->meta_keywords;
		}else{
            $data['meta_keywords']=$name;
        }
        if($request->meta_description){
        	$data['meta_description']=$request->meta_description;
        }else{
            $data['meta_description']=$name;
        }
        if($request->meta_title){
        	$data['meta_title']=$request->meta_title;
        }else{
            $data['meta_title']=$name;
        }
        return $data;
	}

    function deleteFile($file){
        if($file){
            $image_path = public_path("{$file}");
           // dd($image_path);
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }
    }

	function checkStatus($item){
		if($item=="true"){
			return '<i class="fa fa-check"></i>';
		}else{
			return '<i class="fa fa-times"></i>';
		}
	}


	function languageChanger($lan){
		Session::put("current_language",$lan);
	}

	function getPropertyStatus(){
		return [
			"Available"=>"Available",
			"No Available"=>"No Available",
			"Rented"=>"Rented",
			"Trending"=>"Trending",
			"Sale"=>"Sale"
		];
	}

    function getShippingHelper($key){
        $ar=[
            "0"=>"New",
            "1"=>"AWB Assigned",
            "2"=>"Label Generated",
            "3"=>"Pickup Scheduled/Generated",
            "4"=>"Pickup Queued",
            "5"=>"Manifest Generated",
            "6"=>"Shipped",
            "7"=>"Delivered",
            "8"=>"Cancelled",
            "9"=>"RTO Initiated",
            "10"=>"RTO Delivered",
            "11"=>"Pending",
            "12"=>"Lost",
            "13"=>"Pickup Error",
            "14"=>"RTO Acknowledged",
            "15"=>"Pickup Rescheduled",
            "16"=>"Cancellation Requested",
            "17"=>"Out For Delivery",
            "18"=>"In Transit",
            "19"=>"Out For Pickup",
            "20"=>"Pickup Exception",
            "21"=>"Undelivered",
            "22"=>"Delayed",
            "23"=>"Partial_Delivered",
            "24"=>"Destroyed",
            "25"=>"Damaged",
            "26"=>"Fulfilled",
            "38"=>"Reached at Destination",
            "39"=>"Misrouted",
            "40"=>"RTO NDR",
            "41"=>"RTO OFD",
            "42"=>"Picked Up",
            "43"=>"Self Fulfilled",
            "44"=>"DISPOSED_OFF",
            "45"=>"CANCELLED_BEFORE_DISPATCHED",
            "46"=>"RTO_IN_TRANSIT"
        ];
        if(isset($ar[$key])){
            return $ar[$key];
        }
        return $key;
    }


	function getInstaFeed(){
	    $token = 'IGQVJXS04tRmlqbHFySnEzeGhDWXZA2VjVUTHRmcXQ5LW1WcHBtOXBfeWtWU1Ywc2R1cEI5Tkc1LTlpdzBNbFZAULVUzcmFkbzg5b0tBZAUNJUFp3Y3ppd01PVFc1N3llVkFQa01rLTlZATVVLb0tGelNwcAZDZD';
        $site = 'https://upgradebicycles.com/test/';
        $url = "https://graph.instagram.com/me/media?fields=username,media_type,media_url,permalink,thumbnail_url,timestamp,caption&access_token=$token";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $request = curl_exec($curl);
        curl_close($curl);
        $request = json_decode($request, true);
        if(isset($request['data'])){
            return $request['data'];
        }
        return [];
	}


	function getSeoUrlGet($title){
		return strtolower(str_replace( array('/', '\\','\'', '"', ',' , ';', '<', '>','&',' ','*','!','@','#','$','%','+',',','.','`','~',':','[',']','{','}','(',')','?'), '-', $title));
	}

	function getTypeOfField(){
		return [
			"select"=>"select",
			"text"=>"text",
			"color"=>"color",
			"date"=>"date",
			"time"=>"time",
			"number"=>"number",
			"textarea"=>"textarea",
		];
	}

	function getGenderData(){
		return[
			"male"=>"male",
			"female"=>"female",
			'unisex'=>"unisex",
			'kids'=>"kids"
		];
	}

	function getLoginTypeData(){
		return[
			"normal"=>"normal",
			"google"=>"google",
			'facebook'=>"facebook"
		];
	}

	function getDeviceTypeData(){
		return [
			"ios"=>"ios",
			"A"=>"android"
		];
	}


	public  function getBooleanData(){
		return ['0'=>"false","1"=>"true"];
	}


	public  function getBooleanDataActual(){
		return ['false'=>"false","true"=>"true"];
	}

	public  function getfirstTrueBooleanData(){
		return ["1"=>"true","0"=>"false"];
	}


	public function getCoupanCodeList(){
		return [
			"exact"=>"Exact",
			"percentage"=>"Percentage"
		];
	}

	public  function getTempletes(){
		return [
			"home"=>"Home",
            "about"=>"About",
            "result"=>"Result",
            "course"=>"Course",
            "guideline"=>"Guide Line",
            "online-form"=>"Online Form",
            "company-form"=>"Company Form",
            "categories"=>"category",
            "contact"=>"Contact",
            "vote-now"=>"Vote Now",
			/*"jobs-counter"=>"jobs-counter",*/
			"career"=>"career",
			"teams"=>"teams",
			"login"=>"login",
			"register"=>"register",
			"forgot-password"=>"forgot-password",
			"our-clients"=>"our-clients",
			/*"products"=>"products",
			"certificate"=>"certificate",*/
			"common"=>"Common",
			"blogs"=>"blogs",
			/*"reviews"=>"reviews",*/
			"gallery"=>"Gallery",
			"franchise"=>"Franchise",
			"faq"=>"FAQ",
			/*"careerCategorList"=>"Job Category",
			"services"=>"services",*/
			"terms-of-service"=>"Terms Of Service",
			"direct-mail"=>"direct mail",
			"email-marketing-campaign"=>"email marketing campaign",
			/*"ivr"=>"ivr",*/
			/*"lead-process"=>"lead process",*/
			/*"live-call-transfer"=>"live call transfer",*/
			/*"mortage-direct-mail"=>"mortage-direct-mail",*/
			/*"mortage-lead"=>"mortage-lead",*/
			/*"mortage-trigger-data"=>"mortage-trigger-data",*/
			/*"real-estate-leads"=>"real estate leads",*/
			/*"reverse-mortage-lead"=>"reverse-mortage-lead",*/
			/*"roi"=>"roi",*/
			/*"sample-mortage-lead"=>"sample-mortage-lead",*/
			"seo-service"=>"seo-service",
			/*"smart-track"=>"smart track",
			"what-we-offer"=>"what we offer",*/
		];
	}






function getTempleteForCategory(){

		return [
			"content-writing-services"=>"content-writing-services",

		];
	}










	function getLangName($b,$name){
		return $b->$name;
	}



	function getImage($image){
	    if($image!=""){
	        if(is_file(public_path($image))){
	            return $image;
	        }
	    }
	    return 'uploads/no-image.jpg';
	}





	public function send_notification($registatoin_ids, $title,$body,$device_type,$data='dd',$sound='default') {
     	$fcmUrl = 'https://fcm.googleapis.com/fcm/send';
		$token=$registatoin_ids;
		$f=0;
        if(strtoupper($device_type)=="ANDROID123"){
           $notification = [
                   'title' =>$title,
                   'body' =>$body,
                   "sound" => $sound
               ];
            $extraNotificationData = ["message" => $notification,"moredata" =>$data];
            $f=1;
            $fcmNotification = [

                'to'        => $token, //single token
                'notification' => $notification,
                'data' => $extraNotificationData
            ];
        }elseif(strtoupper($device_type)=="IOS123"){
            $f=1;
            $notification = array('title' =>$title , 'body' => $body, 'sound' => $sound, 'badge' => '1');
            $fcmNotification = array('to' => $token, 'notification' => $notification,'priority'=>'high',"data"=>$data);
        }

        $headers = [
            //'Authorization: key=AAAAKBxn96o:APA91bHHmR3ZnrArgtPpOAEWF6iEMx_OfFHtLa6H5BELWX9EI7SkFhEuH4MT0izL8Y_nW6d8On4rAdIGZKmrwoZ2L7mVGVR6eEysbPLjCKPUyOiES87OJR5WnGap0T3NV-MwG9HWZFKZ' ,
              'Authorization: key=AAAArFB060k:APA91bH0OSnyRTBP3jQ_JhMQwvDgw8Qcq41wEw-29RcK1pS9lsKDof8Uui5S8zMtU5P3mf_49J0kU1NgcjNQnVIWTJ9ZhhFuSZk2xTsYZHXCJ1OqH1t1mL6TrVdNx-WEArA6SEnmN8gu',
            'Content-Type: application/json'
        ];

		if($f==1){
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
	        curl_setopt($ch, CURLOPT_POST, true);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
	        $result = curl_exec($ch);
	        curl_close($ch);
	        return ($result);
		}
  }

}
