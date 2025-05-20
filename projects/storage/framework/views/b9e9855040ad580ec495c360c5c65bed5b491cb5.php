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
                        <img src="<?php echo e($data->image); ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">


                    <div class="login-form-sec">
                        <div class="login-form">
                            <h5><?php echo e($data->name); ?></h5>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">I am candidate</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">I am company</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form action="<?php echo e(route('employee.register')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="role" required value="candidate">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-floating">
                                                    <input type="text" name="fname" class="form-control" placeholder="First Name" id="floatingInput" required>
                                                    <label for="floatingInput">First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-floating">
                                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" id="floatingInput" required>
                                                    <label for="floatingInput">Last Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" required placeholder="Email Address" id="floatingInput">
                                            <label for="floatingInput">Email Address</label>
                                            <i class="far fa-envelope"></i>
                                        </div>


                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="floatingInput" required>
                                            <label for="floatingInput">Create Password</label>
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit">Continue</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <form action="<?php echo e(route('employee.register')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="role" required value="company">
                                        <div class="form-floating">
                                            <input type="text" name="fname" class="form-control" required placeholder="Company Name" id="floatingInput">
                                            <label for="floatingInput">Company Name</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required id="floatingInput">
                                            <label for="floatingInput">Email Address</label>
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="floatingInput" required>
                                            <label for="floatingInput">Create Password</label>
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit">Continue</button>
                                        </div>
                                    </form>
                                </div>

                                <p>New to Jobster? <a href="<?php echo e(url('customer-login')); ?>"> Sign in</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================login page sec end======================================-->


    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/register.blade.php ENDPATH**/ ?>