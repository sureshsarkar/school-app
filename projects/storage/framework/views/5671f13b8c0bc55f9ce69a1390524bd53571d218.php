
<?php $__env->startSection('title', 'Admin'); ?>
<?php 
    $name="Products";$route="locations";
?>         
<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark"><?php echo e($name); ?> Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('content'); ?>
    <style>label {font-size: 14px;}</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <?php 
            $addbar=["name"=>$name,"add-data"=>false,"add-name"=>"Add ". Str::singular($name),"add-anchor"=>route($route.'.create'),"back-anchor"=>route($route.'.index')];
          ?>
          <?php echo $__env->make("admin.common.add-bar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
              <h3 class="card-title">Edit <?php echo e(Str::singular($name)); ?></h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <?php echo Form::model($data,['route' => [$route.'.update',$data->id],"files"=>"true","method"=>"put"]); ?>

     
                    <?php echo $__env->make("admin.".$route.".form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               
                    <button class="btn btn-success"><span class="fa fa-save"></span> Update</button>
                
                <?php echo Form::close(); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('js'); ?>
<script>

  CKEDITOR.replace( 'longDescription',{ allowedContent:true,filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'} );

  CKEDITOR.replace( 'shortDescription',{ allowedContent:true,filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'} );

  CKEDITOR.replace( 'mediumDescription',{ allowedContent:true,filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'} );



    $(document).on("click",".delete-space-data-from-db",function(){
      var that=$(this);
      id=that.data("id");
      $.get("<?php echo e(route('delete-property-space-single')); ?>?id="+id,function(data){
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
                    <?php echo Form::select("space_type[]",["SPECIFICATION"=>"SPECIFICATION","FEATURES"=>"FEATURES"],null,["required","class"=>"form-control","placeholder"=>" Type","required"]); ?>

                </div>
                <div class="col-md-3">
                    <?php echo Form::text("space_name[]",null,["required","class"=>"form-control","placeholder"=>" Name"]); ?>

                </div>
            
                <div class="col-md-2">
                    <?php echo Form::file("space_image[]",["class"=>"form-control"]); ?>

                </div>
                <div class="col-md-4">
                  
                     <?php echo Form::textarea("space_status[]",null,["required","class"=>"form-control","rows"=>2]); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/admin/locations/edit.blade.php ENDPATH**/ ?>