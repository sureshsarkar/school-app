@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)

@section("container")

    <!-- About Section -->
{{--
    <section class="banner-wrapper">

        <div class="container">
            <div class="row">
                @include('front.layouts.slider')
                <div class="col-lg-1 col-md-1 col-12">
                    <div class="banner-social">
                        <ul>
                            <li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape">
            <img src="{{asset('front/images/banner-shape.png')}}">
        </div>
    </section>
--}}

    <section class="about_wrapper mt-4 mb-4">
        <div class="container">
            <div class="row m-0 jury-con text-center">
                <p>Name: {{$user->name}}</p>
                <p>User Name: {{$user->username}}</p>
                <p>Email: {{$user->email}}</p>
                <p>Address: {{$user->address}}</p>
                <p>City: {{$user->city}}</p>
                <p>Country: {{$user->country}}</p>
 <p><a class="nav-link" style= "font-family:GothamBold;color: #fff;" href="{{route('user.logout')}}"><i class="far fa-user"></i>Logout</a></p>
            </div>
        </div>
    </section>


@stop
