@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)

@section('container')

    <!-- About Section -->
    

    <section class="about_wrapper mt-4 mb-4">
        <div class="container">
            <div class="row m-0 jury-con text-center">
                <p>Name: {{ $user->name }}</p>
                <p>Roll Number: {{ $user->roll_no }}</p>
                <p>User Name: {{ $user->username }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>City: {{ $user->city }}</p>
                <p>Country: {{ $user->country }}</p>
                <p><a class="nav-link" style= "font-family:GothamBold;color: #fff;" href="{{ route('user.logout') }}"><i
                            class="far fa-user"></i>Logout</a></p>
            </div>
        </div>
    </section>


@stop
