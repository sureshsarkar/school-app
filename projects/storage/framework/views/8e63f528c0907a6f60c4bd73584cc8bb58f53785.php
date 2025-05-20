<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("logo",$data->image); ?>
<?php $__env->startSection("header-section"); ?>
    <?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("footer-section"); ?>
    <?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>
    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
        <!-- start banner sec -->

    <?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--======================================login page sec start======================================-->

    <section class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="<?php echo e(asset($data->image)); ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <h5>Welcome Back!</h5>
                            <form action="<?php echo e(route('employeelogin')); ?>" enctype="multipart/form-data" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" id="floatingInput">
                                    <label for="floatingInput">Email Address</label>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" placeholder="Password" id="floatingInput">
                                    <label for="floatingInput">Password</label>
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="form-floating">
                                    <button type="submit" >Continue</button>
                                </div>
                            </form>
                            <p><a href="<?php echo e(url('	forgot-password')); ?>">Forgot password</a></p>
                            <p>New to Jobster? <a href="<?php echo e(url('customer-register')); ?>">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================login page sec end======================================-->

    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/login.blade.php ENDPATH**/ ?>