<div class="row">
 
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("company"); ?>

            <?php echo Form::text("company",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("company")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("SEO URL"); ?>

            <?php echo Form::text("seo_url",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("seo_url")); ?></span>
        </div>
        </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("Employment Type"); ?>

            <?php echo Form::select("emp_type",["Full-Time"=>"Full-Time","Part-Time"=>"Part-Time"],null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("emp_type")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("Skills"); ?>

            <?php echo Form::select("skill_id[]",ModelHelper::getCareerSkillSelect(),null,["class"=>"form-control select2","multiple"=>"multiple"]); ?>

            <span class="text-danger"><?php echo e($errors->first("skill_id")); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("location"); ?>

            <?php echo Form::select("location",ModelHelper::getCareerLocationSelect(),null,["class"=>"form-control select2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("location")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("No. of Position"); ?>

            <?php echo Form::number("no_of_position",null,["class"=>"form-control","min"=>0,"step"=>"any"]); ?>

            <span class="text-danger"><?php echo e($errors->first("no_of_position")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
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
    <div class="col-md-4 d-none">
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

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","draft"=>"draft","pending"=>"pending"],null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("category"); ?>

            <?php echo Form::select("category",ModelHelper::getCareerCategorySelect(),null,["class"=>"form-control select2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("category")); ?></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("Experience From (year)"); ?>

            <?php echo Form::number("exp_year_from",null,["class"=>"form-control","min"=>0,"step"=>"any"]); ?>

            <span class="text-danger"><?php echo e($errors->first("exp_year_from")); ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("Experience to (year)"); ?>

            <?php echo Form::number("exp_year_to",null,["class"=>"form-control","min"=>0,"step"=>"any"]); ?>

            <span class="text-danger"><?php echo e($errors->first("exp_year_to")); ?></span>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("Salary Range From (in K(1000))"); ?>

            <?php echo Form::number("salary_from",null,["class"=>"form-control","min"=>0,"step"=>"any"]); ?>

            <span class="text-danger"><?php echo e($errors->first("salary_from")); ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("Salary Range To (in K(1000))"); ?>

            <?php echo Form::number("salary_to",null,["class"=>"form-control","min"=>0,"step"=>"any"]); ?>

            <span class="text-danger"><?php echo e($errors->first("salary_to")); ?></span>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("start_date"); ?>

            <?php echo Form::date("start_date",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("start_date")); ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("end_date"); ?>

            <?php echo Form::date("end_date",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("end_date")); ?></span>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("Contact No."); ?>

            <?php echo Form::text("contact",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("contact")); ?></span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("Website"); ?>

            <?php echo Form::text("website",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("website")); ?></span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <?php echo Form::label("Email"); ?>

            <?php echo Form::email("email",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("email")); ?></span>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label("Is Featured"); ?>

            <?php echo Form::select("is_featured",["No"=>"No","Yes"=>"Yes"],null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("is_featured")); ?></span>
        </div>
    </div>


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
            <?php echo Form::label("Short Description"); ?>

            <?php echo Form::textarea("shortDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("shortDescription")); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Medium Description"); ?>

            <?php echo Form::textarea("mediumDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("mediumDescription")); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Long Description"); ?>

            <?php echo Form::textarea("longDescription",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("longDescription")); ?></span>
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
<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/admin/careers/form.blade.php ENDPATH**/ ?>