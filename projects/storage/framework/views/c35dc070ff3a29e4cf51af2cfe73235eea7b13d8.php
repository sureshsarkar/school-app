<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("email"); ?>

            <?php echo Form::email("email",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("email")); ?></span>
        </div>
    </div>
   
</div>
<?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/admin/newsletters/form.blade.php ENDPATH**/ ?>