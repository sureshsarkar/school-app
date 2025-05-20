@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("per_page_data_section")
{!! $data->head_section !!}
@stop
@section("container")
@php

        $name=$data->name;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

@include("front.layouts.inner-header")
    <!-- start banner sec -->
<!--========================================inner page Banner start=================================-->
<section class="inner-banner-wrapper" style="background-image: url({{asset($bannerImage)}});">
    <div class="inner-bannner-overlay"></div>
    <div class="inner-banner-content">
        <div class="inner-ban-con">
            <h2>{{$data->description}}</h2>
        </div>
    </div>
</section>

<!--======================================inner page Banner end======================================-->

<!--======================================career page Banner start======================================-->
<section class="about-page-middle">
    <div class="container">
        <div class="about-mid-head">
            <h4>{{$name}}</h4>
            {!! $data->shortDescription !!}
        </div>
        <div class="about-mid-con">
            {!! $data->mediumDescription !!}
        </div>
    </div>
</section>
<!--======================================career page Banner end======================================-->

<!--======================================career mid sec start======================================-->
<section class="career-feat-wrapp">
    <div class="container">
        <div class="row">
            @php
                $carrersupports= \App\Models\Weoffer::where('type',$data->id)->get();
            @endphp
            @if($carrersupports->count()>0)
                @foreach($carrersupports as $c)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="contact-box">
                    <div class="shop-cat-box">
                        <div class="shop-cat-icon">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <h6>{{$c->title}}</h6>
                        {!! $c->description !!}
                    </div>
                </div>
            </div>
                @endforeach
            @endif

        </div>
    </div>
</section>

<!--======================================career mid sec end======================================-->


<!--======================================about us middle start======================================-->
@include('front.static.jobs-counter')

<!--======================================about us middle end======================================-->


<!--======================================job opeaning sec start======================================-->

<section class="job-open-wrapp">
    <div class="container">
        <div class="job-open-head">
            {!! $data->longDescription !!}
        </div>
        @php
            $carrercategory=\App\Models\CareerCategory::whereHas('jobs',function ($q){
                                $q->where('publish','published');
                            })->where('publish','published')->orderBy('ordering','asc')->get();
        @endphp
        @if($carrercategory->count()>0)
        <div class="job-open-list">
            <ul>
                @foreach($carrercategory as $c)
                    @php
                        $jonopen_count=\App\Models\Career::where('category',$c->id)->where('publish','published')->count();
                    @endphp
                <li>
                    <div class="job-open-box">
                        <div class="job-open-con">
                            <h5>{{$c->title}}</h5>
                            <p>Total Openings: {{$jonopen_count??0}}</p>
                        </div>
                        <a href="{{url('career/latest-opportunities/'.$c->seo_url)}}">Apply Now</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</section>

<!--======================================job opeaning sec end======================================-->
@include('front.layouts.search-job')

@stop

