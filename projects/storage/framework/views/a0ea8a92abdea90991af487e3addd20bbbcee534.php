<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
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

    <div class="col-md-4">
        <div class="form-group">
            
            <?php echo Form::label("email"); ?>

            <?php echo Form::email("email",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("email")); ?></span>
            
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            
            <?php echo Form::label("mobile"); ?>

            <?php echo Form::text("mobile",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("mobile")); ?></span>
            
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            
            <?php echo Form::label("profile"); ?>

            <?php echo Form::text("profile",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("profile")); ?></span>
            
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            
            <?php echo Form::label("city"); ?>

            <?php echo Form::text("city",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("city")); ?></span>
            
        </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
            <?php echo Form::label("Parent Page"); ?>

            <?php echo Form::select("type",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent Page"]); ?>

            <span class="text-danger"><?php echo e($errors->first("type")); ?></span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("message"); ?>

            <?php echo Form::textarea("message",null,["class"=>"form-control","rows"=>2]); ?>

            <span class="text-danger"><?php echo e($errors->first("message")); ?></span>
        </div>
    </div>


</div><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/admin/our-teams/form.blade.php ENDPATH**/ ?>