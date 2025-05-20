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
    @include("front.layouts.inner-header")
    <!-- start banner sec -->
    <!--========================================inner page Banner start=================================-->
    <section class="inner-banner-wrapper" style="background-image: url({{asset($bannerImage)}});">
        <div class="inner-bannner-overlay"></div>
        <div class="inner-banner-content">
            <div class="inner-ban-con">
                <h2>{{$name}}</h2>
            </div>
        </div>
    </section>

    {!! $data->shortDescription !!}

    <!--==================================== real estate second section start================================-->

    {!! $data->mediumDescription !!}
    <!--====================================real estate second section end================================-->


    <!--==================================== real estate third section start================================-->


    {!! $data->longDescription !!}
    <!--==================================== real estate third section end================================-->



    @include('front.layouts.search-job')



@stop
