<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("name")}}</span>
        </div>
    </div>
    <div class="col-md-4">
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

            {!! Form::label("email") !!}
            {!! Form::email("email",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("email")}}</span>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">

            {!! Form::label("mobile") !!}
            {!! Form::text("mobile",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("mobile")}}</span>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">

            {!! Form::label("profile") !!}
            {!! Form::text("profile",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("profile")}}</span>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">

            {!! Form::label("city") !!}
            {!! Form::text("city",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("city")}}</span>

        </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
            {!! Form::label("Parent Page") !!}
            {!! Form::select("type",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent Page"]) !!}
            <span class="text-danger">{{ $errors->first("type")}}</span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("message") !!}
            {!! Form::textarea("message",null,["class"=>"form-control","rows"=>2]) !!}
            <span class="text-danger">{{ $errors->first("message")}}</span>
        </div>
    </div>

</div>
<div class="row">
<div class="col-md-3">
    <div class="form-group">

        {!! Form::label("Facebook") !!}
        {!! Form::text("facebook",null,["class"=>"form-control"]) !!}
        <span class="text-danger">{{ $errors->first("facebook")}}</span>

    </div>
</div>
<div class="col-md-3">
    <div class="form-group">

        {!! Form::label("Instagram") !!}
        {!! Form::text("instagram",null,["class"=>"form-control"]) !!}
        <span class="text-danger">{{ $errors->first("instagram")}}</span>

    </div>
</div>
<div class="col-md-3">
    <div class="form-group">

        {!! Form::label("Twitter") !!}
        {!! Form::text("twitter",null,["class"=>"form-control"]) !!}
        <span class="text-danger">{{ $errors->first("twitter")}}</span>

    </div>
</div>
<div class="col-md-3">
    <div class="form-group">

        {!! Form::label("linkedin") !!}
        {!! Form::text("linkedin",null,["class"=>"form-control"]) !!}
        <span class="text-danger">{{ $errors->first("linkedin")}}</span>

    </div>
</div>
</div>
