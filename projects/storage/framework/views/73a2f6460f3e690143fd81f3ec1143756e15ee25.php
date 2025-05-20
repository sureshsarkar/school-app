<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('name'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
        </div>
    </div>  
  
   

    

</div>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/admin/class/form.blade.php ENDPATH**/ ?>