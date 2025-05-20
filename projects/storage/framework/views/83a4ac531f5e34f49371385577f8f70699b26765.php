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
    <?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- start banner sec -->
    <!--========================================inner page Banner start=================================-->
    <section class="inner-banner-wrapper" style="background-image: url(<?php echo e(asset($bannerImage)); ?>);">
        <div class="inner-bannner-overlay"></div>
        <div class="inner-banner-content">
            <div class="inner-ban-con">
                <h2><?php echo e($name); ?></h2>
            </div>
        </div>
    </section>

    <?php echo $data->shortDescription; ?>


    <!--==================================== real estate second section start================================-->

    <?php echo $data->mediumDescription; ?>

    <!--====================================real estate second section end================================-->


    <!--==================================== real estate third section start================================-->


    <?php echo $data->longDescription; ?>

    <!--==================================== real estate third section end================================-->



    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/career-tips.blade.php ENDPATH**/ ?>