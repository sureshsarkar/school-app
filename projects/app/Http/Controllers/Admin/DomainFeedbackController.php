<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Domainfeedback;

use App\Helper\Upload;

use Validator;



class DomainFeedbackController extends Controller{

    

    public function __construct(Domainfeedback $model){

        $this->model=$model;

        $this->admin_base_url="domain-feedback.index";

        $this->admin_view="admin.domain-feedback";

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

            'image' => 'required'

        ]);   

        if($validator->fails()){

            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());

        }

        $data=$request->all();

        if ($request->hasFile("image")) {

            $data['image'] = Upload::fileUpload($request->file("image"),"faqs");

        }

        if ($request->hasFile("bannerImage")) {

            $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"faqs");

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

            

        ]);   

        if($validator->fails()){

            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());

        }

        $exist=$this->model::find($id);

        if($exist){

            $data=$request->all();

            if ($request->hasFile("image")) {

                $data['image'] = Upload::fileUpload($request->file("image"),"faqs");

            }

            if ($request->hasFile("bannerImage")) {

                $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"faqs");

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

