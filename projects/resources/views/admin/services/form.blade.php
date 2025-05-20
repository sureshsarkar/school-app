<div class="row">
   {{-- <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("name")}}</span>
        </div>
    </div>--}}

{{--
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("Category Name") !!}
            {!! Form::select("name",["Hero Section"=>"Hero Section","Event Details"=>"Event Details","Participate"=>"Participate","Our Partners"=>"Our Partners","Social Media"=>"Social Media","Contact"=>"Contact"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("name")}}</span>
        </div>
    </div>
--}}

{{--
    <div class="col-md-3">
        <div class="form-group">
              <label> Seo Url </label>
            {!! Form::text("seo_url",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
    </div>
--}}



    <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label("image/Video") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                    @if (preg_match('/\.(jpeg|jpg|png|gif)$/i', asset(($data->image)))) 

                    <img src="{{ asset(($data->image)) }}" width="200" >
                    @else
                        <video width="320" height="240" controls>
                            <source src="{{asset(($data->image))}}" type="video/mp4">
                        </video>

                    @endif
                @endif
            @endisset
        </div>
    </div>
{{--
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("iconImage") !!}
            {!! Form::file("bannerImage",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("bannerImage")}}</span>
             @isset($data)
                @if($data->bannerImage!="")
                     <img src="{{ asset(($data->bannerImage)) }}" width="200" >
                @endif
            @endisset
        </div>
    </div>
--}}

   {{-- <div class="col-md-4 d-none">
        <div class="form-group">
            {!! Form::label("templete") !!}
            {!! Form::select("templete",["common"=>"common"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("templete")}}</span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>--}}



</div>



<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Description") !!}
            {!! Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("description")}}</span>
        </div>
    </div>

</div>
{{--<div class="row">
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
            {!! Form::label("mediumDescription") !!}
            {!! Form::textarea("mediumDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("mediumDescription")}}</span>
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

</div>--}}
{{--<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("exlongDescription") !!}
            {!! Form::textarea("exlongDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("exlongDescription")}}</span>
        </div>
    </div>

</div>--}}


