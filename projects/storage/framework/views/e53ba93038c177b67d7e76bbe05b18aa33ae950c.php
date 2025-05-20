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
    <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--====================================Case Studies venture Development start================================-->


    <section class="home-about-wrapp ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="home-abt-con wow fadeInUp">
                        <div class="home-abt-con-inn case-real-con case-real-first">
                            <h5>Case Studies</h5>
                            <h4><?php echo e($data->cta_title); ?></h4>
                            <?php echo $data->shortDescription; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="home-abt-img wow fadeInUp">
                        <img src="<?php echo e(asset($data->attraction_image)); ?>">
                    </div>
                </div>

                <div class="col-lg-12 col-12 col-md-12">
                    <div class="about-mid-common">
                        <h3><?php echo e($data->cta_description); ?></h3>
                        <?php echo $data->mediumDescription; ?>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <!--====================================Case Studies Venture Development end================================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/case-studies-venture-development.blade.php ENDPATH**/ ?>