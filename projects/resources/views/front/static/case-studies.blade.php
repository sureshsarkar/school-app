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
    <!--====================================Case Studies mid start================================-->

    <section class="home-about-wrapp case-studies-wrapp">
        <div class="container">
            <div class="case-studies-list">
                {!! $data->shortDescription !!}
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach(App\Models\Location::orderBy("id","asc")->where('parent_id',0)->get() as $key=>$c)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($key==0) active @endif " id="pills-home-tab{{$key}}"
                                    data-bs-toggle="pill" data-bs-target="#pills-home{{$key}}" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">{{$c->name}}</button>
                        </li>
                    @endforeach
                    {{--<li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Venture Development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Strategic Advisory</button>
                    </li>--}}
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    @php
                        $datas= App\Models\Location::with('children')->orderBy("id","asc")->where('parent_id',0)->get();

                    @endphp
                    @foreach($datas as $key11=>$c1)

                        <div class="tab-pane fade @if($key11==0)show active @endif" id="pills-home{{$key11}}"
                             role="tabpanel" aria-labelledby="pills-home-tab{{$key11}}">

                            <div class="case-page-list-main">
                                <div class="row">
                                    @if($c1->children->count()>0)
                                        @foreach($c1->children as $key1=>$c2)

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <a href="{{url("case-studies/".$c2->seo_url)}}">
                                                    <div class="case-list-box">
                                                        <div class="case-list-img">
                                                            <img src="{{asset($c2->image)}}">
                                                            <div class="case-list-box-con">
                                                                <div class="case-list-con-inn">
                                                                    <h4>{{$c2->name}}</h4>
                                                                    <p>{{$c2->created_at}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>


                        </div>
                    @endforeach


                    {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="case-page-list-main">
                             <div class="row">
                                 <div class="col-lg-3 col-md-6 col-12">
                                     <div class="case-list-box">
                                         <div class="case-list-img">
                                             <img src="{{asset('front/images/case-list.jpeg')}}">
                                             <div class="case-list-box-con">
                                                 <div class="case-list-con-inn">
                                                     <h4>Watch Me Solve a REPE Technical Interview Modeling Test (Updated Nov 2021)</h4>
                                                     <p>November 9, 2021</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                         <div class="case-page-list-main">
                             <div class="row">
                                 <div class="col-lg-3 col-md-6 col-12">
                                     <div class="case-list-box">
                                         <div class="case-list-img">
                                             <img src="{{asset('front/images/case-list.jpeg')}}">
                                             <div class="case-list-box-con">
                                                 <div class="case-list-con-inn">
                                                     <h4>Watch Me Solve a REPE Technical Interview Modeling Test (Updated Nov 2021)</h4>
                                                     <p>November 9, 2021</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!--==================================== Case Studies mid end================================-->

    @include('front.static.jobs-counter')

    @include('front.static.map')
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
    <script
        src="{{ asset('front/assets/jquery/jquery.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
    <script>
        $(function () {

            // go to the latest tab, if it exists:
            var lastTab = localStorage.getItem('lastTab');
            if (lastTab) {

                $('#' + lastTab).trigger('click');
                localStorage.clear();

                /* $('[href="' + lastTab + '"]').tab('show');*/
            }
        });
    </script>
@stop
