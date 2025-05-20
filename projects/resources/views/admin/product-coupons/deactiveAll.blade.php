@extends('admin.layouts')
@section('title', 'Admin')
@php 
    $name="Coupons";$route="product-coupons";
@endphp              
@section('content_header')
    <h1 class="m-0 text-dark">{{$name}} Management</h1>
@stop

@section('content')
    @parent
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          @php 
            $addbar=["name"=>$name,"add-data"=>false,"add-name"=>"Add ". Str::singular($name),"add-anchor"=>route($route.'.create'),"add-activate"=>true,"add-delete"=>true];
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
              <h3 class="card-title">{{ $name }} Listing</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data-table-gaurav" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th># <input type="checkbox" class="all-select"></th>
                        <th>Name</th>
                        <th>SEO URL</th>
                       
                        <th>Category</th>
                        <th>Store</th>
                        <th>Expiry Date</th>
                        
                        <th>Coupon Type</th>
                        <th>Exclusive</th>
                        <th>Prority</th>
                        
                        <th>Status</th>
                        
                  
                        
                   
              
                        
                    
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @php $sno=1;@endphp
                    @foreach($data as $client)
                        <tr>
                           
                             <td> {{ $sno++ }} <input type="checkbox" class="single-select" name="ids[]" value="{{ $client->id }}"></td>
                            <td>
                                {{ $client->name }}
                            </td>
                            <td>
                                {{ $client->seo_url }}
                            </td>
                     
                            <td>
                                {{ App\Models\Location::find($client->location_id)->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Store::find($client->store_id)->title ?? '' }}
                            </td>
                            <td>
                                {{ $client->end_date }}
                            </td>
                            <td>
                                {{ $client->product_type }}
                            </td>
                          
                            <td>
                                @if($client->exclusive == "true")
                                    <i class="fa fa-check text-success"></i> true
                                @else
                                    <i class="fa fa-times text-danger"></i> false
                                @endif
                            </td>
                     <td>
                                {{ $client->ordering }}
                            </td>
                            <td>
                                @if($client->status == "true")
                                    <i class="fa fa-check text-success"></i> true
                                @else
                                    <i class="fa fa-times text-danger"></i> false
                                @endif
                            </td>
                           

                            
                           
                          
                         
                        
                         
                     
                            
                   
                           
                        
                            <td>

                                <a href="{!! route($route.'.edit', [$client->id]) !!}" 
                                            onclick="return confirm('Are you sure you want to Edit this {{ $name }}?')" class="btn btn-success btn-xs raw-margin-right-8 btn-block"><i
                                            class="fa fa-pencil-alt"></i> Edit </a>


                                @if($client->status=="true")

                                    <a href="{!! route($route.'.deactive', [$client->id]) !!}" 
                                            onclick="return confirm('Are you sure you want to deactive this {{ $name }}?')" class="btn btn-warning btn-xs raw-margin-right-8 btn-block"><i
                                            class="fa fa-times"></i>Deactive </a>
                                @else
                                     <a href="{!! route($route.'.active', [$client->id]) !!}" 
                                            onclick="return confirm('Are you sure you want to active this {{ $name }}?')" class="btn btn-outline-warning btn-xs raw-margin-right-8 btn-block"><i
                                            class="fa fa-check"></i>Active </a>
                                @endif
                                <form method="post" class="" action="{!! route($route.'.destroy', [$client->id]) !!}"
                                      style="margin-top: 5px;">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-danger btn-block btn-xs raw-margin-right-8"
                                            onclick="return confirm('Are you sure you want to delete this {{ $name }}, Destroy All child data?')"><i
                                                class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                                
                              
                              <br>
                            
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
@section("js")
@parent
<script>
  
  $("#data-table-gaurav").DataTable({"lengthMenu": [[ 50, -1], [ 50, "All"]],dom: "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",});

 $(document).on("click",".activate-checkbox",function () {
      ajaxCallCheckBoxDelete("Activate","{{ route('activeAllCheckboxCoupon') }}","{{ url()->current() }}","Coupon")
  });
 $(document).on("click",".delete-checkbox",function () {
      ajaxCallCheckBoxDelete("Delete","{{ route('deleteAllCheckboxCoupon') }}","{{ url()->current() }}","Coupon")
  });
</script>
@stop