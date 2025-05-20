<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <?php echo Form::label('name'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
        </div>
    </div>  
  
   

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('image'); ?>

            <?php echo Form::file('image', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->image != ''): ?>
                    <img src="<?php echo e(asset($data->image)); ?>" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes"
                            type="checkbox" id="remove_image">
                        <label for="remove_image" class="custom-control-label">Remove Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("Class"); ?>

            <?php echo Form::select("class_id",ModelHelper::getClassSelectList(),null,["class"=>"form-control","placeholder"=>"choose class"]); ?>

            <span class="text-danger"><?php echo e($errors->first("class_id")); ?></span>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="form-group">
            <?php echo Form::label("Subject"); ?>

            <?php echo Form::select("subject_id",ModelHelper::getSubjectSelectList(),null,["class"=>"form-control","placeholder"=>"choose subject"]); ?>

            <span class="text-danger"><?php echo e($errors->first("subject_id")); ?></span>
        </div>
    </div>

 

</div>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/admin/syllabus/form.blade.php ENDPATH**/ ?>