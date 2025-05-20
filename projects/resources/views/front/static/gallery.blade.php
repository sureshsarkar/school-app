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
        <div class="py-[130px] xl:py-[80px] md:py-[60px]">
            <div
                class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
                <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">

                    @foreach ($gallery as $c)
                        <div class="space-y-[30px] lg:space-y-[20px]">
                            <div
                                class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                                <img src="{{ asset($c->image) }}"
                                    alt="{{ $c->thumbnail }}" title="{{ $c->thumbnail }}" class="w-full aspect-square object-cover">
                                <a href="{{ asset($c->image) }}"
                                    data-fslightbox="gallery"
                                    class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                                    <i class="fa-plus fa-regular"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    @endif
    <!-- GALLERY SECTION END -->


@stop
