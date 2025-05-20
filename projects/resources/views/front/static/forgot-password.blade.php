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

    <!--======================================login page sec start======================================-->

    <section class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="{{$data->image}}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <h5>Forgot Password</h5>
                            <form action="{{route('employee.forgot.password')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" id="floatingInput" required>
                                    <label for="floatingInput">Email Address</label>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="form-floating">
                                    <button type="submit">Get new password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================login page sec end======================================-->

    @include('front.layouts.search-job')


@stop
