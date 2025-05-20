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

  <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





    <!--==================================== about page mid start================================-->

    <section class="home-about-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="home-abt-con wow fadeInUp">
                        <div class="home-abt-con-inn case-real-con case-real-first">
                            <h5>Get in touch</h5>
                           <?php echo $data->shortDescription; ?>

                           <?php echo $data->mediumDescription; ?>


                            <div class="contact-page-form">
                                <?php echo Form::open(["route"=>"contactPost"]); ?>

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-contact-submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="home-abt-img wow fadeInUp">
                        <img src="<?php echo e(asset('front/images/contact.png')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================================== about page mid end================================-->


    <section class="contact-detail-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-det-box">
                        <i class="fas fa-phone-alt"></i>
                        <h2>Contact</h2>
                        <p><a href="#"><?php echo e($setting_data['mobile']); ?>/</a></p>
                        <p><a href="#"><?php echo e($setting_data['mobile1']); ?></a></p>
                        <p><a href="#"><?php echo e($setting_data['email']); ?></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-det-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <h2>Address</h2>
                        <?php echo e($setting_data['address']); ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="contact-det-box">
                        <i class="far fa-clock"></i>
                        <h2>Work Hours</h2>
                        <p><?php echo e($setting_data['open-office']); ?></p>
                        <p><?php echo e($setting_data['office-time']); ?></p>
                        <p><?php echo e($setting_data['weekend-closed']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('front.static.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $clients=App\Models\OurClient::orderBy("id","desc")->first(); ?>
    <?php if($clients): ?>
        <!--==================================== brand logo section start================================-->

        <section class="brand-logo-wrapp wow fadeInUp">
            <div class="brand-logo-main">
                <div class="container">
                    <div class="owl-carousel brand-slider">

                        <?php $__currentLoopData = App\Models\OurClient::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <img src="<?php echo e(asset($c->image)); ?>">
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/contact.blade.php ENDPATH**/ ?>