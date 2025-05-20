<div class="row">
	 
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label("name*") !!}
			{!! Form::text("name",null,["class"=>"form-control","placeholder"=>"Enter name","required"=>"required"]) !!}
			<span class="text-danger">{{ $errors->first("name") }}</span>
		</div>
	</div>

	
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("short description") !!}
            {!! Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("description")}}</span>
        </div>
    </div>


	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("Coupon Type*") !!}
			{!! Form::select("product_type",["coupon"=>"Coupon","offer"=>"Offer"],null,["class"=>"form-control","required"]) !!}
			<span class="text-danger">{{ $errors->first("product_type") }}</span>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("coupon_code") !!}
			{!! Form::text("coupon_code",null,["class"=>"form-control"]) !!}
			<span class="text-danger">{{ $errors->first("coupon_code") }}</span>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("store*") !!}
			{!! Form::select("store_id",ModelHelper::getStoreList(),null,["class"=>"form-control","placeholder"=>"Choose store","required"=>"required"]) !!}
			<span class="text-danger">{{ $errors->first("store_id") }}</span>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("category") !!}
			{!! Form::select("location_id",ModelHelper::getLocationSelectList(),null,["class"=>"form-control","placeholder"=>"Choose Category"]) !!}
			<span class="text-danger">{{ $errors->first("location_id") }}</span>
		</div>
	</div>
	
	
	

	
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("affiliate_url*") !!}
			{!! Form::text("affiliate_url",null,["class"=>"form-control","required"]) !!}
			<span class="text-danger">{{ $errors->first("affiliate_url") }}</span>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label(" Valid Till ") !!}
			{!! Form::text("end_date",null,["class"=>"form-control datepicker"]) !!}
			<span class="text-danger">{{ $errors->first("end_date") }}</span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("start_date") !!}
			{!! Form::text("start_date",null,["class"=>"form-control datepicker"]) !!}
			<span class="text-danger">{{ $errors->first("start_date") }}</span>
		</div>
	</div>


	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("badge_text") !!}
			{!! Form::text("badge_text",null,["class"=>"form-control"]) !!}
			<span class="text-danger">{{ $errors->first("badge_text") }}</span>
		</div>
	</div>
	 
	<div class="col-md-3">
        <div class="form-group">
            {!! Form::label("feature_image") !!}
            {!! Form::file("feature_image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("feature_image")}}</span>
             @isset($data)
                @if($data->feature_image!="")
                     <img src="{{ asset(($data->feature_image)) }}" width="200" > <br>
                     
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_feature_image" value="yes" type="checkbox" id="remove_feature_image" >
                        <label for="remove_feature_image" class="custom-control-label">Remove Feature Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("exclusive") !!}
			{!! Form::select("exclusive",Helper::getBooleanDataActual(),null,["class"=>"form-control","required"]) !!}
		</div>
	</div>


    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label("Priority") !!}
            {!! Form::number("ordering",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>
        </div>
    </div>
	<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("no_of_use") !!}
			{!! Form::text("no_of_use",null,["class"=>"form-control"]) !!}
			<span class="text-danger">{{ $errors->first("no_of_use") }}</span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			   <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            {!! Form::text("seo_url",null,["class"=>"form-control", "pattern"=>"[a-zA-Z0-9-_]+", "title"=>"Enter Valid SEO URL", "oninvalid"=>"this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')" ,"onchange"=>"try{setCustomValidity('')}catch(e){}", "oninput"=>"setCustomValidity(' ')"]) !!}
			<span class="text-danger">{{ $errors->first("seo_url") }}</span>
		</div>
	</div>

	


	<div class="col-md-3">
        <div class="form-group">
            {!! Form::label("banner_image") !!}
            {!! Form::file("banner_image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("banner_image")}}</span>
             @isset($data)
                @if($data->banner_image!="")
                     <img src="{{ asset(($data->banner_image)) }}" width="200" > <br>
                     
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_banner_image" value="yes" type="checkbox" id="remove_banner_image" >
                        <label for="remove_banner_image" class="custom-control-label">Remove Banner Image</label>
                    </div> 
                @endif
            @endisset
        </div>
    </div>


 
<div class="col-md-3">
		<div class="form-group">
			{!! Form::label("collection") !!}
			{!! Form::select("collection_id",ModelHelper::getCollectionList(),null,["class"=>"form-control","placeholder"=>"Choose collection"]) !!}
			<span class="text-danger">{{ $errors->first("collection_id") }}</span>
		</div>
	</div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label(" Detailed Description") !!}
            {!! Form::textarea("long_description",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("long_description")}}</span>
        </div>
    </div>
   

 
</div>




