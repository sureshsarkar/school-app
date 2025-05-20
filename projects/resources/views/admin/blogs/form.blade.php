<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("title") !!}
            {!! Form::text("title",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("title")}}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
             <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            {!! Form::text("seo_url",null,["class"=>"form-control",  "title"=>"Enter Valid SEO URL"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
    </div>
 
    
    <div class="col-md-4 d-none ">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>
    
    <div class="col-md-4  ">
        <div class="form-group">
            {!! Form::label("status") !!}
            {!! Form::select("status",["active"=>"active","deactive"=>"deactive"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("status")}}</span>
        </div>
    </div>
    

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("category") !!}
            {!! Form::select("blog_category_id",ModelHelper::getBlogCategoriesSelect(),null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("blog_category_id")}}</span>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="form-group">
            {!! Form::label("Banner image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" /> 
                     
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="banner_image_remove" >Remove Banner Image
              </label>
            </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-4  ">
        <div class="form-group">
            {!! Form::label("featureImage") !!}
            {!! Form::file("featureImage",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("featureImage")}}</span>
             @isset($data)
                @if($data->featureImage!="")
                     <img src="{{ asset(($data->featureImage)) }}" width="200" /> 
                     
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="featureImage_remove" >Remove Banner Image
              </label>
            </div>
                @endif
            @endisset
            
        </div>
    </div>
   

   
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("shortDescription") !!}
            {!! Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("shortDescription")}}</span>
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