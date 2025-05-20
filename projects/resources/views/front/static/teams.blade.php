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

    <!--=============================================our team start======================================-->

    <section class="team-wrapper">
        <div class="container">
            <div class="our-customer-head">
                {!! $data->shortDescription !!}
            </div>
@php
$ourteams=\App\Models\OurTeam::all();
@endphp
            @if($ourteams->count()>0)
            <div class="row justify-content-center">
                @foreach($ourteams as $t)
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-main">
                        <img src="{{asset($t->image)}}">
                        <div class="team-con">
                            <h2>{{$t->name}}</h2>
                            <h4>{{$t->profile}}</h4>
                            <p>{{$t->message}} </p>
                            <ul>
                                @if($t->facebook)
                                <li><a href="{{$t->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                    @if($t->instagram)
                                <li><a href="{{$t->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if($t->twitter)
                                <li><a href="{{$t->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if($t->linkedin)
                                        <li><a href="{{$t->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                    @endif

                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!--=============================================our team end======================================-->

    <!--======================================inner page Banner end======================================-->


    <!--======================================job opeaning sec end======================================-->
    @include('front.layouts.search-job')

@stop
