<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            <?php echo Form::text("seo_url",null,["class"=>"form-control","pattern"=>"[a-zA-Z0-9-_]+", "title"=>"Enter Valid SEO URL", "oninvalid"=>"this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')" ,"onchange"=>"try{setCustomValidity('')}catch(e){}", "oninput"=>"setCustomValidity(' ')","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
        </div>
    </div>

    <div class="col-md-3 d-none">
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



    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label("Category"); ?>

            <?php echo Form::select("type",["News"=>"News","Media"=>"Media","Meeting"=>"Meeting"],null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("type")); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>

     <div class="col-md-6 d-none">
    <div class="col-md-12">
            <?php echo Form::label("Parent Page"); ?>

            <?php echo Form::select("typeeee",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent Page"]); ?>

            <span class="text-danger"><?php echo e($errors->first("typeeee")); ?></span>
        </div>
    </div><br>




    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label("is_home"); ?>

    <?php echo Form::select("is_home",Helper::getBooleanDataActual(),'true',["class"=>"form-control"]); ?>

        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("Priority"); ?>

            <?php echo Form::number("ordering",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("ordering")); ?></span>
        </div>
    </div>
</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>
</div>


<?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/admin/deals/form.blade.php ENDPATH**/ ?>