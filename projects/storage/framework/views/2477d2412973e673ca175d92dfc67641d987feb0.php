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
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
        <!--========================================inner page Banner start=================================-->
    <section class="inner-banner-wrapper" style="background-image: url(<?php echo e(asset($bannerImage)); ?>);">
        <div class="inner-bannner-overlay"></div>
        <div class="inner-banner-content">
            <div class="inner-ban-con">
                <h2><?php echo e($data->description); ?></h2>
            </div>
        </div>
    </section>

    <!--======================================inner page Banner end======================================-->

    <!--======================================about us Banner start======================================-->
    <section class="about-page-middle">
        <div class="container">
            <div class="about-mid-head">
                <h4><?php echo e($name); ?></h4>
                <p><?php echo e($data->description); ?></p>
            </div>
            <div class="about-mid-con">
                <?php echo $data->shortDescription; ?>

            </div>
        </div>
    </section>


    <!--======================================about us Banner end======================================-->

    <!--======================================about us feat start======================================-->
    <section class="about-us-feat">
        <div class="container">
            <div class="about-feat-head">
                <?php echo $data->mediumDescription; ?>

            </div>
            <div class="about-feat-main">
                <div class="row">

                    <?php $__currentLoopData = \App\Models\Weoffer::where('type',$data->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="about-feat-box">
                                <div class="pxp-services-1-item-icon">
                                    <img decoding="async" src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->title); ?>" class="">
                                </div>
                                <h5><?php echo e($c->title); ?></h5>
                                <p><?php echo $c->description; ?></p>
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>

    <!--======================================about us feat end======================================-->


    <!--======================================about us middle start======================================-->
    <?php echo $__env->make('front.static.jobs-counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--======================================about us middle end======================================-->


    <!--======================================about us testimonial start======================================-->
<?php
$testimonials=\App\Models\Testimonial::where('status','true')->limit(6)->get();
?>
    <?php if($testimonials->count()>0): ?>
    <section class="mt-100 testimonial-wrapper">
        <div class="container-fluid">
            <?php echo $data->longDescription; ?>

            <div class="pxp-testimonials-1">
                <div class="pxp-testimonials-1-circles d-none d-md-block">

                    <div class="pxp-testimonials-1-circles-item pxp-item-1 pxp-cover"
                         style="background-image: url(<?php echo e(asset('front/images/customer-1.png')); ?>);"></div>

                    <div class="pxp-testimonials-1-circles-item pxp-item-2 "></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-3 "></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-4 pxp-cover"
                         style="background-image: url(<?php echo e(asset('front/images/customer-2.png')); ?>);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-5 pxp-cover"
                         style="background-image: url(<?php echo e(asset('front/images/customer-3.png')); ?>);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-6 "></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-7 pxp-cover"
                         style="background-image: url(<?php echo e(asset('front/images/customer-4.png')); ?>);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-8 "></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-9 pxp-cover "
                         style="background-image: url(<?php echo e(asset('front/images/customer-5.png')); ?>);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-10 pxp-cover "
                         style="background-image: url(<?php echo e(asset('front/images/customer-6.png')); ?>);"></div>
                </div>

                <div class="pxp-testimonials-1-carousel-container">
                    <div class="row justify-content-center align-items-center testi-row">
                        <div class="col-10 col-md-6 col-lg-6 col-xl-5 col-xxl-4">
                            <div class="owl-carousel testimonial-slider">
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="testi-box">
                                        <p><?php echo e($c->message); ?></p>
                                        <div class="testi-auth">
                                            <h6><?php echo e($c->name); ?></h6>
                                            <p><?php echo e($c->profile); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!--======================================about us testimonial end======================================-->


    <!--======================================about us newsletter start======================================-->

    <section class="mt-100 about-newsletter">
        <div class="container">
            <div class="about-feat-head">
                <?php echo $data->longDescriptiontwo; ?>

            </div>
            <div class="newsletter-abput-sec">
                <img src="<?php echo e(asset($data->image)); ?>">
                <?php echo Form::open(["route"=>"newsletterPost"]); ?>

                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email..." name="email" required>
                        <button class="btn btn-primary" name="submit" value="Submit"  type="submit">
                            Subscribe
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--======================================about us newsletter start======================================-->


   <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/about.blade.php ENDPATH**/ ?>