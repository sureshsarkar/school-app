@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)

@section("container")
    @include("front.layouts.inner-header")

    <section class="pxp-page-header-simple form-header" style="background-color: #e6f0f9;">
        <div class="container">
            <h1 class="">
                Apply Now Details
            </h1>
            <div class="pxp-hero-subtitle pxp-text-light ">
                {{$job->title}}
            </div>
        </div>
    </section>


    <!--======================================apply now sec end======================================-->

    <!--======================================apply now middle sec start======================================-->

    <section class="login-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">


                    <div class="login-form-sec">
                        <div class="login-form apply-now-form">
                            <h5>{{$job->categories->title??''}}</h5>
                            <p>@if($job->address){{$job->address}},@endif{{$job->locations->title??''}} {{$job->pincode}}</p>

                            <form action="{{url('career/apply-now/'.$job->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" required name="contactnumber" class="form-control" title="please enter a valid phone number" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Upload Cv</label>
                                            <input type="file" name="image" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Pase Cv</label>
                                            <textarea name="message" class="form-control" placeholder="Pase Cv"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="{{asset('front/images/register.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--======================================apply now middle sec end======================================-->


    @include('front.layouts.search-job')
@stop

