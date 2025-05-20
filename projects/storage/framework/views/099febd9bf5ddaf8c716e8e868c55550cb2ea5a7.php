<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>

<?php $__env->startSection("container"); ?>

    <!-- About Section -->


    <section class="about_wrapper mt-4 mb-4">
        <div class="container">
            <div class="row m-0 jury-con text-center">
                <p>Name: <?php echo e($user->name); ?></p>
                <p>User Name: <?php echo e($user->username); ?></p>
                <p>Email: <?php echo e($user->email); ?></p>
                <p>Address: <?php echo e($user->address); ?></p>
                <p>City: <?php echo e($user->city); ?></p>
                <p>Country: <?php echo e($user->country); ?></p>
 <p><a class="nav-link" style= "font-family:GothamBold;color: #fff;" href="<?php echo e(route('user.logout')); ?>"><i class="far fa-user"></i>Logout</a></p>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/profile.blade.php ENDPATH**/ ?>