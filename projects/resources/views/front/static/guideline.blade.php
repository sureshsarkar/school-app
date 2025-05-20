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
@section('css')
    <style>
        .guide-con h6,li {
            font-size: 20px!important;
        }

    </style>
@stop
@section("container")

    @php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

{{--
    <section class="banner-wrapper">

        <div class="container">
            <div class="row">
                @include('front.layouts.slider')
                <div class="col-lg-1 col-md-1 col-12">
                    <div class="banner-social">
                        <ul>
                            <li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape">
            <img src="{{asset('front/images/banner-shape.png')}}">
        </div>
    </section>
--}}


    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4>{{$data->name}}</h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="guide-con">
                            {!! $data->shortDescription !!}
                        </div>
                      {{--  <div class="download-guid">
                            <h6><a href="#">DOWNLOAD TOMI AWARDS BRIEF</a></h6>
                            <h6><a href="#">DOWNLOAD TOMI AWARDS GUIDELINES</a></h6>
                        </div>--}}
                    </div>
                   {{-- <div class="col-lg-2 col-md-2 col-12">
                        <div class="guide-img">
                            <img src="{{asset('front/images/logo.png')}}">
                            <img src="{{asset($data->image)}}">
                        </div>
                    </div>--}}
                </div>
            </div>

        </div>
    </section>





   {{-- <section class="sponser-wrapp mt-0 mb-5">
        <div class="container">
            <div class="row">
                @foreach(\App\Models\OurClient::orderBy('id','asc')->limit(4)->get() as $c)
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="spons-head">
                            <h3>{{ucwords($c->title)}}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>--}}
@stop
