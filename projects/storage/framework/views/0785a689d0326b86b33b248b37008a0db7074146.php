<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>
 
    <div class="col-md-6 ">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" > <br>
                     
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes" type="checkbox" id="remove_image" >
                        <label for="remove_image" class="custom-control-label">Remove  Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>2]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>


</div><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/admin/our-clients/form.blade.php ENDPATH**/ ?>