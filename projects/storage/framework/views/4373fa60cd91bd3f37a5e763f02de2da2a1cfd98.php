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

        <!--==================================inner page banner start==============================-->

    <section class="inner-banner">
        <img src="<?php echo e(asset($data->image)); ?>">
        <div class="inner-page-banner">
            <div class="inner-banner-content">
                <h2><?php echo e($name); ?></h2>

            </div>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
            <li><?php echo e($name); ?></li>
        </ul>
    </section>
    <!--====================================inner page banner end================================-->

    <?php echo $data->shortDescription; ?>


    <?php echo $data->mediumDescription; ?>


    <?php echo $data->longDescription; ?>

    <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--==================================== brand logo section start================================-->

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

    <!--==================================== brand logo section end================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/strategic-advisory.blade.php ENDPATH**/ ?>