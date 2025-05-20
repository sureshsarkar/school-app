<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('name'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Username'); ?>

            <?php echo Form::text('username', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('username')); ?></span>
        </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Father Name'); ?>

            <?php echo Form::text('father_name', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('father_name')); ?></span>
        </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Mother Name'); ?>

            <?php echo Form::text('mother_name', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('mother_name')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Roll Number'); ?>

            <?php echo Form::text('roll_no', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('roll_no')); ?></span>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('email'); ?>

            <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('Mobile'); ?>

            <?php echo Form::text('mobile', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('password'); ?>

            <?php echo Form::password('password', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>

        </div>
    </div>
    <div class="col-md-4  ">
        <div class="form-group">
            <?php echo Form::label('status'); ?>

            <?php echo Form::select('status', ['1' => 'active', '0' => 'deactive'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
        </div>
    </div>

    <div class="col-md-3 ">
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

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php echo Form::label('Address'); ?>

                <?php echo Form::textarea('address', null, ['class' => 'form-control', 'rows' => '2']); ?>

                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('City'); ?>

            <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('Country'); ?>

            <?php echo Form::text('country', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('country')); ?></span>

        </div>
    </div>

</div>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/admin/customers/form.blade.php ENDPATH**/ ?>