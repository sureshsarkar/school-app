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
        @media (max-width: 767px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }

			.home-slider h2 {
            color: white;font-family:CustomFontb;;
            margin: 0px 0px 40px;
            text-align: center;
            font-size:40px;
            line-height:18px;
            font-weight: 400;
            letter-spacing: -2px;
        }
		.home-slider h3 {
            color: white;font-family:CustomFontb;;
            margin: 0px 0px 40px;
            text-align: center;
            font-size:20px;
             
            font-weight: 400;
            letter-spacing: -2px;
        }

        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }
        .home-slider {
            position: absolute;
            font-family:CustomFontb;
            left: 50%;top:50%;
            transform: translate(-50%, -50%);
            max-width: 99%;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            z-index: 5;
            pointer-events: none;
        }
        .home-slider h2 {
            color: white;font-family:CustomFontb;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 64px;
             
            font-weight: Bold;;
            letter-spacing: -2px;
        }
		
		 .home-slider h3 {
            color: white;font-family:CustomFontb;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 44px;
             
            font-weight: 400;
            letter-spacing: -2px;
        }
        .navbar-collapse .footer-button{
             margin-top: 0px !important;

        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

        /* RESETS */


        /* TIMER STYLES */
        .timeContainer {
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;font-family:CustomFontb;
        }


.counter-wrapperx {  background: #413839;}




        .timeContainer .wrapper {
            width: 800px;
            padding: 20px;
            max-height: 400px;
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .timeContainer .wrapper div {
            color: #ccc;
            text-align: center;
            width: 24%;
            height: 150px;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .timeContainer .wrapper div:first-child{
            background: #454545;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(2){
            background: #00A3D0;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(3){
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div:last-child{
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div h2 {
            font-size: 4.4rem;font-family:CustomFontb;
        }

        .circleDiv {
            position: fixed;
            z-index: -1;
            top: calc(50% - 237px);
            left: calc(-50% + 474px);
            width: 474px;
            height: 474px;
            border-radius: 100%;
            border: 6px dashed #00A3D0;
            animation: rotatingCircle infinite linear 60s;
        }

        @keyframes rotatingCircle {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* MOUSE TRAIL STYLE */
        #cursor {
            position: fixed;
            top: 0;
            left: 0;
            background-color: transparent;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 100%;
            pointer-events: none;
            user-select: none;
            backdrop-filter: invert(100%);
        }
    </style>
    @stop
@section("container")
    @php $name=$data->name; @endphp
 <link rel="stylesheet" href="https://tomi.mobbindtechnology.co.in/front/css/mousestyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
<script  src="https://tomi.mobbindtechnology.co.in/front/css/mousescript.js"></script>
<!--banner -->
   <section class="banner-wrapper" style="background-color: #ed7300 !important;height:600px ;">

  	 <div class="container" style="background-color: #ed7300 !important;height:580px ;"> 
  	 	<div class="row" id="Wrap" style="background-color: #ed7300 !important;height:580px ;"> 
            <div class="home-slider">

<img class="FollowBox" src="https://tomi.mobbindtechnology.co.in/uploads/uploads/couponorg-logo-66bb9eb5987d9.png" alt="">
<h2> Let Oman's creativity Inspire. </h2>
<h3>Oman's First-Ever Marketing Excellence Awards<br>Doesn't Oman deserve its own marketing awards?

</h3>

            </div>
  	 {{--	@include('front.layouts.slider')--}}

  	 {{--	<div class="col-lg-1 col-md-1 col-12">
  	 		<div class="banner-social">
  	 			<ul>
                    @if($setting_data['instagram'])
  	 				<li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                        @if($setting_data['facebook'])
  	 				<li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                        @endif
                        @if($setting_data['twitter'])
  	 				<li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                        @endif
                        @if($setting_data['linkedin'])
                    <li><a href="{{ $setting_data['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
                        @endif

  	 			</ul>
  	 		</div>
  	 	</div>--}}
  	 </div>
  	 </div>
  	  {{--<div class="banner-shape">
  	   	  <img src="{{asset('front/images/banner-shape.png')}}">
  	   </div>--}}
  </section>
  <!-- counter -->
<section class="counter-wrapper">
    <div class="container">
      <div class="row">

          <!-- MOUSE TRAIL -->
{{--
          <div id="cursor"></div>
--}}

          <!-- ROTATING CIRCLE-->
{{--
          <div class="circleDiv"></div>
--}}

          <!-- TIMER -->
          <section class="timeContainer">
              <div class="wrapper" style="">
                  <div class="days" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="days">DD</h2>DAYS
                  </div>
                  <div class="hours" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="hours">HH</h2>HOURS
                  </div>
                  <div class="minutes" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="minutes">MM</h2>MINUTES
                  </div>
                  <div class="seconds" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="seconds">SS</h2>SECONDS
                  </div>
              </div>
          </section>




      </div>

    <div class="counter-bottom mt-5 d-none">
       <div class="row">
           @php
           $i=1;
           @endphp
           @foreach(\App\Models\WelcomePackage::all() as $key=>$c)
@php

if($i==1){
    $color='first-box';
}elseif($i==2){
    $color='second-box';
}elseif ($i==3){
        $color='third-box';

}elseif ($i==4){
           $color='four-box';
 $i=0;
}
$i++;
@endphp

               <div class="col-lg-3 col-md-6 col-12 col-padd">
                   <div class="count-bottom-box {{$color}}">
                       <div class="box-img">
                           <img src="{{asset($c->image)}}">
                       </div>
                       <h5 class="text-center">{{$c->name}}</h5>
                   </div>
               </div>

           @endforeach

       </div>
    </div>

    </div>
</section>



<!-- about -->
    <section class="counter-wrapperx" id="about-tomi">
        <div class="container">
        <!--    <h2 class="text-white" style="padding-top:20px;">{{$data->description}}</h2> -->
    <div class="proccess-tab-inn">


        <div class="process-tab-main">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-12 " >
                 <div class="myhome_big">  {!! strip_tags($data->shortDescription) !!} </div>
                    <div class="process-tab-con">
                        {!! $data->mediumDescription !!}

                    </div>
                </div>
                <div class="col-lg-1 col-md-9 col-12">
                    <div class="myimage">
                        <img src="{{asset($data->image)}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
<!-- video -->
    <section class="about-home" id="video">
        <div class="about-home-main">
            <div class="container">
                <div class="home-abt-mid pt-5 mt-2">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <div class="about-side-img">
                                <div class="first-img">
                                    <a href="{{url('/')}}">   <img src="{!! asset($setting_data['footer_logo'] ?? 'images/logo.png') !!}"></a>
                                </div>
                                <div class="second-img">
                                   {{-- <a href="{{url('online-form')}}">  <img src="{{asset('front/images/mamber.png')}}"></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="about-video">
                                <iframe width="100%" height="415" src="{{$data->cta_description}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
{{--
                        @include('front.layouts.social-media')
--}}
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="jury-wrapp" id="jury">
        <div class="jury-inner-wrapp">
            <div class="container">
                <div class="social-media-tabs jury-tab">
                    <div class="logo-side">
{{--
                        <a href="{{url('/')}}"> <img src="{{asset('front/images/logo.png')}}"></a>
--}}
                    </div>
                    <h2>Judging</h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profiles-tab" data-bs-toggle="pill" data-bs-target="#pills-profiles" type="button" role="tab" aria-controls="pills-profiles" aria-selected="true" style="font-family:CustomFontb !important; font-size:24px !important;text-transform: capitalize!important;">Profiles</button>
                        </li>
						<li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-proccess-tab" data-bs-toggle="pill" data-bs-target="#pills-proccess" type="button" role="tab" aria-controls="pills-proccess" aria-selected="false" style="font-family:CustomFontb !important; font-size:24px !important;text-transform: capitalize!important;">Process</button>
                        </li>

                        <!--<li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trans-tab" data-bs-toggle="pill" data-bs-target="#pills-trans" type="button" role="tab" aria-controls="pills-trans" aria-selected="false">Transparency</button>
                        </li>-->
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade  " id="pills-proccess" role="tabpanel" aria-labelledby="pills-proccess-tab">

                           <div class="proccess-tab-inn">
                                <div class="process-tab-main active">
                                    <div class="row">
<!--                                         {!! $data->longDescription !!}
-->                                         <div class="col-lg-12 col-md-12 col-12">
                                            <div class="process-tab-con">
                                                {!! $data->longDescription !!}
                                            </div>
                                        </div>
<!--                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="{!! asset($setting_data['footer_logo'] ?? 'images/footer-logo.png') !!}">
                                            </div>
                                        </div>
-->                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show" id="pills-profiles" role="tabpanel" aria-labelledby="pills-profiles-tab">
                                <div class="process-tab-main active">
                                 <div class="row">
<!--                                         {!! $data->longDescription !!}
-->                                         <div class="col-lg-12 col-md-12 col-12">
                                            <div class="process-tab-con">
                                                <p>An independent panel of respected marketing experts, selected for their expertise, is responsible for choosing the winners. This panel operates independently from the organizing committee, ensuring unbiased and competent evaluations</p>
                                            </div>
                                        </div>
<!--                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="{!! asset($setting_data['footer_logo'] ?? 'images/footer-logo.png') !!}">
                                            </div>
                                        </div>
-->                                    </div>

                                                <div class="row mt-5">
                    @php
                        $j=1;
                    @endphp

                    @foreach(\App\Models\OurTeam::all() as $c)

                        @php
                            $name=$c->name;
                            $arr_name=explode(" ",$name);
                               if($j==1){
                                   $color='jury1';
                               }elseif($j==2){
                                   $color='jury2';
                               }elseif ($j==3){
                                       $color='jury3';
         $j=0;
                               }
                               $j++;
                        @endphp
                        <div class="col-lg-4 col-md-6 col-12 col-padd">
                            <div class="jury-box {{$color}}  jur-dev-sty">
                                <h3>{{$arr_name[0]??''}}<br> {{$arr_name[1]??''}}</h3>
                                <img src="{{asset($c->image)}}">
                                <div class="banner-social footer-social">

                                    <ul>
                                        @if($c->facebook)
                                            <li><a href="{{ $c->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if($c->instagram)
                                            <li><a href="{{ $c->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                        @endif
                                        @if($c->twitter)
                                            <li><a href="{{ $c->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if($c->linkedin)
                                            <li><a href="{{ $c->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                    </ul>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

                            </div>
                        </div>
<!--                        <div class="tab-pane fade" id="pills-trans" role="tabpanel" aria-labelledby="pills-trans-tab">

                            <div class="proccess-tab-inn">
                                <div class="process-tab-main">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-12">
                                            <div class="process-tab-con">
                                                {!! $data->longDescriptionthree !!}

                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="{!! asset($setting_data['footer_logo'] ?? 'images/footer-logo.png') !!}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
-->                    </div>
                </div>
               <!-- <div class="jury-con mt-5">
                    {!! $data->longDescription !!}
                </div>
                <div class="row mt-5">
                    @php
                        $j=1;
                    @endphp

                    @foreach(\App\Models\OurTeam::all() as $c)

                        @php
                            $name=$c->name;
                            $arr_name=explode(" ",$name);
                               if($j==1){
                                   $color='jury1';
                               }elseif($j==2){
                                   $color='jury2';
                               }elseif ($j==3){
                                       $color='jury3';
         $j=0;
                               }
                               $j++;
                        @endphp
                        <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="jury-box {{$color}}  jur-dev-sty">
                                <h3>{{$arr_name[0]??''}}<br> {{$arr_name[1]??''}}</h3>
                                <img src="{{asset($c->image)}}">
                                <div class="banner-social footer-social">
                                    <ul>
                                        @if($c->facebook)
                                            <li><a href="{{ $c->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if($c->instagram)
                                            <li><a href="{{ $c->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                        @endif
                                        @if($c->twitter)
                                            <li><a href="{{ $c->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if($c->linkedin)
                                            <li><a href="{{ $c->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                    </ul>
                                </div>

                            </div>

                        </div>
                    @endforeach
                  {{--  <div class="col-lg-3 col-md-6 col-12">
                        <div class="jury-box">
                            <img src="{{asset('front/images/banner.png')}}">
                        </div>
                    </div>--}}
                </div>-->
            </div>
        </div>
    </section>







{{--
<section class="about-home d-none" id="event">
  <div class="about-home-main">
   <div class="container">
       <div class="social-media-tabs events-tab">
               <h2>Event</h2>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-hero-sec-tab" data-bs-toggle="pill" data-bs-target="#pills-hero-sec" type="button" role="tab" aria-controls="pills-hero-sec" aria-selected="true">Hero Section</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-event-detail-tab" data-bs-toggle="pill" data-bs-target="#pills-event-detail" type="button" role="tab" aria-controls="pills-event-detail" aria-selected="false">Event Details</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-participate-tab" data-bs-toggle="pill" data-bs-target="#pills-participate" type="button" role="tab" aria-controls="pills-participate" aria-selected="false">Participate</button>
              </li>
              --}}
{{--<li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-our-partner-tab" data-bs-toggle="pill" data-bs-target="#pills-our-partner" type="button" role="tab" aria-controls="pills-our-partner" aria-selected="false">Our Partners</button>
              </li>--}}{{--

             --}}
{{-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-social-media-tab" data-bs-toggle="pill" data-bs-target="#pills-social-media" type="button" role="tab" aria-controls="pills-social-media" aria-selected="false">Social Media</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
              </li>--}}{{--

            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-hero-sec" role="tabpanel" aria-labelledby="pills-hero-sec-tab">

                 <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                            <a href="{{url('/')}}">  <img src="{{asset('front/images/logo.png')}}"></a>
                        </div>
                        <div class="second-img">
                            <a href="{{url('online-form')}}">  <img src="{{asset('front/images/mamber.png')}}"></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                      @php
                      $herosection=\App\Models\Service::where('name','Hero Section')->first();
                      @endphp
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-12">
                          <div class="tab-con-div">
                            <p>{{$herosection->description}}</p>
                              {!! $herosection->shortDescription !!}
                          </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-12">
                         <div class="tab-img">
                           <img src="{{asset($herosection->image)}}">
                         </div>
                       </div>
                    </div>
                  </div>
                  @include('front.layouts.social-media')
               </div>
            </div>

              </div>
              <div class="tab-pane fade" id="pills-event-detail" role="tabpanel" aria-labelledby="pills-event-detail-tab">

                <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                            <a href="{{url('/')}}">   <img src="{{asset('front/images/logo.png')}}"></a>
                        </div>
                        <div class="second-img">
                            <a href="{{url('online-form')}}">   <img src="{{asset('front/images/mamber.png')}}"></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                      @php
                          $eventdetails=\App\Models\Service::where('name','Event Details')->first();
                      @endphp
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-12">
                          <div class="tab-con-div">
                              <p>{{$eventdetails->description}}</p>
                              {!! $eventdetails->shortDescription !!}
                          </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-12">
                         <div class="tab-img">
                           <img src="{{asset($eventdetails->image)}}">
                         </div>
                       </div>
                    </div>
                  </div>
                   @include('front.layouts.social-media')
                 --}}
{{-- <div class="col-lg-1 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>--}}{{--

               </div>
            </div>

              </div>
              <div class="tab-pane fade" id="pills-participate" role="tabpanel" aria-labelledby="pills-participate-tab">
                  <div class="home-abt-mid pt-5 mt-2">
                      <div class="row">
                          <div class="col-lg-2 col-md-3 col-12">
                              <div class="about-side-img">
                                  <div class="first-img">
                                      <a href="{{url('/')}}">    <img src="{{asset('front/images/logo.png')}}"></a>
                                  </div>
                                  <div class="second-img">
                                      <a href="{{url('online-form')}}"> <img src="{{asset('front/images/mamber.png')}}"></a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-9 col-md-6 col-12">

                              <div class="row">
                                  <div class="col-lg-12 col-md-6 col-12">
                                      <div class="tab-con-div">
                                          {!! $data->mediumDescription !!}
                                      </div>

                                      <div class="row">
                                          @foreach(\App\Models\Location::where('publish','published')->orderBy('ordering','asc')->get() as $c)
                                              <div class="col-lg-3 col-md-6 col-12">
                                                  <div class="part-box">
                                                      <div class="icon-img">
                                                          <img src="{{asset($c->image)}}">
                                                      </div>

                                                      <a href="{{url($c->seo_url)}}"> <img src="{{asset($c->bannerImage)}}"></a>
                                                  </div>
                                              </div>
                                          @endforeach
                                      </div>
                                      <div class="footer-button mt-5 pt-3">
                                          <ul>
                                              <li><a href="{{url('inline-form')}}"><i class="far fa-user"></i>Login</a></li>
                                              <li><a href="{{url('online-form')}}">Register</a></li>
                                          </ul>
                                      </div>

                                  </div>

                              </div>
                          </div>
                          @include('front.layouts.social-media')
                          --}}
{{--<div class="col-lg-1 col-md-3 col-12">
                              <div class="banner-social abt-social">
                                <ul>
                                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                              </div>
                          </div>--}}{{--

                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-our-partner" role="tabpanel" aria-labelledby="pills-our-partner-tab">

                <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                            <a href="{{url('/')}}">  <img src="{{asset('front/images/logo.png')}}"></a>
                        </div>
                        <div class="second-img">
                            <a href="{{url('online-form')}}">   <img src="{{asset('front/images/mamber.png')}}"></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                      @php
                          $participate=\App\Models\Service::where('name','Event Details')->first();
                      @endphp
                    <div class="row">
                       <div class="col-lg-12 col-md-6 col-12">
                          <div class="tab-con-div">
                              <p>{{$participate->description}}</p>
                              {!! $participate->shortDescription !!}
                          </div>

                            <div class="partner-logo">
                                <ul>
                                    @foreach(\App\Models\OurClient::orderBy('id','asc')->limit(6)->get() as $c)
                                  <li><img src="{{asset($c->image)}}" alt="{{$c->title}}"></li>
                                    @endforeach
                                </ul>
                            </div>

                       </div>

                    </div>
                  </div>
                   @include('front.layouts.social-media')
                  --}}
{{--<div class="col-lg-1 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>--}}{{--

               </div>
            </div>

              </div>
             --}}
{{-- <div class="tab-pane fade" id="pills-social-media" role="tabpanel" aria-labelledby="pills-social-media-tab">5</div>--}}{{--

             --}}
{{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">6</div>--}}{{--

            </div>
            </div>


            <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                            <a href="{{url('/')}}">   <img src="{{asset('front/images/logo.png')}}"></a>
                        </div>
                        <div class="second-img">
                            <a href="{{url('online-form')}}">  <img src="{{asset('front/images/mamber.png')}}"></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12">
                    <div class="about-video">
                       <iframe width="100%" height="415" src="{{$data->cta_description}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                 @include('front.layouts.social-media')
               </div>
            </div>


   </div>
 </div>
</section>
--}}




{{--
<section class="sponser-wrapp d-none">
  <div class="container">
    <div class="row">
--}}
{{--
     <div class="col-lg-4 col-md-4 col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
--}}{{--

                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
        @foreach(\App\Models\OurClient::orderBy('id','asc')->limit(12)->get() as  $key=>$c)
                            <div class="carousel-item @if($key==0)active @endif">
     <div class="col-lg-3 col-md-3 col-12">
        <div class="spons-head">
           <h3>{{ucwords($c->title)}}</h3>
        </div>
     </div>
     </div>
        @endforeach
--}}
{{--
     <div class="col-lg-4 col-md-4 col-12">
       <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
--}}{{--

  </div>
  </div>
  </div>
  </div>
  </div>
</div>
</section>
--}}




<section class="participate-wrapp" id="participate">
   <div class="container">
      <div class="parti-head">

         <h4>Participate</h4>

          <div class="parti-con">
              {!! $data->longDescriptionfour !!}
{{--
            <img src="{{asset('front/images/participate.png')}}">
--}}
          </div>
      </div>
      <div class="row mt-5">
          @foreach(\App\Models\Location::where('publish','published')->orderBy('ordering','asc')->get() as $c)
         <div class="col-lg-3 col-md-6 col-6">
            <div class="part-box">
              <div class="icon-img">
               <img src="{{asset($c->image)}}">
               </div>
                @if($c->seo_url=='company-login')
                    @if(!\Illuminate\Support\Facades\Auth::guard('employee')->user())
                        <a href="{{url($c->seo_url)}}"> <img src="{{asset($c->bannerImage)}}" alt="{{$c->title}}"></a>
                    @else
                        <a href="{{url("company-ads")}}"> <img src="{{asset($c->bannerImage)}}" alt="{{$c->title}}"></a>
                    @endif
                @elseif($c->seo_url=='category')
                    @if(!\Illuminate\Support\Facades\Auth::guard('voter')->user())
                        <a href="{{url('vote-now')}}"> <img src="{{asset($c->bannerImage)}}" alt="{{$c->title}}"></a>
                    @else
                        <a href="{{url($c->seo_url)}}"> <img src="{{asset($c->bannerImage)}}" alt="{{$c->title}}"></a>
                    @endif

                    @else
                    <a href="{{url($c->seo_url)}}"> <img src="{{asset($c->bannerImage)}}" alt="{{$c->title}}"></a>
                @endif

            </div>
         </div>
          @endforeach
      </div>
      <div class="footer-button mt-5 pt-3">
      <ul>
          @if(!\Illuminate\Support\Facades\Auth::guard('employee')->user())
             {{-- <li><a href="{{url('online-form')}}"><i class="far fa-user"></i>Login</a></li>
              <li><a href="{{url('online-form')}}">Register</a></li>--}}
          @endif
            </ul>
    </div>
   </div>
</section>


{{--
    <section class="social-media-wrapp d-none" id="socialmedia">

        <div class="container">

            <div class="social-media-tabs">
                <div class="logo-side">
                    <a href="{{url('/')}}">  <img src="{{asset('front/images/logo.png')}}"></a>
                </div>
                <h2>Social Media</h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">News</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Media</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Meetings</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
@php
$news=\App\Models\Deal::where('type','News')->where('publish','published')->first();
@endphp
                        <div class="proccess-tab-inn">
                            <div class="process-tab-main">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-12">
                                        <div class="process-tab-con">
                                            {!! $news->description??'' !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="process-tab-img">
                                            <img src="{{asset($news->image??'')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        @php
                            $media=\App\Models\Deal::where('type','Media')->where('publish','published')->first();
                        @endphp
                        <div class="proccess-tab-inn">
                            <div class="process-tab-main">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-12">
                                        <div class="process-tab-con">
                                            {!! $media->description??'' !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="process-tab-img">
                                            <img src="{{asset($media->image??'')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        @php
                            $metting=\App\Models\Deal::where('type','Meeting')->where('publish','published')->first();
                        @endphp
                        <div class="proccess-tab-inn">
                            <div class="process-tab-main">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-12">
                                        <div class="process-tab-con">
                                            {!! $metting->description??'' !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="process-tab-img">
                                            <img src="{{asset($metting->image??'')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="social-media-bottom">
                <div class="counter-bottom mt-5">
                    <div class="row">
                        @php
                            $jj=1;
                        @endphp
                        @foreach(\App\Models\Weoffer::all() as $c)

                            @php
                                $name=$c->title;
                              //  $arr_name=explode(" ",$name);
                                   if($jj==1){
                                       $color='first-box';
                                   }elseif($jj==2){
                                       $color='second-box';
                                   }elseif ($jj==3){
                                           $color='third-box';

                                   }elseif ($jj==4){
                                       $color='four-box';
                                      $jj=0;
                                   }
                                   $jj++;
                            @endphp
                        <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="count-bottom-box {{$color}}">
                                <div class="box-img">
                                    <img src="{{asset($c->image)}}" alt="{{$name}}">
                                </div>
                                <h5 class="text-center">{{$name}}</h5>
                            </div>
                        </div>
                        @endforeach
                       --}}
{{-- <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="count-bottom-box second-box">
                                <div class="box-img">
                                    <img src="images/arab-employee-celebrating-award.jpg">
                                </div>
                                <h5>Innovation Resigns <br>Supreme</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="count-bottom-box third-box">
                                <div class="box-img">
                                    <img src="images/group-arabic-people-engineer.jpg">
                                </div>
                                <h5>Brand Shine at TOMI<br> Ceremony</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="count-bottom-box four-box">
                                <div class="box-img">
                                    <img src="images/man-with-glasses-beard-sitting-table-with-laptop-generative-ai.jpg">
                                </div>
                                <h5>Marketing Stars: Oman Celebrates!</h5>
                            </div>
                        </div>--}}{{--

                    </div>
                </div>
            </div>
        </div>
    </section>
--}}






    <!--=============================================footer top start======================================-->


    <!--=============================================footer top end======================================-->
@stop
@section("js")
<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>
    <script>
        $(document).ready(function() {
            // MOUSE TRAIL JS GSAP3
            document.addEventListener("mousemove", (ev) => {
                const x = ev.clientX,
                    y = ev.clientY;

                // lag cursor behind mouse
                gsap.to("#cursor", {
                    duration: (i) => 0.2 + i/10,
                    x,
                    y
                });
            });

// TIMER JS
            const __days = document.querySelector("#days")
            const __hours = document.querySelector("#hours")
            const __minutes = document.querySelector("#minutes")
            const __seconds  = document.querySelector("#seconds")

// Change the of this variable.
// ex: May 22 2024 18:00:00
// May 22, 2024 at 6PM
            const newYearEnd = 'OCT 01 2024 10:00:00';

            function countdown(){
                const newYearEndDate = new Date(newYearEnd);
                const currentDate = new Date();

                const totalSeconds = (newYearEndDate-currentDate)/1000;
                const days = Math.floor(totalSeconds / 3600 / 24);
                const hours = Math.floor(totalSeconds / 3600 ) % 24;
                const minutes = Math.floor(totalSeconds / 60 ) % 60;
                const seconds = Math.floor(totalSeconds % 60);


                __days.innerHTML =  formatTime(days);
                __hours.innerHTML = formatTime(hours);
                __minutes.innerHTML = formatTime(minutes);
                __seconds.innerHTML = formatTime(seconds);
                // console.log(seconds)
                // console.log(minutes)
                // console.log(hours)

            }
            countdown();

            function formatTime(time){
                return time < 10 ? `0${time}` : time;
            }

            setInterval(countdown,1000);
        });
    </script>
@stop



