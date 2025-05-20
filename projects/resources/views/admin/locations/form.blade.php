<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("name")}}</span>
            {!! Form::text("parent_id",app('request')->input('parent_id')??$data->parent_id??'0',["class"=>"form-control","hidden"]) !!}
        </div>
    </div>



    <div class="col-md-3">
        <div class="form-group">
              <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            {!! Form::text("seo_url",null,["class"=>"form-control", "pattern"=>"[a-zA-Z0-9-_]+", "title"=>"Enter Valid SEO URL", "oninvalid"=>"this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')" ,"onchange"=>"try{setCustomValidity('')}catch(e){}", "oninput"=>"setCustomValidity(' ')"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
    </div>


    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes" type="checkbox" id="remove_image" >
                        <label for="remove_image" class="custom-control-label">Remove  Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-3 d-none">
        <div class="form-group">
            {!! Form::label("broucher") !!}
            {!! Form::file("broucher",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("broucher")}}</span>
             @isset($data)
                @if($data->broucher!="")
                     <a href="{{ asset(($data->broucher)) }}" target="_BLANK">File</a>

                @endif
            @endisset
        </div>
    </div>



    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("bannerImage") !!}
            {!! Form::file("bannerImage",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("bannerImage")}}</span>
             @isset($data)
                @if($data->bannerImage!="")
                     <img src="{{ asset(($data->bannerImage)) }}" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_banner_image" value="yes" type="checkbox" id="remove_banner_image" >
                        <label for="remove_banner_image" class="custom-control-label">Remove Banner Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>
    @isset($data)
    @if(app('request')->input('parent_id')!=0 || $data->parent_id!=0)

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label("Title") !!}
                    {!! Form::text("cta_title",null,["class"=>"form-control"]) !!}
                    <span class="text-danger">{{ $errors->first("cta_title")}}</span>

                </div>
            </div>

    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("Conent First Image") !!}
            {!! Form::file("attraction_image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("attraction_image")}}</span>
            @isset($data)
                @if($data->attraction_image!="")
                    <img src="{{ asset(($data->attraction_image)) }}" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_attraction_image" value="yes" type="checkbox" id="remove_attraction_image" >
                        <label for="remove_attraction_image" class="custom-control-label">Remove  Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label("Sub Title") !!}
                {!! Form::text("cta_description",null,["class"=>"form-control"]) !!}
                <span class="text-danger">{{ $errors->first("cta_description")}}</span>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label("Conent Second Image") !!}
                {!! Form::file("cta_image",["class"=>"form-control"]) !!}
                <span class="text-danger">{{ $errors->first("cta_image")}}</span>
                @isset($data)
                    @if($data->cta_image!="")
                        <img src="{{ asset(($data->cta_image)) }}" width="200" > <br>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input custom-control-input-danger" name="remove_attraction_image" value="yes" type="checkbox" id="remove_attraction_image" >
                            <label for="remove_attraction_image" class="custom-control-label">Remove  Image</label>
                        </div>
                    @endif
                @endisset
            </div>
        </div>

    @endif
    @endisset
{{--
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("templete") !!}
            {!! Form::select("templete",Helper::getTempleteForCategory(),null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("templete")}}</span>
        </div>
    </div>
--}}





    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("Priority") !!}
            {!! Form::number("ordering",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>
        </div>
    </div>
{{--
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("is_home") !!}
            {!! Form::select("is_home",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
        </div>
    </div>
--}}

{{--
<div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("Parent category") !!}
            {!! Form::select("is_parent",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent category"]) !!}
            <span class="text-danger">{{ $errors->first("is_parent")}}</span>
        </div>
    </div>
--}}



</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("description") !!}
            {!! Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("description")}}</span>
        </div>
    </div>
</div>


<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("short Description") !!}
            {!! Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("shortDescription")}}</span>
        </div>
    </div>

</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("mediumDescription") !!}
            {!! Form::textarea("mediumDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("mediumDescription")}}</span>
        </div>
    </div>

</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("longDescription") !!}
            {!! Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("longDescription")}}</span>
        </div>
    </div>

</div>





{{--
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("brochure data") !!}
            {!! Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("shortDescription")}}</span>
        </div>
    </div>

</div>
--}}




@isset($data)
<div class="row d-none" >
    <div class="col-md-12">
        <a href="javascript:;" class="add-space-data btn btn-info"><i class="fa fa-plus"></i> Add SPECIFICATION & FEATURES</a>
             <hr>
    </div>




</div>
<div class="row gaurav-delete-property d-none">
    <div class="col-md-2">
        <strong> Type</strong>
    </div>
    <div class="col-md-3">
        <strong> Name</strong>
    </div>
    <div class="col-md-2">
        <strong>Image</strong>
    </div>

    <div class="col-md-4">
        <strong>Description</strong>
    </div>
    <div class="col-md-1">
        <strong>Action</strong>
    </div>

    <div class="col-md-12">
        <br>
    </div>
</div>
<div id="space-area-section">
        @isset($data)
@foreach(App\Models\PropertySpace::where("property_id",$data->id)->get() as $c)
    <div class="row gaurav-delete-property-space">
        <input type="hidden" name="space_id[]" value="{{ $c->id }}" >
                <div class="col-md-2">
                    {!! Form::select("space_type[]",["SPECIFICATION"=>"SPECIFICATION","FEATURES"=>"FEATURES"],$c->space_type,["required","class"=>"form-control","placeholder"=>" Type","required"]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::text("space_name[]",$c->space_name,["required","class"=>"form-control","placeholder"=>" Name"]) !!}
                </div>

                <div class="col-md-2">
                    {!! Form::file("space_image[]",["class"=>"form-control"]) !!}
                    @if($c->space_image)
                    <img src="{{ asset($c->space_image) }}" style="height:100px;" >
                    @endif
                </div>
                <div class="col-md-4">

                     {!! Form::textarea("space_status[]",$c->space_status,["required","class"=>"form-control","rows"=>2]) !!}
                </div>
                <div class="col-md-1">
                     <a href="javascript:;" class="delete-space-data btn btn-danger btn-xs" ><i class="fa fa-times"></i> </a>
                </div>

                <div class="col-md-12">
                    <br>
                </div>
            </div>
@endforeach
@endisset
</div>






@endisset

<div class="row">
    <div class="col-md-12 alert alert-warning text-center">
        <h3>SEO Section</h3>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("meta_title") !!}
            {!! Form::textarea("meta_title",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("meta_title")}}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("meta_keywords") !!}
            {!! Form::textarea("meta_keywords",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("meta_keywords")}}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("meta_description") !!}
            {!! Form::textarea("meta_description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("meta_description")}}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("header_section") !!}
            {!! Form::textarea("header_section",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("header_section")}}</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("footer_section") !!}
            {!! Form::textarea("footer_section",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("footer_section")}}</span>
        </div>
    </div>
</div>
