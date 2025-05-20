@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("logo",$data->image)
@section("header-section")
{!! $data->header_section !!}
@stop
@section("footer-section")
{!! $data->footer_section !!}
@stop
@section("container")

@php
$name=$data->name;
$bannerImage=asset('front/images/banner.png');
if($data->bannerImage){
$bannerImage=asset($data->bannerImage);
}
@endphp
@include("front.layouts.banner")

<!--====================================Case Studies real estate start================================-->

<section class="home-about-wrapp case-studies-wrapp">
    <div class="container">
        <div class="case-study-real-estate">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="home-abt-con wow fadeInUp">
                        <div class="home-abt-con-inn case-real-con case-real-first">
                            <h5>Case Studies</h5>
                            <h4>{{$data->cta_title}}</h4>
                            {!! $data->shortDescription !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="home-abt-con wow fadeInUp">
                        <div class="home-abt-con-inn case-real-con case-real-sec">
                            {!! $data->mediumDescription !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-about-wrapp pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="home-abt-img wow fadeInUp">
                    <img src="{{asset($data->attraction_image)}}">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
                <div class="home-abt-con wow fadeInUp">
                    <div class="home-abt-con-inn">
                        <h5>{{$data->cta_description}}</h5>
                        {!! $data->longDescription !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--====================================Case Studies real estate end================================-->


@stop
