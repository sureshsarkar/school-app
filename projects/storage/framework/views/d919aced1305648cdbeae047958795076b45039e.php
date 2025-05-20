
<?php $__env->startSection('title', 'Admin'); ?>
<?php 
    $name="Sliders";$route="sliders";
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
            $addbar=["name"=>$name,"add-data"=>true,"add-name"=>"Add ". Str::singular($name),"add-anchor"=>route($route.'.create')];
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
              <h3 class="card-title"><?php echo e($name); ?> Listing</h3>
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
                        <th>#</th>
                        <th>Title</th>
                    
                        <th> Page</th>
                        <th> Image</th>
                        <th>Priority</th>
                        <th>Status</th>
                 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $sno=1;?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           
                            <td> <?php echo e($sno++); ?></td>
                            <td>
                                <?php echo e($client->title); ?>

                            </td>
                       
                            <td><?php echo e(App\Models\Cms::find($client->cms_id)->name ?? $client->cms_id); ?></td>
                            <td>
                                    <?php if($client->image): ?>
                                          <img src="<?php echo e(asset($client->image)); ?>" width="100px;" /> 
                                    <?php endif; ?>
                            </td>
                             <td>
                                <?php echo e($client->ordering); ?>

                            </td>
                             <td>
                                 <?php if($client->publish=="published"): ?>
                                    <a href="<?php echo e(route('setPublishData',[$route,$client->id,'pending'])); ?>" class="btn btn-outline-success btn-xs" >Unpublished</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('setPublishData',[$route,$client->id,'published'])); ?>" class="btn btn-outline-danger btn-xs" >Published</a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo route($route.'.edit', [$client->id]); ?>" class="btn btn-outline-success btn-xs raw-margin-right-8"><i
                                            class="fa fa-pencil-alt"></i> Edit</a>
                                <a href="<?php echo route($route.'.copyData', [$client->id]); ?>" class="btn btn-outline-info btn-xs raw-margin-right-8"><i
                                            class="fa fa-copy"></i> Copy</a>
                                            
                                          
                                            
                                <form method="post" action="<?php echo route($route.'.destroy', [$client->id]); ?>"
                                      style="display: inline-block;">
                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('DELETE'); ?>

                                    <button type="submit" class="btn btn-outline-danger btn-xs raw-margin-right-8"
                                            onclick="return confirm('Are you sure you want to delete this <?php echo e($name); ?>?')"><i
                                                class="fa fa-trash"></i>  Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('js'); ?>
<script>
  
  $("#data-table-gaurav").DataTable({"lengthMenu": [[ 50, -1], [ 50, "All"]], "order": [[ 1, "asc" ]],dom: "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",});
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/admin/sliders/index.blade.php ENDPATH**/ ?>