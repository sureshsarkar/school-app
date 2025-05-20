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
        $name=$data->title;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp
    <!-- start banner sec -->
<section class="inner-banner-wrapper">
    <div class="inner-banner-img">
        <img src="{{ asset($bannerImage) }}" alt="{{ $name }}" title="{{ $name }}" />
        <div class="over-lay"></div>
        <div class="inner-banner-con">
            <div class="container">
                <div class="inner-banner-con-inn">
                    <h2>{{strtoupper($name)}}</h2>
                    <div class="bread-crumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i>  Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('blogs') }}">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{strtoupper($name)}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<section class="blog-wrapper ">
  <div class="container">
    <div class="home-blog-sec">
      <div class="row">
          @forelse($blogs as $b)
          <div class="col-lg-4 col-md-6 col-12">
          <div class="blog-page">
               @php $date=$b->publish_date; if($date){}else{$date=$b->created_at;} @endphp
               @if($b->featureImage)
                        <div class="home-blog-image">
              
                            <img src="{{ asset($b->featureImage) }}" alt="{{ $b->title }}" class="img-fluid"  />
                             
            </div>
            @endif
                        <div class="blog-content">
              <h4><a href="{{ url('blog/'.$b->seo_url) }}/"> {{$b->title }} </a></h4>
                     <h6 class="blog-feat">
                <span class="blog-date"><i class="far fa-calendar-alt"></i>&nbsp; {{ date('dS F Y',strtotime($date))}}</span>
                  
                  
                      
              </h6>
         
              <a href="{{ url('blog/'.$b->seo_url) }}/" class="blog-read">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
   
  @empty

         @include("front.layouts.empty")

         @endforelse
    
      </div>

      
      <div class="row">{{$blogs->links() }}</div>

    </div>
  </div>
</section>


    

<section class="conten-wrapp">
    <div class="container-fluid">
        <div class="content-inner-div">
               {!! $data->shortDescription !!}
                    {!! $data->mediumDescription !!}
                    {!! $data->longDescription !!}

        </div>
    </div>
</section>



@stop