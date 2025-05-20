@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)

@section("container")
@include("front.layouts.inner-header")

<!--======================================Job Offer sec start======================================-->

<section class="pxp-page-header-simple form-header" style="background-color: #e6f0f9;">
    <div class="container">
        <h1 class="">
            {{$job->company}}
        </h1>
        <div class="pxp-hero-subtitle pxp-text-light ">
            {{$job->description}}
        </div>
        <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
            <form id="pxp-jobs-page-search-form" class="row gx-3 align-items-center" role="search" method="get" action="">
                <div class="col-div">
                    <!-- Keywords field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-search"></span>
                        </span>
                        <input type="text" name="keywords" id="keywords" class="form-control" value="{{app('request')->input('keywords')}}" placeholder="Job Title or Keyword">
                    </div>
                </div>
                <div class="col-div pxp-has-left-border">
                    <!-- Location field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                        </span>
                        <select class="form-select" name="location" id="location">
                            <option value="0">
                                All Locations
                            </option>
                            @foreach($locations as $l)
                                <option value="{{$l->id}}" {{ app('request')->input('location') == $l->id ? "selected" :""}}>
                                    {{$l->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-div pxp-has-left-border">
                    <!-- Category field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-folder-o"></span>
                        </span>
                        <select class="form-select" name="category" id="category">
                            <option value="0">
                                All Categories
                            </option>
                            @foreach($categories as $c)
                                <option value="{{$c->id}}" {{ app('request')->input('category') == $c->id ? "selected" :""}}>
                                    {{$c->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-div-btn">
                    <button>Find Jobs</button>
                </div>
            </form>
        </div>
    </div>
</section>


<!--======================================Job Offer sec end======================================-->

<!--======================================Job Offer middle sec start======================================-->

<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="row">
                            <div class="col-md-4 text-center user_profile_img"> <img src="{{asset($job->image)}}" class="width-100"  alt="{{$job->title}}"/>
                                <h4 class="meg-0">{{$f->categories->title??''}}</h4>
                                <span>@if($job->address){{$job->address}},@endif{{$job->locations->title??''}} {{$job->pincode}}</span>
                                <div class="text-center">
                                    <a href="{{url('career/job-apply/'.$job->seo_url)}}"><button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button></a>
                                </div>
                            </div>
                            <div class="col-md-8 user_job_detail">
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-credit-card"></i>{{$job->salary_from}}K To {{$job->salary_to}}K/Month </div>
                                @if($job->contact)
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-mobile"></i>{{$job->contact}}</div>
                                @endif
                                @if($job->email)
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-envelope"></i>{{$job->email}}</div>
                                @endif
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-calendar-alt"></i><span class="full-type">{{$job->emp_type}}</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-user"></i><span class="cl-danger">{{$job->no_of_position}} Open Position</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-shield-virus"></i>{{$job->exp_year_from}} - {{$job->exp_year_to}} Year Exp. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Description</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        {!! $job->shortDescription !!}
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Skill</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                           {!! $job->mediumDescription !!}
                        </ul>
                    </div>
                </div>
                @if($job->map)
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Location</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <iframe src="{{$job->map}}" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Requirements</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                           {!! $job->longDescription !!}
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <!-- Start: Job Overview -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="fas fa-info-circle"></i>Details</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <li><i class="ti-credit-card padd-r-10"></i>Publish Date: @if($job->start_date){{date('F d, Y',strtotime($job->start_date))}} to @endif @if($job->end_date) {{date('F d, Y',strtotime($job->end_date))}} @endif</li>
                                    <li><i class="ti-world padd-r-10"></i>{{$job->website}}</li>
                                    <li><i class="ti-mobile padd-r-10"></i>{{$job->contact}}</li>
                                    <li><i class="ti-email padd-r-10"></i>{{$job->email}}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End: Job Overview -->

                   {{-- <!-- Start: Opening hour -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="far fa-clock"></i>Opening Hours</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list">
                                <ul>
                                    <li>Monday <span>9 AM - 5 PM</span></li>
                                    <li>Tuesday <span>9 AM - 5 PM</span></li>
                                    <li>Wednesday <span>9 AM - 5 PM</span></li>
                                    <li>Thursday <span>9 AM - 5 PM</span></li>
                                    <li>Friday <span>9 AM - 5 PM</span></li>
                                    <li>Saturday <span>9 AM - 3 PM</span></li>
                                    <li>Sunday <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Start: Location -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="fas fa-map-marker-alt"></i>Location</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <!-- End Row -->
@if($similarjobs->count()>0)
        <div class="row">
            <div class="col-md-12">
                <h4 class="mrg-bot-30 title-head">Similar Jobs</h4>
            </div>
        </div>
        <div class="row">
            <!-- Single Job -->
            @foreach($similarjobs as $j)
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type full-type">{{$j->emp_type}}</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox" checked>
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="{{url('career/job-details/'.$j->seo_url)}}"> <img class="img-responsive" src="{{asset($j->image)}}" alt=""> </a> </div>
                        <h5><a href="#">{{$j->title}}</a></h5>
                        <p class="text-muted">@if($job->address){{$job->address}},@endif{{$job->locations->title??''}} {{$job->pincode}}</p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="{{url('career/job-apply/'.$job->seo_url)}}" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


<!--======================================Job Offer middle sec end======================================-->


@include('front.layouts.search-job')
@stop
