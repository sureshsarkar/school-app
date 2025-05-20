<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            <?php echo Form::text("seo_url",null,["class"=>"form-control","pattern"=>"[a-zA-Z0-9-_]+", "title"=>"Enter Valid SEO URL", "oninvalid"=>"this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')" ,"onchange"=>"try{setCustomValidity('')}catch(e){}", "oninput"=>"setCustomValidity(' ')","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
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

<?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/admin/welcome_packages/form.blade.php ENDPATH**/ ?>