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
        <!-- start banner sec -->

    @include("front.layouts.banner")


    <!--==================================== Services mid start================================-->

    <section class="home-about-wrapp">
        <div class="container">

            {!! $data->shortDescription !!}
            @foreach(App\Models\Service::orderBy("id","desc")->get() as $key=>$c)
                @php
                    if ($key % 2 == 0){
                @endphp
                <div class="serv-desk-div">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="home-abt-img service-page-img wow fadeInUp">
                                <img src="{{asset($c->image)}}">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="home-abt-con service-box-page wow fadeInUp">
                                <div class="home-abt-con-inn case-real-con realestate-con">
                                    <h3>{{$c->name}}</h3>
                                    <p>{!! $c->description !!}</p>
                                    <a href="{{url("services/".$c->seo_url)}}">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @php
                    }else{
                @endphp
                <div class="serv-desk-div serv-left-design">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="home-abt-con service-box-page wow fadeInUp">
                                <div class="home-abt-con-inn case-real-con realestate-con">
                                    <h3>{{$c->name}}</h3>
                                    <p>{!! $c->description !!}</p>
                                    <a href="{{url("services/".$c->seo_url)}}">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="home-abt-img service-page-img wow fadeInUp">
                                <img src="{{asset($c->image)}}">
                            </div>
                        </div>

                    </div>
                </div>
                @php
                    }
                @endphp

            @endforeach

            {{-- <div class="serv-desk-div serv-left-design">
                 <div class="row">

                     <div class="col-lg-8 col-md-8 col-12">
                         <div class="home-abt-con service-box-page wow fadeInUp">
                             <div class="home-abt-con-inn case-real-con realestate-con">
                                 <h3>venture development</h3>
                                 <p>In the fast-paced world  of  venture  capital , we provide invaluable guidance to entrepreneurs and investors alike. </p>
                                 <a href="#">Read More</a>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-4 col-md-4 col-12">
                         <div class="home-abt-img service-page-img wow fadeInUp">
                             <img src="images/serv1.png">
                         </div>
                     </div>

                 </div>
             </div>




             <div class="serv-desk-div">
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-12">
                         <div class="home-abt-img service-page-img wow fadeInUp">
                             <img src="images/serv1.png">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-12">
                         <div class="home-abt-con service-box-page wow fadeInUp">
                             <div class="home-abt-con-inn case-real-con realestate-con">
                                 <h3>Strategic advisory</h3>
                                 <p>Our strategic advisory services cater to clients seeking strategic investments in promising businesses. Withan extensive & network of industry </p>
                                 <a href="#">Read More</a>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>--}}


        </div>
    </section>

    <!--==================================== Services mid end================================-->

    @include('front.static.jobs-counter')
    {!! $data->mediumDescription !!}

    @include('front.static.map')
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

