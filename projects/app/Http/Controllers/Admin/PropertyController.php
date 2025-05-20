<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyGallery;
use App\Models\PropertyAmenityGroup;
use App\Models\PropertyAmenity;
use App\Models\PropertyFee;
use App\Models\PropertySpace;
use App\Models\PropertyRate;
use App\Models\PropertyRateGroup;
use App\Models\PropertyRoom;
use Helper;
use App\Helper\Upload;
use Validator;
use LiveCart;
use Str;
use Carbon\Carbon;

class PropertyController extends Controller{
    
    public function __construct(Property $model){
        $this->model=$model;
        $this->admin_base_url="properties.index";
        $this->admin_view="admin.properties";
    }
    public function active($id){
        $data=$this->model::find($id);
        if($data){
            $data->status="true";
            $data->save();
            return redirect()->route($this->admin_base_url)->with("success","Successfully active");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
    public function deactive($id){
        $data=$this->model::find($id);
        if($data){
            $data->status="false";
            $data->save();
            return redirect()->route($this->admin_base_url)->with("success","Successfully deactive");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
    
     function updateCaptionSOrt(Request $request){
        foreach($request->captionidsarray as $key=>$value){
            if(isset($value['id'])){
                $data=PropertyGallery::find($value['id']);
                if($data){
                    $data->sorting=$key;
                    if(isset($value['value']))
                    $data->caption=$value['value'];

                    $data->save();
                }
            }
        }
        echo "successfully update gallery";
    }
    public function copyData($id){
        $data=$this->model::find($id);
        if($data){
            
            $newPost = $data->replicate();
            $seo_url=$data->seo_url.'-'.uniqid().'-copy';
            $newPost->seo_url=$seo_url;
            $newPost->created_at = Carbon::now();
            $result=$newPost->save();
            if($result){
                $property=Property::where("seo_url",$seo_url)->first();
                $id1=$property->id;
  
                $data=PropertyGallery::where("property_id",$id)->get();
                foreach($data as $c){
                    $asset=[
                            'image' =>$c->image,
                            'property_id'=>$id1,
                            'status'=>$c->status,
                            'sorting'=>$c->sorting,
                            'caption'=>$c->caption
                        ];
                        PropertyGallery::create($asset);
                }

             
            }

            return redirect()->route($this->admin_base_url)->with("success","Successfully Coppied");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }

    
    public function index(){
        $data=$this->model::whereNotIn("product_type",["Coupon","Offer"])->orderBy("id","desc")->get();
        return view($this->admin_view.".index",compact("data"));
    }

    
    public function create(){
        return view($this->admin_view.".create");
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
           // 'seo_url' => 'required|unique:properties,seo_url',
            'name' => 'required'
        ]);   
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
         $data=Helper::metaGenerationWithAllData($request);
        if ($request->hasFile("banner_image")) {
            $data['banner_image'] = Upload::fileUpload($request->file("banner_image"),"properties");
        }
        if ($request->hasFile("feature_image")) {
            $data['feature_image'] = Upload::uploadWithLogoImageData($request->file("feature_image"),"properties");
        }
        if($request->seo_url){}else{
            $data['seo_url']=Str::of($data['name'])->slug('-')->value;
            $res=$this->model->where("seo_url",$data['seo_url'])->first();
            if($res){
                $data['seo_url']=$data['seo_url'].uniqid();
            }
        }
     
        $result=$this->model::create($data);
        if($result){
            $id=$result->id;
             if($request->file("images")){
                foreach($request->file("images") as $key1=>$image){
                   
                    if($request->file("images")[$key1]){
                        $asset=[
                        'image' =>Upload::uploadWithLogoImageData($request->file("images")[$key1]),
                        'property_id'=>$id,
                        ];
                        PropertyGallery::create($asset);
                    }
                }
            }

          





            
        }
        return redirect()->route($this->admin_base_url)->with("success","Successfully Added");
    }

  
    public function show($id){
        return redirect()->route($this->admin_base_url);
    }

   
    public function edit($id){
        $data=$this->model::find($id);
        if($data){
            return view($this->admin_view.".edit",compact("data"));
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }

  
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'seo_url' => 'required|unique:properties,seo_url,'.$id,
            
            'name' => 'required'
        ]);  
      //  dd($request->all()); 
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            if ($request->hasFile("banner_image")) {
                Helper::deleteFile($exist->bannerImage);
                $data['banner_image'] = Upload::fileUpload($request->file("banner_image"),"properties");
            }
            if ($request->hasFile("feature_image")) {
               // Helper::deleteFile($exist->feature_image);
                $data['feature_image'] = Upload::uploadWithLogoImageData($request->file("feature_image"),"properties");
            }
            
          
            
            
            if($request->remove_banner_image){
                $data['bannerImage'] ='';
                Helper::deleteFile($exist->bannerImage);
            }
            
            if($request->remove_rental_aggrement_attachment){
                $data['rental_aggrement_attachment'] ='';
                Helper::deleteFile($exist->rental_aggrement_attachment);
            }
            
            if($request->remove_welcome_package_attachment){
                $data['welcome_package_attachment'] ='';
                Helper::deleteFile($exist->welcome_package_attachment);
            }
            
            if($request->remove_feature_image){
                $data['feature_image'] ='';
               // Helper::deleteFile($exist->feature_image);
            }
            
            
            
            $this->model::find($id)->update($data);
  
            if($request->preloaded){
                PropertyGallery::whereNotIn("id",$request->preloaded)->delete();
            }
             if($request->file("images")){
                foreach($request->file("images") as $key1=>$image){
                   
                    if($request->file("images")[$key1]){
                        $asset=[
                        'image' =>Upload::uploadWithLogoImageData($request->file("images")[$key1]),
                        'property_id'=>$id,
                        ];
                        PropertyGallery::create($asset);
                    }
                }
            }

            return redirect()->back()->with("success","Successfully Updated");
        }
        return redirect()->back()->with("danger","Invalid Calling");
    }

    public function destroy($id){
       // dd($id);
        $exist=$this->model::find($id);
        if($exist){
            Helper::deleteFile($exist->bannerImage);
            Helper::deleteFile($exist->rental_aggrement_attachment);
            Helper::deleteFile($exist->welcome_package_attachment);
           // Helper::deleteFile($exist->feature_image);
           
            foreach(PropertyGallery::where("property_id",$id)->get() as $data){
                Helper::deleteFile($data->image);
            }
            
            PropertyGallery::where("property_id",$id)->delete();
           
            $exist->delete();
            return redirect()->route($this->admin_base_url)->with("success","Successfully Deleted");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }


     function imageDeleteAsset(Request $request){
        $data=PropertyGallery::find($request->id);
        if($data){
            Helper::deleteFile($data->image);
            $data->delete();
        }
    }

    function  deletePropertySpace(Request $request){
        if($request->id){
            $data=  PropertySpace::find($request->id);
            if($data){
                $data->delete();
            }
        }
    }
}
