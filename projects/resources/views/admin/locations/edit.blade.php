@extends('admin.layouts')
@section('title', 'Admin')
@php
    $name="Participate";$route="locations";
@endphp
@section('content_header')
    <h1 class="m-0 text-dark">{{$name}} Management</h1>
@stop

@section('content')
    @parent
    <style>label {font-size: 14px;}</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          @php
            $addbar=["name"=>$name,"add-data"=>false,"add-name"=>"Add ". Str::singular($name),"add-anchor"=>route($route.'.create'),"back-anchor"=>route($route.'.index')];
          @endphp
          @include("admin.common.add-bar")
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
              <h3 class="card-title">Edit {{ Str::singular($name) }}</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               {!! Form::model($data,['route' => [$route.'.update',$data->id],"files"=>"true","method"=>"put"]) !!}

                    @include("admin.".$route.".form")

                    <button class="btn btn-success"><span class="fa fa-save"></span> Update</button>

                {!! Form::close() !!}
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
@section("js")
@parent
<script>

  CKEDITOR.replace( 'longDescription',{ allowedContent:true,filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'} );

  CKEDITOR.replace( 'shortDescription',{ allowedContent:true,filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'} );

  CKEDITOR.replace( 'mediumDescription',{ allowedContent:true,filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'} );



    $(document).on("click",".delete-space-data-from-db",function(){
      var that=$(this);
      id=that.data("id");
      $.get("{{ route('delete-property-space-single') }}?id="+id,function(data){
        that.parents(".gaurav-delete-property-space").remove();
      })

    });


  $(document).on("click",".delete-space-data",function(){
        $(this).parents(".gaurav-delete-property-space").remove();
    });


    $(document).on("click",".add-space-data",function(){
        html=`
            <div class="row gaurav-delete-property-space">
                <div class="col-md-2">
                    {!! Form::select("space_type[]",["SPECIFICATION"=>"SPECIFICATION","FEATURES"=>"FEATURES"],null,["required","class"=>"form-control","placeholder"=>" Type","required"]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::text("space_name[]",null,["required","class"=>"form-control","placeholder"=>" Name"]) !!}
                </div>

                <div class="col-md-2">
                    {!! Form::file("space_image[]",["class"=>"form-control"]) !!}
                </div>
                <div class="col-md-4">

                     {!! Form::textarea("space_status[]",null,["required","class"=>"form-control","rows"=>2]) !!}
                </div>
                <div class="col-md-1">
                    <a href="javascript:;" class="delete-space-data btn btn-danger btn-xs" ><i class="fa fa-times"></i> </a>
                </div>

                <div class="col-md-12">
                    <br>
                </div>
            </div>
        `;

        $("#space-area-section").append(html);
    });
</script>
@stop
