<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("Page*"); ?>

            <?php echo Form::select("cms_id",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"Choose Page","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("cms_id")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="100px;" >
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
  
    


    <div class="col-md-4">
        <div class="form-group">
            
            <?php echo Form::label("Video Url link"); ?>

            <?php echo Form::text("link",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("link")); ?></span>
            
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            
            <?php echo Form::label("priority"); ?>

            <?php echo Form::number("ordering",null,["class"=>"form-control","required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("ordering")); ?></span>
            
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>
   
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>
   

</div><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/admin/sliders/form.blade.php ENDPATH**/ ?>