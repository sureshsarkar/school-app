@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)

@section("container")
@php 
$bannerImage='front/images/inner-banner.jpg';

@endphp
  @php
        $name=Helper::getLangName($data,"title");
        $bannerImage=asset('front/images/b1.jpg');;
        if($data->image){
            $bannerImage=asset($data->image);
        }
    @endphp






<section class="career-detail-wrap">
   <div class="container">
     <div class="career-detail-main">
        <div class="row">
           <div class="col-lg-8 col-md-12 col-12">
             <div class="career-detail-left">
                <h2><i class="fas fa-briefcase"></i> {{$data->title }}</h2>
            
                @if($data->company)
                <p> Company: {{ $data->company }}</p>
                @endif
                @if($data->profile)
                <p> Profile: {{ $data->profile }}</p>
                @endif
            
                @if($data->job_type)
                <p> Job Type: {{ $data->job_type }}</p>
                @endif
                @if($data->location)
                
                <p> Location: {{ $data->location }}</p>
                @endif
                @if($data->package)
                <p> Package: {{ $data->package }}</p>
                @endif
                <p> Job Category: {{ App\Models\CareerCategory::find($data->category)->title ?? 'N/A' }}</p>
            
                {!! $data->longDescription !!}
             </div>
           </div>
           @php
            $jobs=App\Models\Career::where("id","!=",$data->id)->orderBy("id","desc")->paginate(6);
          @endphp
           <div class="col-lg-4 col-md-12 col-12">
               @if(count($jobs)>0)
              <div class="career-detail-right">
                 <h3>Find More Jobs</h3>
                   
         @foreach($jobs as $c)
                  <div class="career-find-job">
                     <div class="career-find-inner">
                        <h4>{{ $c->location}}</h4>
                         <h5><i class="fas fa-briefcase"></i> {{ $c->title  }}</h5>
                         <p>{{ $c->profile }}</p>
                         <a href="{{ url('career/detail/'.$c->id) }}">Browse Job</a>
                     </div>
                  </div>
                  @endforeach
              </div>
              @endif
           </div>
        </div>
     </div>
   </div>
</section>




<section class="domain-list-cta">
	 <div class="domain-list-main-cta" style="background-image: url({{ asset('html/images/domain-list-form.png') }});">
	 	<div class="container">
	 	<div class="domain-list-cta-form">
	 		 <div class="row">
	 		 	 <div class="col-lg-6 col-md-12 col-12">
	 		 	 	<div class="domain-form-left">
	 		 	 		 <h4>Fill Your Detail </h4>
	 		 	 		{!! Form::open(["url"=>"domain-feedback","files"=>true]) !!}
	 		 	 		 	<div class="form-row row">
	 		 	 		 	    <input type="hidden" name="service_id" value="{{ $data->title }}" />
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 {!! Form::label("Name") !!}
		{!! Form::text('name',null,["class"=>"form-control","required"]) !!}
	 		 	 		 		 </div>
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 {!! Form::label("Email") !!}
	 	{!! Form::email('email',null,["class"=>"form-control","required"]) !!}
	 		 	 		 		 </div>
	 		 	 		 	</div>
	 		 	 		 	<div class="form-row row">
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 {!! Form::label("Contact Number") !!}
	 	{!! Form::text('contactnumber',null,["class"=>"form-control","required"]) !!}
	 		 	 		 		 </div>
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		  {!! Form::label("Upload Resume") !!}
	 	 {!! Form::file("image",["class"=>"form-control","required"]) !!}
	 		 	 		 		 </div>
	 		 	 		 	</div>
	 		 	 		 		<div class="form-row row">
	 		 	 		 		 <div class="form-group col-lg-12 col-md-12 col-12">
	 		 	 		 		 	 {!! Form::label("Message") !!}
	 	{!! Form::textarea('message',null,["class"=>"form-control","rows"=>2]) !!}
	 		 	 		 		 </div>
	 		 	 		 		
	 		 	 		 	</div>
		 	 		 	 	<div class="form-group">
                				<div class="g-recaptcha" data-sitekey="{{ getenv('Google_Receptcha_site_key') }}">
                				</div>
                			</div>
	 		 	 		 	<div class="cta-submit-button">
	 		 	 		 		 <button type="submit">Submit</button>
	 		 	 		 	</div>
		 	 		 	{!! Form::close() !!}  
	 		 	 	</div>
	 		 	 </div>
	 		 	 <div class="col-lg-6 col-md-12 col-12">
	 		 	 	<div class="domain-list-cta-content">
	 		 	 		<div class="domain-list-cta-inner-content">
	 		 	 		   
	 		 	 		  <h5>Build your career with us </h5>
                            <p> Those who think about changing careers have one thing in common: they're always eager to learn and grow.  </p>
	 		 	 		    <p>Intentional choices and actions create a meaningful career, not chance.</p>
	 		 	 		   
	 		 	 		 </div>
	 		 	 	</div>
	 		 	 </div>
	 		 </div>
	 	</div>
	 </div>
	 </div>
</section>





@stop

@section("js")
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop