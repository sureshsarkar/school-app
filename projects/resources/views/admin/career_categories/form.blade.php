<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("title") !!}
            {!! Form::text("title",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("title")}}</span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("seo_url") !!}
            {!! Form::text("seo_url",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
    </div>



    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" height="50">
                @endif
            @endisset
        </div>
    </div>
    <div class="col-md-3 d-none">
        <div class="form-group">
            {!! Form::label("bannerImage") !!}
            {!! Form::file("bannerImage",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("bannerImage")}}</span>
             @isset($data)
                @if($data->bannerImage!="")
                     <img src="{{ asset(($data->bannerImage)) }}" width="200" height="50">
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("isHome") !!}
            {!! Form::select("isHome",["true"=>"true","false"=>"false"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("isHome")}}</span>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("icon") !!}
            {!! Form::text("icon",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("icon")}}</span>
        </div>
    </div>



    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("templete") !!}
            {!! Form::select("templete",["common"=>"common"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("templete")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>
       <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("ordering") !!}
            {!! Form::number("ordering",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>
        </div>
    </div>

    <div class="col-md-4 d-none">
        <div class="form-group">
            {!! Form::label("isParent") !!}
            {!! Form::select("isParent",ModelHelper::getCareerCategorySelect(),null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("isParent")}}</span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Feature description") !!}
            {!! Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("shortDescription")}}</span>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Medium Description") !!}
            {!! Form::textarea("benefits",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("benefits")}}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("longDescription") !!}
            {!! Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("longDescription")}}</span>
        </div>
    </div>
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
            {!! Form::label("form_heading") !!}
            {!! Form::textarea("form_heading",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("form_heading")}}</span>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("form_paragraph") !!}
            {!! Form::textarea("form_paragraph",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("form_paragraph")}}</span>
        </div>
    </div>
</div>
<h3 class="text-warning">Seo Section</h3>
<div class="row">
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
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("head_section") !!}
            {!! Form::textarea("head_section",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("head_section")}}</span>
        </div>
    </div>
</div>
