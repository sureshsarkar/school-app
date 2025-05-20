<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>

<?php $__env->startSection('container'); ?>


    <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <?php if(isset($user->name)): ?>
                        <div class="imgDiv">
                            <img src="<?php echo e(asset($user->image ?? '')); ?>" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 p-0">
                                <table class="table bg-light">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Roll Number</th>
                                            <td><?php echo e($user->roll_no); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td><?php echo e($user->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Father Name</th>
                                            <td><?php echo e($user->father_name); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mothe Name</th>
                                            <td><?php echo e($user->mother_name); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                             <div class="col-md-6 p-0">
                                <table class="table bg-light">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Roll Number</th>
                                            <td><?php echo e($user->roll_no); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td><?php echo e($user->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Father Name</th>
                                            <td><?php echo e($user->father_name); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mothe Name</th>
                                            <td><?php echo e($user->mother_name); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/user/profile.blade.php ENDPATH**/ ?>