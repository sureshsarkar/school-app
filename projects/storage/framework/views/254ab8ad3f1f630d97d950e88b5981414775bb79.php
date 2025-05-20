<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>

<?php $__env->startSection('container'); ?>


    <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <form action="<?php echo e(route('result')); ?>" enctype="multipart/form-data" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="father_name" class="form-control"
                                        placeholder="Enter Father Name">
                                    <label for="floatingInput">Father Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" name="roll_no" class="form-control"
                                        placeholder="Enter Roll Number">
                                    <label for="floatingInput">Roll Number</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <?php if(isset($user->name)): ?>
                    <div class="imgDiv d-flex justify-content-between">
                        <h1>2024-25</h1>
                        <img src="<?php echo e(asset($user->image ?? '')); ?>" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table bg-light">
                                <?php if(isset($resultData) && count($resultData) > 0): ?>
                                <thead class="thead-dark">
                                    <tr class="title-headdings">
                                        <th scope="col">Year</th>
                                        <th scope="col">Max Marks</th>
                                        <th scope="col">Obtained Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            $max = 0;
                                            $obtained_marks = 0;
                                        ?>
                                        <?php $__currentLoopData = $resultData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($c->year); ?></td>
                                                <td><?php echo e($c->marks); ?></td>
                                                <td><?php echo e($c->obtained_marks); ?></td>
                                            </tr>
                                            <?php
                                                $max = $max + $c->marks;
                                                $obtained_marks = $obtained_marks + $c->obtained_marks;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="border-top-1">
                                            <td><b>Total</b></td>
                                            <td><b><?php echo e($max); ?></b></td>
                                            <td><b><?php echo e($obtained_marks); ?></b></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/result.blade.php ENDPATH**/ ?>