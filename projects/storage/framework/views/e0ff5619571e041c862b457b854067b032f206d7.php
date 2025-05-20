

<?php $__env->startSection('title', 'Admin '); ?>

<?php $__env->startSection('content_header'); ?>
      <h1 class="m-0 text-dark">Media Center</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
		<?php echo \Illuminate\View\Factory::parentPlaceholder('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
              <h3 class="card-title">Media Center</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
            <?php echo Form::open(["route"=>"new-file-uploads","files"=>true]); ?>

            <h5>New File Uploads</h5>
                <div class="row">
                    <div class="col md-9">
                        <input type="file" name="file[]" multiple required class="form-control">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success"> Uploads New Files</button>
                    </div>
                </div>
            <?php echo Form::close(); ?>

            <div class="alert"></div>
                <table id="data-table-gaurav" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Path</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($d!="." && $d!=".."): ?>
                        <?php 
                            $ar=explode(".",$d);
                            $img=false;
                            if(is_array($ar)){
                                if(count($ar)>1){
                                    if(in_array(strtolower(end($ar)), ["jpg","jpeg","gif","bmp","png","webp"])){
                                        $img=true;
                                    }
                                }
                            }
                        ?>
                        <?php if($img==true): ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><img src="<?php echo e(asset('uploads/uploads/'.$d)); ?>" alt="" width="100px;" height="100px"></td>
                            <td><?php echo e(asset('uploads/uploads/'.$d)); ?></td>
                            <td>
                                <form method="post" action="<?php echo route('medias-destroy'); ?>"
                                      style="display: inline-block;">
                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('DELETE'); ?>

                                    <input type="hidden" name="file" value="<?php echo e($d); ?>"/>
                                    <button type="submit" class="btn btn-outline-danger btn-sm raw-margin-right-8"
                                            onclick="return confirm('Are you sure you want to delete this media file?')"><i
                                                class="fa fa-trash"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        
            </div>
            <!-- /.card-body -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<script>
      $("#data-table-gaurav").dataTable({

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/admin.mobbindtechnology.co.in/projects/resources/views/admin/dashboard/medias.blade.php ENDPATH**/ ?>