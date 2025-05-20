@extends("front.layouts.master")
@section("title","404 - Page not found")
@section("keywords","404 - Page not found")
@section("description","404 - Page not found")
@section("container")

    @php
        $gaurav_error_404=true;
        $name='404 - Page Not Found';
      
    
        $bannerImage=asset('front/images/banner.png');
       
    @endphp
   
<section class="error-page">
     <div class="container">
       <div class="error-page">
        <div class="error-page-inner">
            <h1>4<i class="theme-clr">0</i>4</h1>
            <span>error! page not found</span>
            <p>It seems we can't find what you're looking for. Perhaps searching can help or go </p>
            <div class="error-button">
                 <a href="{{ url('/') }}"> <i class="fa fa-home"></i> Go Back To Hompage</a>
            </div>
        </div>
    </div>
     </div>
</section>
   


@stop