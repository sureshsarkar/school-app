@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)

@section("container")





<section class="thank-you-page">
    <div class="container">
        <div class="thankyou-content">
            <h2>THANK YOU FOR VOTING!</h2>
        </div>
    </div>
</section>

    <section class="banner-wrappers" style="background-color: #fff !important;">

        <div class="container" style="background-color: #fff !important;">
            <div class="row" id="Wrap" style="background-color: #fff !important;">
                <div class="home-slider" >

<!-- 
                    <h2 class="text-center" style="margin-top: 175px; background-color: #fff">THANK YOU FOR VOTING! </h2> -->
                    
<!-- <h3>Oman's First-Ever Marketing Excellence Awards<br>Doesn't Oman deserve its own marketing awards? -->

{{--
                    </h3>
--}}

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

@stop
@section('js')
    <!-- <script>
        window.setTimeout(function(){
            window.location.href = "{{url('category')}}";

        }, 2000);

    </script> -->
@stop
