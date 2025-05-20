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


    <!--========================================contact detail sec start=================================-->

    <section class="contact-detail-wrapper">
        <div class="container">
            <div class="about-feat-head">
                <h4><?php echo e($data->description); ?></h4>
                <?php echo $data->shortDescription; ?>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-box">
                        <div class="shop-cat-box">
                            <div class="shop-cat-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <p><?php echo e($setting_data['address']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-box">
                        <div class="shop-cat-box">
                            <div class="shop-cat-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p><?php echo e($setting_data['mobile']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-box">
                        <div class="shop-cat-box">
                            <div class="shop-cat-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <p><?php echo e($setting_data['email']); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--======================================contact detail sec end======================================-->

    <!--======================================contact form sec start======================================-->

    <section class="contact-form-wrapper">
        <div class="container">
            <div class="about-feat-head">
                <h4><?php echo e($name); ?></h4>
            </div>
            <div class="contact-form-main">
                <?php echo Form::open(["route"=>"contactPost"]); ?>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Type Your Message Here."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--======================================contact form sec end======================================-->

<?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/contact.blade.php ENDPATH**/ ?>