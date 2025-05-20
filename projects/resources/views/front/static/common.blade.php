@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("header-section")
{!! $data->header_section !!}
@stop
@section("footer-section")
{!! $data->footer_section !!}
@stop
@section("css")
    <style>
        .left-sec_appr {
            width: 100%;
        }
        .sub-footer{
            display:none;
        }
    </style>
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


    <!-- start about section -->

      <!-- About Section -->
      <section class="about_wrapper mt-4 mb-4">
          <h4 class="text-white text-center">{{$data->name}}</h4>
         <div class="container">
            <div class="row m-0 jury-con">
                <p>{{ $data->description }}
                </p>
                {!! $data->shortDescription !!}
                    {!! $data->mediumDescription !!}
                    {!! $data->longDescription !!}


            </div>
         </div>
      </section>


@if($data->image)
<section class="zimbra-cta-wrapp mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-img">
        <img src="{{ asset($data->image) }}" alt="{{ $data->name }}">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-con">
        <div class="zimb-cta-con-inner">
          {!! $data->cta_description !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@stop
