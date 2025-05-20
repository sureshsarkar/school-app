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

    @include("front.layouts.inner-header")

<style>

</style>
    <!--======================================login page sec start======================================-->

     <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="{{asset($data->image)}}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <h5>Welcome Back!</h5>
                            <form action="{{route('user.login')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input type="number" name="roll_no" class="form-control" placeholder="Enter Roll Number">
                                    <label for="floatingInput">Roll Number</label> 
                                </div> 
                                <div class="form-floating mt-2">
                                    <button type="submit" class="btn btn-success" >Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================login page sec end======================================-->
 


@stop
