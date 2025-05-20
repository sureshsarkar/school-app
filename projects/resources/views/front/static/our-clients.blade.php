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

    <!-- start banner sec -->

    

  @include("front.layouts.banner")







 

         <section class="sponsors-section-four">

            <div class="container">

                <div class="row">

                  @foreach(App\Models\OurClient::orderBy("id","desc")->get() as $c)

                    <div class="col-md-3 col-lg-3 col-6">

                        <div class="image-box">

                            <a href="javaScript:;">

                                <img src="{{ asset($c->image) }}" alt="{{ $c->name }}" title="{{ $c->name }}" width="100%" >

                            </a>

                        </div><!-- /.image-box -->

                    </div><!-- /.col-md-6 col-lg-4 -->

                   @endforeach

                </div><!-- /.row -->

            </div><!-- /.auto-container -->

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