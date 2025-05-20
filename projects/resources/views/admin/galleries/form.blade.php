<div class="row">
 
    <div class="col-md-6 ">
        <div class="form-group">
            {!! Form::label("name") !!}
            {!! Form::text("thumbnail",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("thumbnail")}}</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" /> 
                @endif
            @endisset
        </div>
    </div>

</div>
