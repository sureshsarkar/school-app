<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
             <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            <?php echo Form::text("seo_url",null,["class"=>"form-control",  "title"=>"Enter Valid SEO URL"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
        </div>
    </div>
 
    
    <div class="col-md-4 d-none ">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>
    
    <div class="col-md-4  ">
        <div class="form-group">
            <?php echo Form::label("status"); ?>

            <?php echo Form::select("status",["active"=>"active","deactive"=>"deactive"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("status")); ?></span>
        </div>
    </div>
    

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("category"); ?>

            <?php echo Form::select("blog_category_id",ModelHelper::getBlogCategoriesSelect(),null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("blog_category_id")); ?></span>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="form-group">
            <?php echo Form::label("Banner image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" /> 
                     
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="banner_image_remove" >Remove Banner Image
              </label>
            </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-4  ">
        <div class="form-group">
            <?php echo Form::label("featureImage"); ?>

            <?php echo Form::file("featureImage",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("featureImage")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->featureImage!=""): ?>
                     <img src="<?php echo e(asset(($data->featureImage))); ?>" width="200" /> 
                     
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="featureImage_remove" >Remove Banner Image
              </label>
            </div>
                <?php endif; ?>
            <?php endif; ?>
            
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
            <?php echo Form::label("longDescription"); ?>

            <?php echo Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("longDescription")); ?></span>
        </div>
    </div>

</div>
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

</div><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/admin/blogs/form.blade.php ENDPATH**/ ?>