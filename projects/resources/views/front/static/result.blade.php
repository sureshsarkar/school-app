@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)

@section('container')


    <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <form action="{{ route('result') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="father_name" class="form-control"
                                        placeholder="Enter Father Name">
                                    <label for="floatingInput">Father Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" name="roll_no" class="form-control"
                                        placeholder="Enter Roll Number">
                                    <label for="floatingInput">Roll Number</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    @if (isset($user->name))
                    <div class="imgDiv d-flex justify-content-between">
                        <h1>2024-25</h1>
                        <img src="{{ asset($user->image ?? '') }}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table bg-light">

                                <tbody>
                                        <tr>
                                            <th scope="col">Roll Number</th>
                                            <td>{{ $user->roll_no }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Father Name</th>
                                            <td>{{ $user->father_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mothe Name</th>
                                            <td>{{ $user->mother_name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table bg-light">
                                @if (isset($resultData) && count($resultData) > 0)
                                <thead class="thead-dark">
                                    <tr class="title-headdings">
                                        <th scope="col">Year</th>
                                        <th scope="col">Max Marks</th>
                                        <th scope="col">Obtained Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $max = 0;
                                            $obtained_marks = 0;
                                        @endphp
                                        @foreach ($resultData as $c)
                                            <tr>
                                                <td>{{ $c->year }}</td>
                                                <td>{{ $c->marks }}</td>
                                                <td>{{ $c->obtained_marks }}</td>
                                            </tr>
                                            @php
                                                $max = $max + $c->marks;
                                                $obtained_marks = $obtained_marks + $c->obtained_marks;
                                            @endphp
                                        @endforeach
                                        <tr class="border-top-1">
                                            <td><b>Total</b></td>
                                            <td><b>{{ $max }}</b></td>
                                            <td><b>{{ $obtained_marks }}</b></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
@stop
