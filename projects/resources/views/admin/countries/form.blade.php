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
              <label>URL</label>
            {!! Form::text("seo_url",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
    </div>



    <div class="col-md-4 ">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" > 
                @endif
            @endisset
        </div>
    </div>
    

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("is_home") !!}
            {!! Form::select("is_home",Helper::getBooleanDataActual(),null,["class"=>"form-control"]) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("priority") !!}
            {!! Form::number("ordering",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>
        </div>
    </div>
   

   
</div>
