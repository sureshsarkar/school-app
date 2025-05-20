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
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

    <section class="category-wrapper">
<div class="mb-5 text-center text-white">
    <h4  class="text-center mt-5">{{$name}}</h4>
</div>
        <div class="container">
            <div class="row" tyle="background-color:red !important;">
                @foreach(\App\Models\Deal::orderBy('ordering','asc')->where('publish','published')->get() as $c)
<!--<div class="col-md-2 mt-2">
                <div class="card mb-2" style="height: 100px;
  resize: both;
  overflow: auto;
  max-width: 100vw !important;
">

    <a href="{{url('vote-now/'.$c->seo_url)}}"> <button class="btn btn-warning">{{$c->title}}</button></a>
    </div>
</div>
--><div class="card col-lg-2 col-md-3 col-sm-4 col-6 mt-2 me-2 mycard " >
    <div class="card-body mycard1" style="background-color:#ffc107 !important;">
            <a href="{{url('ads/'.$c->seo_url)}}"> <button class=" mycard1 btn btn-warning">{{$c->title}}</button></a>

    </div>
</div>
                @endforeach
            </div>
        </div>

    </section>
@stop
