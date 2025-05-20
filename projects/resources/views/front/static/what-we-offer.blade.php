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






    <section class="what-we-wrapp">
       <div class="container">
        <div class="what-we-head">
           <h3>What We Offer</h3>
        </div>
          <div class="row">

@foreach(App\Models\Weoffer::orderBy("id","desc")->where("publish","published")->get() as $c)


             <div class="col-lg-6 col-md-6 col-12">
                <div class="what-we-box">
                   <img src="{{asset($c->image)}}">
                   <div class="what-we-con">
                 <!--  <a href="{{ url('weoffer/'.$c->seo_url) }}/"></a> -->
                      <h5>{{$c->title }}</h5>
                      <p>{!! Str::limit($c->description, 300) !!}</p>
                   </div>
                </div>
             </div>

@endforeach



{!! $data->shortDescription !!}





          </div>
       </div>
    </section>



<!-- ========================= Start ================ -->

        {!! $data->mediumDescription !!}

<!-- =========================  End ================ -->




<!-- ========================= Start ================ -->

    {!! $data->longDescription !!}

<!-- ========================= End ================ -->







@stop