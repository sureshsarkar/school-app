<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Helper\Upload;
use Illuminate\Support\Facades\Hash;
use Validator;
use Helper;
use Str;

class SyllabusController extends Controller{

    public function __construct(Syllabus $model){
        $this->model=$model;
        $this->admin_base_url="syllabus.index";
        $this->admin_view="admin.syllabus";
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
            //'seo_url' => 'required|unique:brands,seo_url',
            // 'email' => 'required|email',
            'name' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $data=Helper::metaGenerationWithAllData($request);
        if ($request->hasFile("image")) {
            $data['image'] = Upload::fileUpload($request->file("image"),"profile");
        }
/*        if ($request->hasFile("bannerImage")) {
            $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"brands");
        }
        if($request->seo_url){}else{
            $data['seo_url']=Str::of($data['title'])->slug('-')->value;

        }
        $res=$this->model->where("seo_url",$data['seo_url'])->first();
        if($res){
            $data['seo_url']=$data['seo_url'].uniqid();
        }*/
        $data['password']=Hash::make($request->password);
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
         //   'seo_url' => 'required|unique:brands,seo_url,'.$id,
            'name' => 'required',
            // 'email' => 'required|email',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            if ($request->hasFile("image")) {
                $data['image'] = Upload::fileUpload($request->file("image"),"brands");
            }
          /*  if ($request->hasFile("bannerImage")) {
                $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"brands");
            }*/
            if($request->password){
                $data['password']=Hash::make($request->password);
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
