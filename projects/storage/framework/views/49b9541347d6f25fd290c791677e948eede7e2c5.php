<?php $__env->startSection('title', 'Admin'); ?>
<?php
    $name = 'Class'; $route = 'class';
?>
<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark"><?php echo e($name); ?> Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <?php
            $addbar=["name"=>$name,"add-data"=>false,"add-name"=>"Add ".Str::singular($name),"add-anchor"=>route($route.'.create'),"back-anchor"=>route($route.'.index')];
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
              <h3 class="card-title">Create <?php echo e(Str::singular($name)); ?></h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <?php echo Form::open(['route' => $route.'.store',"files"=>"true"]); ?>


                    <?php echo $__env->make("admin.".$route.".form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>

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

<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/admin/class/create.blade.php ENDPATH**/ ?>