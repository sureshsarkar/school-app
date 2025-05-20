@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)

@section('container')


    <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    @if (isset($user->name))
                        <div class="imgDiv">
                            <img src="{{ asset($user->image ?? '') }}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 p-0">
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
                             <div class="col-md-6 p-0">
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
                </div>
            </div>
        </div>
    </section>
@stop
