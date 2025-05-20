<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
              <label> Seo Url </label>
            <?php echo Form::text("seo_url",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
        </div>
    </div>



    <div class="col-md-3 ">
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
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("iconImage"); ?>

            <?php echo Form::file("bannerImage",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("bannerImage")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->bannerImage!=""): ?>
                     <img src="<?php echo e(asset(($data->bannerImage))); ?>" width="200" >
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-4 d-none">
        <div class="form-group">
            <?php echo Form::label("templete"); ?>

            <?php echo Form::select("templete",["common"=>"common"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("templete")); ?></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>


</div>



<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("shortDescription"); ?>

            <?php echo Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("shortDescription")); ?></span>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("mediumDescription"); ?>

            <?php echo Form::textarea("mediumDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("mediumDescription")); ?></span>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("longDescription"); ?>

            <?php echo Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("longDescription")); ?></span>
        </div>
    </div>

</div>



<?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/admin/services/form.blade.php ENDPATH**/ ?>