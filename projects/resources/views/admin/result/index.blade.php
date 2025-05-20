@extends('admin.layouts')
@section('title', 'Admin')
@php
    $name = 'Result';
    $route = 'result';
@endphp
@section('content_header')
    <h1 class="m-0 text-dark">{{ $name }} Management</h1>
@stop

@section('content')
    @parent
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    @php
                        $addbar = [
                            'name' => $name,
                            'add-data' => true,
                            'add-name' => 'Add ' . Str::singular($name),
                            'add-anchor' => route($route . '.create'),
                        ];
                    @endphp
                    @include('admin.common.add-bar')
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12">

                <div class="card  ">
                    <div class="card-header">
                        <h3 class="card-title">{{ $name }} Listing</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                    class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data-table-gaurav" class="table  ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Obtained Marks</th>
                                    <th>Marks</th>
                                    <th>Student</th>
                                    <th>Year</th>
                                    {{-- <th>Roll No</th>
                                    <th>Username</th>
                                    <th> Email</th>
                                    <th> Mobile</th> --}}
                                    <th> Status</th>
                                    {{-- <th>Address</th>
                                    <th> Image</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sno=1;@endphp
                                @foreach ($data as $client)
                                    <tr>

                                        <td>{{ $sno++ }}</td>
                                        <td>
                                            {{ $client->obtained_marks }}
                                        </td>
                                        <td>
                                            {{ $client->marks }}
                                        </td>
                                        <td>
                                            {{ $client->userName->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->year }}
                                        </td>
                                        {{-- <td>
                                            {{ $client->username }}
                                        </td>
                                        <td>
                                            {{ $client->email }}
                                        </td>
                                        <td>
                                            {{ $client->mobile }}
                                        </td> --}}
                                        <td>
                                            @if ($client->publish == 'published')
                                                <a href="{{ route('setPublishData', [$route, $client->id, 'pending']) }}"
                                                    class="btn btn-outline-success btn-xs">Unpublished</a>
                                            @else
                                                <a href="{{ route('setPublishData', [$route, $client->id, 'published']) }}"
                                                    class="btn btn-outline-danger btn-xs">Published</a>
                                            @endif
                                        </td>
                                        {{-- <td>
                                            {{ $client->address }} <br>{{ $client->city }}<br>{{ $client->country }}
                                        </td> --}}

                                        {{-- <td>
                                            @if ($client->image)
                                                <img src="{{ asset($client->image) }}" width="100">
                                            @endif
                                        </td> --}}
                                        <td>
                                            <a href="{!! route($route . '.edit', [$client->id]) !!}"
                                                class="btn  btn-outline-success btn-xs raw-margin-right-8"><i
                                                    class="fa fa-pencil-alt"></i> Edit</a>
                                            <form method="post" action="{!! route($route . '.destroy', [$client->id]) !!}"
                                                style="display: inline-block;">
                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-xs raw-margin-right-8"
                                                    onclick="return confirm('Are you sure you want to delete this {{ Str::singular($name) }}?')"><i
                                                        class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
@section('js')
    @parent
    <script>
        $(function() {
            $("#data-table-gaurav").DataTable({
                "lengthMenu": [
                    [50, -1],
                    [50, "All"]
                ],
                dom: "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            });
        });
    </script>
@stop
