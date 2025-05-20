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
@section('css')
    <style>
        .guide-con h6,
        li {
            font-size: 20px !important;
        }

        .faq-header {
            font-family: GothamBold1;
            font-size: 42px;
            border-bottom: 1px dotted #ccc;
            padding: 24px;
        }

        .faq-content {
            margin: 0 auto;
        }

        .faq-question {
            padding: 5px 0;
            font-family: GothamBold1;
            border-bottom: 1px dotted #ccc;
        }

        .panel-title {
            font-size: 24px;
            font-family: GothamBold1;
            width: 100%;
            color: #fff;
            position: relative;
            margin: 0;
            padding: 10px 10px 0 48px;
            display: block;
            cursor: pointer;
        }

        .panel-content {
            font-size: 20px;
            font-family: GothamBold1;
            padding: 0px 1px;
            margin: 0 4px;
            color: #fff;
            height: 0;
            overflow: hidden;
            z-index: -1;
            /* position: relative; */
            opacity: 0;
            -webkit-transition: .4s ease;
            -moz-transition: .4s ease;
            -o-transition: .4s ease;
            transition: .4s ease;
        }

        .panel:checked~.panel-content {
            height: auto;
            opacity: 1;
            padding: 14px;
        }

        .plus {
            position: absolute;
            margin-left: 5px;
            margin-top: 10px;
            color: #fff;
            z-index: 5;
            font-size: 42px;
            font-family: GothamBold1;
            line-height: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-transition: .2s ease;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            transition: .2s ease;
        }

        .panel:checked~.plus {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .panel {
            display: none;
        }

        .participate-wrapp {
            background: #5b3aee;
            padding: 35px 0px;
        }
    </style>
@stop
@section('container')

    @php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp


    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4>FAQ's</h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="faq-content">
                            @foreach (App\Models\Faq::orderBy('id', 'asc')->get() as $key => $c)
                                <div class="faq-question">
                                    <input id="q{{ $key + 1 }}." type="checkbox" class="panel">
                                    <div class="plus">+</div>
                                    <label for="q{{ $key + 1 }}." class="panel-title"> {{ $c->question }}</label>
                                    <div class="panel-content"> {!! $c->answer !!}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
