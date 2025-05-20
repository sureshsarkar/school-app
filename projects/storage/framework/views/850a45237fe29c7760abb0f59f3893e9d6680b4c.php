<div class="row">
     <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('User'); ?>

            <?php echo Form::select('user_id', ModelHelper::getUserSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose user',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('user_id')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Marks'); ?>

            <?php echo Form::text('marks', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('marks')); ?></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Obtained Marks'); ?>

            <?php echo Form::text('obtained_marks', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('obtained_marks')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Subject'); ?>

            <?php echo Form::select('subject_id', ModelHelper::getSubjectSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose subject',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('subject_id')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Session'); ?>

            <?php echo Form::select('session_id', ModelHelper::getSessionSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose session',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('session_id')); ?></span>
        </div>
    </div>


    
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label('Year'); ?>

            <?php echo Form::text('year', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('year')); ?></span>

        </div>
    </div>

    

</div>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/admin/result/form.blade.php ENDPATH**/ ?>