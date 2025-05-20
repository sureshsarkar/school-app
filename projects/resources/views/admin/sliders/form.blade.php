<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("title") !!}
            {!! Form::text("title",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("title")}}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("Page*") !!}
            {!! Form::select("cms_id",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"Choose Page","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("cms_id") }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="100px;" >
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("image2") !!}
            {!! Form::file("image2",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image2")}}</span>
            @isset($data)
                @if($data->image2!="")
                    <img src="{{ asset(($data->image2)) }}" width="100px;" >
                @endif
            @endisset
        </div>
    </div>


    <div class="col-md-4 d-none">
        <div class="form-group">

            {!! Form::label("Video Url link") !!}
            {!! Form::text("link",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("link")}}</span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label("priority") !!}
            {!! Form::number("ordering",null,["class"=>"form-control","required"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("description") !!}
            {!! Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("description")}}</span>
        </div>
    </div>


</div>
