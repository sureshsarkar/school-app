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
    <!--======================================search by category sec start======================================-->

    <section class="search-by-cat-wrapp">
        <div class="container">
            <div class="shop-cat-head">
                <div class="shop-cat-title">
                    {!! $data->shortDescription !!}
                </div>
            </div>

            <div class="row">
@php
$carrercategory=\App\Models\CareerCategory::whereHas('jobs',function ($q){
                                $q->where('publish','published');
                            })->where('publish','published')->orderBy('ordering','asc')->get();
@endphp
                @if($carrercategory->count()>0)
                    @foreach($carrercategory as $c)
                        @php
                            $jonopen_count=\App\Models\Career::where('category',$c->id)->where('publish','published')->count();
                        @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="sbc-box">
                        <a href="#">
                            <div class="shop-cat-box">
                                <div class="shop-cat-icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <h5>{{$c->title}}</h5>
                                <p>{{$jonopen_count??0}} open positions</p>
                            </div>
                        </a>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!--======================================search by category sec end======================================-->


    @include('front.layouts.search-job')

@stop
