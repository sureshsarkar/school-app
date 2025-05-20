<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicSetting;
use App\Helper\Upload;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Location;
use App\Models\Brand;
use App\Models\Collection;
use App\Models\Manufacture;
use App\Models\Store;
use App\Models\Property;
use App\Models\PropertyRate;
use App\Models\Country;
use App\Models\Slider;
use App\Models\Deal;
use App\Models\Customer;

use Hash;
use Auth;
use DB;
use App\Models\User;


class DashboardController extends Controller{

    function setIsPopularData($model,$id,$status){
         if($model=="stores"){
            $data=Store::find($id);
            if($data){
                $data->is_popular=$status;
                $data->save();
            }
        }
        return redirect()->back()->with("success","Status changed successfully");
    }

    function setPublishData($model,$id,$status){
        if($model=="locations"){
            $data=Location::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="stores"){
            $data=Store::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="customers"){
            $data=Customer::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="sliders"){
            $data=Slider::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="brands"){
            $data=Brand::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="collections"){
            $data=Collection::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="countries"){
            $data=Country::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="manufactures"){
            $data=Manufacture::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        if($model=="deals"){
            $data=Deal::find($id);
            if($data){
                $data->publish=$status;
                $data->save();
            }
        }
        return redirect()->back()->with("success","Status changed successfully");
    }



    function setIsHomeData($model,$id,$status){
        if($model=="locations"){
            $data=Location::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="stores"){
            $data=Store::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="brands"){
            $data=Brand::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="collections"){
            $data=Collection::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="countries"){
            $data=Country::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="manufactures"){
            $data=Manufacture::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        if($model=="deals"){
            $data=Deal::find($id);
            if($data){
                $data->is_home=$status;
                $data->save();
            }
        }
        return redirect()->back()->with("success","Status changed successfully");
    }
    
    

    function multipleDelete(Request $request,$model){
      foreach($request->id as $id){
        if($model=="galleries"){
          $data=\App\Models\Gallery::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="testimonials"){
          $data=\App\Models\Testimonial::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="blog-category"){
          $data=\App\Models\Blogs\BlogCategory::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="blogs"){
          $data=\App\Models\Blogs\Blog::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="faqs"){
          $data=\App\Models\Faq::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="feedbacks"){
          $data=\App\Models\Feedback::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="sliders"){
          $data=\App\Models\Slider::find($id);
          if($data){
            $data->delete();
          }
        }
        if($model=="newsletters"){
          $data=\App\Models\Newsletter::find($id);
          if($data){
            $data->delete();
          }
        }
      }
    }

    
   function index(){
       //return redirect('admin/properties');
   		return view("admin.dashboard.index");
   }
  
   
   function mediasDelete(Request $request){
       $path=public_path().'/uploads/uploads/'.$request->file;
       if(is_file($path)){
            unlink($path);
       }
       return redirect()->back()->with('success', 'Media deleted successfully');
   }

    function newFileUploads(Request $request){
        if($request->file("file")){
            foreach($request->file("file") as $key1=>$image){
                if($request->file("file")[$key1]){
                   Upload::fileUpload($request->file("file")[$key1]);
                }
            }
        }
        return redirect()->back();
    }

    function mediaCenter(){
        $data=(scandir(public_path("uploads/uploads")));
        rsort($data);
        return view("admin.dashboard.medias",compact("data"));
    }

    function setting(){
        return view("admin.dashboard.setting");
    }

    function settingPost(Request $request){
        //dd($request->input);
        foreach($request->input as $name=>$value){
            $name=str_replace("'","",$name);
            if($name=="favicon"){
                $value = Upload::logouploadData($value);
            }
            if($name=="header_logo"){
                $value = Upload::logouploadData($value);
            }
            if($name=="footer_logo"){
                
                $value = Upload::logouploadData($value);
               // / dd($value);
            }

            $data=BasicSetting::where("name",$name)->first();
            if($data){
                $data->value=$value;
                $data->save();
            }else{
                BasicSetting::create(['name'=>$name,"value"=>$value]);
            }
        }
        return redirect()->back()->with('success', 'Setting updated successfully');
    }


    function changePassword(){
    	return view("admin.dashboard.changePassword");
    }
    
    function changePasswordPost(Request $request){
          $password = $request->new_password;

        if (Hash::check($request->old_password, Auth::user()->password)) {
            $user = User::where(["email"=> Auth::user()->email])->first();
       		$user->password=bcrypt($password);
       		$user->save();
            return redirect()->back()
                ->with('success', 'Password updated successfully');
        }
        return redirect()->back()
                ->with('danger', 'Password Worng');
    }
}