<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
            <?php echo Form::text("parent_id",app('request')->input('parent_id')??$data->parent_id??'0',["class"=>"form-control","hidden"]); ?>

        </div>
    </div>



    <div class="col-md-3">
        <div class="form-group">
              <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            <?php echo Form::text("seo_url",null,["class"=>"form-control", "pattern"=>"[a-zA-Z0-9-_]+", "title"=>"Enter Valid SEO URL", "oninvalid"=>"this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')" ,"onchange"=>"try{setCustomValidity('')}catch(e){}", "oninput"=>"setCustomValidity(' ')"]); ?>

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
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes" type="checkbox" id="remove_image" >
                        <label for="remove_image" class="custom-control-label">Remove  Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-3 d-none">
        <div class="form-group">
            <?php echo Form::label("broucher"); ?>

            <?php echo Form::file("broucher",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("broucher")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->broucher!=""): ?>
                     <a href="<?php echo e(asset(($data->broucher))); ?>" target="_BLANK">File</a>

                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>



    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("bannerImage"); ?>

            <?php echo Form::file("bannerImage",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("bannerImage")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->bannerImage!=""): ?>
                     <img src="<?php echo e(asset(($data->bannerImage))); ?>" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_banner_image" value="yes" type="checkbox" id="remove_banner_image" >
                        <label for="remove_banner_image" class="custom-control-label">Remove Banner Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if(isset($data)): ?>
    <?php if(app('request')->input('parent_id')!=0 || $data->parent_id!=0): ?>

            <div class="col-md-3">
                <div class="form-group">
                    <?php echo Form::label("Title"); ?>

                    <?php echo Form::text("cta_title",null,["class"=>"form-control"]); ?>

                    <span class="text-danger"><?php echo e($errors->first("cta_title")); ?></span>

                </div>
            </div>

    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("Conent First Image"); ?>

            <?php echo Form::file("attraction_image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("attraction_image")); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->attraction_image!=""): ?>
                    <img src="<?php echo e(asset(($data->attraction_image))); ?>" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_attraction_image" value="yes" type="checkbox" id="remove_attraction_image" >
                        <label for="remove_attraction_image" class="custom-control-label">Remove  Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label("Sub Title"); ?>

                <?php echo Form::text("cta_description",null,["class"=>"form-control"]); ?>

                <span class="text-danger"><?php echo e($errors->first("cta_description")); ?></span>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label("Conent Second Image"); ?>

                <?php echo Form::file("cta_image",["class"=>"form-control"]); ?>

                <span class="text-danger"><?php echo e($errors->first("cta_image")); ?></span>
                <?php if(isset($data)): ?>
                    <?php if($data->cta_image!=""): ?>
                        <img src="<?php echo e(asset(($data->cta_image))); ?>" width="200" > <br>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input custom-control-input-danger" name="remove_attraction_image" value="yes" type="checkbox" id="remove_attraction_image" >
                            <label for="remove_attraction_image" class="custom-control-label">Remove  Image</label>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

    <?php endif; ?>
    <?php endif; ?>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("templete"); ?>

            <?php echo Form::select("templete",Helper::getTempleteForCategory(),null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("templete")); ?></span>
        </div>
    </div>





    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("Priority"); ?>

            <?php echo Form::number("ordering",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("ordering")); ?></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("is_home"); ?>

            <?php echo Form::select("is_home",Helper::getBooleanDataActual(),null,["class"=>"form-control"]); ?>

        </div>
    </div>

<div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("Parent category"); ?>

            <?php echo Form::select("is_parent",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent category"]); ?>

            <span class="text-danger"><?php echo e($errors->first("is_parent")); ?></span>
        </div>
    </div>



</div>

<div class="row ">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("short Description"); ?>

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










<?php if(isset($data)): ?>
<div class="row d-none" >
    <div class="col-md-12">
        <a href="javascript:;" class="add-space-data btn btn-info"><i class="fa fa-plus"></i> Add SPECIFICATION & FEATURES</a>
             <hr>
    </div>




</div>
<div class="row gaurav-delete-property">
    <div class="col-md-2">
        <strong> Type</strong>
    </div>
    <div class="col-md-3">
        <strong> Name</strong>
    </div>
    <div class="col-md-2">
        <strong>Image</strong>
    </div>

    <div class="col-md-4">
        <strong>Description</strong>
    </div>
    <div class="col-md-1">
        <strong>Action</strong>
    </div>

    <div class="col-md-12">
        <br>
    </div>
</div>
<div id="space-area-section">
        <?php if(isset($data)): ?>
<?php $__currentLoopData = App\Models\PropertySpace::where("property_id",$data->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row gaurav-delete-property-space">
        <input type="hidden" name="space_id[]" value="<?php echo e($c->id); ?>" >
                <div class="col-md-2">
                    <?php echo Form::select("space_type[]",["SPECIFICATION"=>"SPECIFICATION","FEATURES"=>"FEATURES"],$c->space_type,["required","class"=>"form-control","placeholder"=>" Type","required"]); ?>

                </div>
                <div class="col-md-3">
                    <?php echo Form::text("space_name[]",$c->space_name,["required","class"=>"form-control","placeholder"=>" Name"]); ?>

                </div>

                <div class="col-md-2">
                    <?php echo Form::file("space_image[]",["class"=>"form-control"]); ?>

                    <?php if($c->space_image): ?>
                    <img src="<?php echo e(asset($c->space_image)); ?>" style="height:100px;" >
                    <?php endif; ?>
                </div>
                <div class="col-md-4">

                     <?php echo Form::textarea("space_status[]",$c->space_status,["required","class"=>"form-control","rows"=>2]); ?>

                </div>
                <div class="col-md-1">
                     <a href="javascript:;" class="delete-space-data btn btn-danger btn-xs" ><i class="fa fa-times"></i> </a>
                </div>

                <div class="col-md-12">
                    <br>
                </div>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>






<?php endif; ?>

<div class="row">
    <div class="col-md-12 alert alert-warning text-center">
        <h3>SEO Section</h3>
    </div>
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
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("header_section"); ?>

            <?php echo Form::textarea("header_section",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("header_section")); ?></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("footer_section"); ?>

            <?php echo Form::textarea("footer_section",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("footer_section")); ?></span>
        </div>
    </div>
</div>
<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/admin/locations/form.blade.php ENDPATH**/ ?>