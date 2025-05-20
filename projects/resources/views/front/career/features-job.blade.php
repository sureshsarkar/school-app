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
                Jobs
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
@if($featuresjob->count()>0)
    <section class="job-off-mid-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="job-off-cat">
                        <h5>Type of Employment</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Contract
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Contract
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Contract
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Contract
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Contract
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>

                        <h5>Experience Level</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Entry-Level
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Entry-Level
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Entry-Level
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Entry-Level
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Entry-Level
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-12">
                    <div class="job-list-sort">
                        <h5>Showing 10 jobs</h5>
                        <select class="form-select">
                            <option value="newest" selected="selected">Newest</option>
                            <option value="oldest">Oldest</option>
                        </select>
                    </div>
                    <div class="row">
                        @foreach($featuresjob as $f)

                            @php
                                $skills=\App\Models\WelcomePackage::whereIn('id',explode(',',$f->skill_id))->get();

                                $skill_arr=[];
                                foreach ($skills as $sk){
                                    $skill_arr[]=$sk->name;
                                }
                                if(count($skill_arr)>0){
                                  $skill_string=  implode(', ',$skill_arr);
                                }else{
                                    $skill_string='';
                                }
                            @endphp

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feat-off-box">
                                <a href="{{url('career/job-details/'.$f->seo_url)}}" class="category-feat"><i class="fas fa-chart-line"></i> {{$f->categories->title??''}}</a>
                                <a href="{{url('career/job-details/'.$f->seo_url)}}"><h5>{{$f->company}}</h5></a>
                                <div class="location-feat">
                                    <a href="#"><i class="fas fa-globe-europe"></i>  {{$f->locations->title??''}}</a>
                                    <p>{{$f->emp_type}}</p>
                                </div>
                                <div class="company-detail">
                                    <div class="comp-title">
                                        <p>{{ $f->created_at->format('F d, Y')}} by</p>
                                        <h5>{{$skill_string}}</h5>
                                    </div>
                                    <img src="{{asset($f->image)}}">
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endif
    <!--======================================Job Offer middle sec end======================================-->

    @include('front.layouts.search-job')
@stop
