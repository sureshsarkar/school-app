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
            {!! Form::label("company") !!}
            {!! Form::text("company",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("company")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("SEO URL") !!}
            {!! Form::text("seo_url",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("seo_url")}}</span>
        </div>
        </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("Employment Type") !!}
            {!! Form::select("emp_type",["Full-Time"=>"Full-Time","Part-Time"=>"Part-Time"],null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("emp_type")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("Skills") !!}
            {!! Form::select("skill_id[]",ModelHelper::getCareerSkillSelect(),null,["class"=>"form-control select2","multiple"=>"multiple"]) !!}
            <span class="text-danger">{{ $errors->first("skill_id")}}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("location") !!}
            {!! Form::select("location",ModelHelper::getCareerLocationSelect(),null,["class"=>"form-control select2"]) !!}
            <span class="text-danger">{{ $errors->first("location")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("No. of Position") !!}
            {!! Form::number("no_of_position",null,["class"=>"form-control","min"=>0,"step"=>"any"]) !!}
            <span class="text-danger">{{ $errors->first("no_of_position")}}</span>
        </div>
    </div>
    <div class="col-md-4">
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
    <div class="col-md-4 d-none">
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

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("publish") !!}
            {!! Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("publish")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("category") !!}
            {!! Form::select("category",ModelHelper::getCareerCategorySelect(),null,["class"=>"form-control select2"]) !!}
            <span class="text-danger">{{ $errors->first("category")}}</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("Experience From (year)") !!}
            {!! Form::number("exp_year_from",null,["class"=>"form-control","min"=>0,"step"=>"any"]) !!}
            <span class="text-danger">{{ $errors->first("exp_year_from")}}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Experience to (year)") !!}
            {!! Form::number("exp_year_to",null,["class"=>"form-control","min"=>0,"step"=>"any"]) !!}
            <span class="text-danger">{{ $errors->first("exp_year_to")}}</span>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("Salary Range From (in K(1000))") !!}
            {!! Form::number("salary_from",null,["class"=>"form-control","min"=>0,"step"=>"any"]) !!}
            <span class="text-danger">{{ $errors->first("salary_from")}}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Salary Range To (in K(1000))") !!}
            {!! Form::number("salary_to",null,["class"=>"form-control","min"=>0,"step"=>"any"]) !!}
            <span class="text-danger">{{ $errors->first("salary_to")}}</span>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("start_date") !!}
            {!! Form::date("start_date",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("start_date")}}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("end_date") !!}
            {!! Form::date("end_date",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("end_date")}}</span>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Contact No.") !!}
            {!! Form::text("contact",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("contact")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Website") !!}
            {!! Form::text("website",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("website")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Email") !!}
            {!! Form::email("email",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("email")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Address") !!}
            {!! Form::email("address",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("address")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("PinCode") !!}
            {!! Form::email("pincode",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("pincode")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            {!! Form::label("Map URL Iframe") !!}
            {!! Form::email("map",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("map")}}</span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("Is Featured") !!}
            {!! Form::select("is_featured",["No"=>"No","Yes"=>"Yes"],null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("is_featured")}}</span>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("description") !!}
            {!! Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("description")}}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Short Description") !!}
            {!! Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("shortDescription")}}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Medium Description") !!}
            {!! Form::textarea("mediumDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("mediumDescription")}}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("Long Description") !!}
            {!! Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("longDescription")}}</span>
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
