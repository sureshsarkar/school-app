<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;
use App\Helper\Upload;
use Validator;
use Helper;
use Str;

class CollectionController extends Controller{
    
    public function __construct(Collection $model){
        $this->model=$model;
        $this->admin_base_url="collections.index";
        $this->admin_view="admin.collections";
    }

    
    public function index(){
        $data=$this->model::orderBy("id","desc")->get();
        return view($this->admin_view.".index",compact("data"));
    }

    
    public function create(){
        return view($this->admin_view.".create");
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
           // 'seo_url' => 'required|unique:collections,seo_url',
            'title' => 'required'
        ]);   
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $data=Helper::metaGenerationWithAllData($request);
        if ($request->hasFile("image")) {
            $data['image'] = Upload::fileUpload($request->file("image"),"collections");
        }
        if ($request->hasFile("bannerImage")) {
            $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"collections");
        }
        if($request->seo_url){}else{
            $data['seo_url']=Str::of($data['title'])->slug('-')->value;
            
        }
        $res=$this->model->where("seo_url",$data['seo_url'])->first();
        if($res){
            $data['seo_url']=$data['seo_url'].uniqid();
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
            'seo_url' => 'required|unique:collections,seo_url,'.$id,
            'title' => 'required'
        ]);   
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            if ($request->hasFile("image")) {
                $data['image'] = Upload::fileUpload($request->file("image"),"collections");
            }
            if ($request->hasFile("bannerImage")) {
                $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"collections");
            }
            $this->model::find($id)->update($data);
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
