<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\PropertySpace;
use App\Helper\Upload;
use Validator;
use Helper;
use Str;
use Carbon\Carbon;
class LocationController extends Controller{

    public function __construct(Location $model){
        $this->model=$model;
        $this->admin_base_url="locations.index";
        $this->admin_view="admin.locations";
    }


    public function index(){
        $data=$this->model::orderBy("id","desc")->get();
        return view($this->admin_view.".index",compact("data"));
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
                $property=Location::where("seo_url",$seo_url)->first();
                $id1=$property->id;

                $data=PropertySpace::where("property_id",$id)->get();
                foreach($data as $c){
                    $asset=[
                        "property_id"=>$id1,
                        "space_name"=>$c->space_name,
                        "space_status"=>$c->space_status,
                        'space_type'=>$c->space_type,
                        'space_image'=>$c->space_image
                    ];


                        PropertySpace::create($asset);
                }


            }

            return redirect()->route($this->admin_base_url)->with("success","Successfully Coppied");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }


    public function create(){
        return view($this->admin_view.".create");
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            //'seo_url' => 'required|unique:locations,seo_url',
            'name' => 'required'
        ]);
        //return $request->all();
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $data=Helper::metaGenerationWithAllData($request);
        if ($request->hasFile("image")) {
            $data['image'] = Upload::fileUpload($request->file("image"),"locations");
        }
        if ($request->hasFile("attraction_image")) {
            $data['attraction_image'] = Upload::fileUpload($request->file("attraction_image"),"locations");
        }
        if ($request->hasFile("cta_image")) {
            $data['cta_image'] = Upload::fileUpload($request->file("cta_image"),"locations");
        }
        if ($request->hasFile("broucher")) {
            $data['broucher'] = Upload::fileUpload($request->file("broucher"),"locations");
        }
        if($request->seo_url){}else{
            $data['seo_url']=Str::of($data['name'])->slug('-')->value;

        }
        $res=$this->model->where("seo_url",$data['seo_url'])->first();
        if($res){
            $data['seo_url']=$data['seo_url'].uniqid();
        }


        if ($request->hasFile("bannerImage")) {
            $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"locations");
        }
        $this->model::create($data);
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
            'seo_url' => 'required|unique:locations,seo_url,'.$id,
            'name' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            if ($request->hasFile("image")) {
               // Helper::deleteFile($exist->image);
                $data['image'] = Upload::fileUpload($request->file("image"),"locations");
            }

            if ($request->hasFile("broucher")) {
                $data['broucher'] = Upload::fileUpload($request->file("broucher"),"locations");
            }
            if ($request->hasFile("attraction_image")) {
                Helper::deleteFile($exist->attraction_image);
                $data['attraction_image'] = Upload::fileUpload($request->file("attraction_image"),"locations");
            }
            if ($request->hasFile("cta_image")) {
                Helper::deleteFile($exist->cta_image);
                $data['cta_image'] = Upload::fileUpload($request->file("cta_image"),"locations");
            }

            if ($request->hasFile("bannerImage")) {
                Helper::deleteFile($exist->bannerImage);
                $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"locations");
            }


            if($request->remove_attraction_image){
                $data['attraction_image'] ='';
                Helper::deleteFile($exist->attraction_image);
            }

            if($request->remove_banner_image){
                $data['bannerImage'] ='';
                Helper::deleteFile($exist->bannerImage);
            }

            if($request->remove_image){
                $data['image'] ='';
                Helper::deleteFile($exist->image);
            }
            $this->model::find($id)->update($data);



             if($request->space_name){
                foreach($request->space_name as $key => $value){
                    $ar=[
                        "property_id"=>$id,
                        "space_name"=>$request->space_name[$key],
                        "space_status"=>$request->space_status[$key],
                        'space_type'=>$request->space_type[$key]
                    ];
                    if($request->file("space_image")){
                        if(isset($request->file("space_image")[$key])){
                            $ar['space_image']=Upload::uploadWithLogoImageData($request->file("space_image")[$key]);
                        }
                    }
                    if(isset($request->space_id[$key])){
                       // dd($ar,$request->space_id[$key]);
                        $ar12=PropertySpace::find($request->space_id[$key]);
                        if($ar12){
                            $ar12->update($ar);
                        }
                    }else{
                        PropertySpace::create($ar);
                    }
                }
            }
            return redirect()->route($this->admin_base_url)->with("success","Successfully Updated");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }

    public function destroy($id){
        $exist=$this->model::find($id);
        if($exist){

            $exist->delete();
            return redirect()->route($this->admin_base_url)->with("success","Successfully Deleted");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
}
