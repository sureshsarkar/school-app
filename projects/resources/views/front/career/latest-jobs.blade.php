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
                Latest Opportunities
            </h1>
            <div class="pxp-hero-subtitle pxp-text-light ">
                Search your career opportunity through 12,800 jobs
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

    <section class="job-off-mid-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="job-off-cat">
                        <h5>Offerd Salary</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>

                        <h5>Job Type</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>


                        <h5>Designation</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>

                        <h5>Experince</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>


                        <h5>Qualification</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
@if($latestjob->count()>0)
@foreach($latestjob as $job)
    @php
        $skills=\App\Models\WelcomePackage::whereIn('id',explode(',',$job->skill_id))->get();
    @endphp
                    <!-- Single Verticle job -->
                    <div class="job-verticle-list">
                        <div class="vertical-job-card">
                            <div class="vertical-job-header">
                                <div class="vrt-job-cmp-logo"> <a href="#"><img src="{{asset($job->image)}}" class="img-responsive" alt=""></a> </div>
                                <h4><a href="#">{{$job->company}}</a></h4>
                                <span class="com-tagline">{{$job->categories->title??''}}</span> <span class="pull-right vacancy-no">No. <span class="v-count">{{$job->no_of_position}}</span></span>
                            </div>
                            <div class="vertical-job-body">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                        <ul class="can-skils">
                                            <li><strong>Job Type: </strong>{{$job->emp_type}}</li>
                                            <li><strong>Skills: </strong> <div>
                                                    @foreach($skills as $sk)
                                                    <span class="skill-tag">{{$sk->name}}</span>
                                                    @endforeach
                                                </div> </li>
                                            <li><strong>Experience: </strong>{{$job->exp_year_from}} - {{$job->exp_year_to}} Year</li>
                                            <li><strong>Location: </strong> @if($job->address){{$job->address}},@endif{{$job->locations->title??''}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <div class="vrt-job-act"> <a href="{{url('career/job-apply/'.$job->seo_url)}}" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="{{url('career/job-details/'.$job->seo_url)}}" title="" class="btn-job light-gray-btn">View Job</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('front.layouts.search-job')
@stop
