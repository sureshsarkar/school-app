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

        <!--==================================inner page banner start==============================-->

    @include("front.layouts.banner")
    <!--====================================inner page banner end================================-->

    {!! $data->shortDescription !!}

    {!! $data->mediumDescription !!}

    {!! $data->longDescription !!}
    @include('front.static.jobs-counter')
    <!--==================================== brand logo section start================================-->

    @php $clients=App\Models\OurClient::orderBy("id","desc")->first(); @endphp
    @if($clients)
        <!--==================================== brand logo section start================================-->

        <section class="brand-logo-wrapp wow fadeInUp">
            <div class="brand-logo-main">
                <div class="container">
                    <div class="owl-carousel brand-slider">

                        @foreach(App\Models\OurClient::orderBy("id","desc")->get() as $c)
                            <div class="item">
                                <img src="{{asset($c->image)}}">
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--==================================== brand logo section end================================-->
@stop
