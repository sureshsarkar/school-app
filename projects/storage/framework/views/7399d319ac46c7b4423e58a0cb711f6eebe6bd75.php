<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("seo_url"); ?>

            <?php echo Form::text("seo_url",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
        </div>
    </div>



    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" height="50">
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-3 d-none">
        <div class="form-group">
            <?php echo Form::label("bannerImage"); ?>

            <?php echo Form::file("bannerImage",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("bannerImage")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->bannerImage!=""): ?>
                     <img src="<?php echo e(asset(($data->bannerImage))); ?>" width="200" height="50">
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("isHome"); ?>

            <?php echo Form::select("isHome",["true"=>"true","false"=>"false"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("isHome")); ?></span>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("icon"); ?>

            <?php echo Form::text("icon",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("icon")); ?></span>
        </div>
    </div>



    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("templete"); ?>

            <?php echo Form::select("templete",["common"=>"common"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("templete")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>
       <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("ordering"); ?>

            <?php echo Form::number("ordering",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("ordering")); ?></span>
        </div>
    </div>

    <div class="col-md-4 d-none">
        <div class="form-group">
            <?php echo Form::label("isParent"); ?>

            <?php echo Form::select("isParent",ModelHelper::getCareerCategorySelect(),null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("isParent")); ?></span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Feature description"); ?>

            <?php echo Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("shortDescription")); ?></span>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Medium Description"); ?>

            <?php echo Form::textarea("benefits",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("benefits")); ?></span>
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
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("form_heading"); ?>

            <?php echo Form::textarea("form_heading",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("form_heading")); ?></span>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("form_paragraph"); ?>

            <?php echo Form::textarea("form_paragraph",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("form_paragraph")); ?></span>
        </div>
    </div>
</div>
<h3 class="text-warning">Seo Section</h3>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("meta_title"); ?>

            <?php echo Form::textarea("meta_title",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("meta_title")); ?></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("meta_keywords"); ?>

            <?php echo Form::textarea("meta_keywords",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("meta_keywords")); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("meta_description"); ?>

            <?php echo Form::textarea("meta_description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("meta_description")); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("head_section"); ?>

            <?php echo Form::textarea("head_section",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("head_section")); ?></span>
        </div>
    </div>
</div>
<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/admin/career_categories/form.blade.php ENDPATH**/ ?>