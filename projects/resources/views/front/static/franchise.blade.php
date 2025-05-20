@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)
@section('logo', $data->image)
@section('header-section')
    {!! $data->header_section !!}
@stop
@section('footer-section')
    {!! $data->footer_section !!}
@stop
@section('container')

    @php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp
    <!-- start banner sec -->

    @include('front.layouts.banner')

    @php
        $gallery = App\Models\Gallery::where('status','active')->orderBy('id', 'desc')->get();
    @endphp 
    <!-- GALLERY SECTION START -->
    @if (count($gallery) > 0)
        
    @endif
    <!-- GALLERY SECTION END -->


@stop
