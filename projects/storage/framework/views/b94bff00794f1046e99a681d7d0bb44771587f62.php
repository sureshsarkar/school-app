<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" > 
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
   
   
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("longDescription")); ?></span>
        </div>
    </div>

   
</div>

<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/admin/welcome_packages/form.blade.php ENDPATH**/ ?>