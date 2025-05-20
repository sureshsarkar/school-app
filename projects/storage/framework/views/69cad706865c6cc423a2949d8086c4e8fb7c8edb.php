<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>

<?php $__env->startSection("container"); ?>
    <?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="pxp-page-header-simple form-header" style="background-color: #e6f0f9;">
        <div class="container">
            <h1 class="">
                Apply Now Details
            </h1>
            <div class="pxp-hero-subtitle pxp-text-light ">
                <?php echo e($job->title); ?>

            </div>
        </div>
    </section>


    <!--======================================apply now sec end======================================-->

    <!--======================================apply now middle sec start======================================-->

    <section class="login-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">


                    <div class="login-form-sec">
                        <div class="login-form apply-now-form">
                            <h5><?php echo e($job->categories->title??''); ?></h5>
                            <p><?php if($job->address): ?><?php echo e($job->address); ?>,<?php endif; ?><?php echo e($job->locations->title??''); ?> <?php echo e($job->pincode); ?></p>

                            <form action="<?php echo e(url('career/apply-now/'.$job->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" required name="contactnumber" class="form-control" title="please enter a valid phone number" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Upload Cv</label>
                                            <input type="file" name="image" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Pase Cv</label>
                                            <textarea name="message" class="form-control" placeholder="Pase Cv"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="<?php echo e(asset('front/images/register.png')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--======================================apply now middle sec end======================================-->


    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/career/apply-form.blade.php ENDPATH**/ ?>