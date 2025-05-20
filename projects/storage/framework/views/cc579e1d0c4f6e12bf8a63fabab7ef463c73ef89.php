<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("per_page_data_section"); ?>
    <?php echo $data->head_section; ?>

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
                <h2><?php echo e($data->description); ?></h2>
            </div>
        </div>
    </section>

    <!--=============================================our team start======================================-->

    <section class="team-wrapper">
        <div class="container">
            <div class="our-customer-head">
                <?php echo $data->shortDescription; ?>

            </div>
<?php
$ourteams=\App\Models\OurTeam::all();
?>
            <?php if($ourteams->count()>0): ?>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $ourteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-main">
                        <img src="<?php echo e(asset($t->image)); ?>">
                        <div class="team-con">
                            <h2><?php echo e($t->name); ?></h2>
                            <h4><?php echo e($t->profile); ?></h4>
                            <p><?php echo e($t->message); ?> </p>
                            <ul>
                                <?php if($t->facebook): ?>
                                <li><a href="<?php echo e($t->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; ?>
                                    <?php if($t->instagram): ?>
                                <li><a href="<?php echo e($t->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($t->twitter): ?>
                                <li><a href="<?php echo e($t->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($t->linkedin): ?>
                                        <li><a href="<?php echo e($t->linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                                    <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!--=============================================our team end======================================-->

    <!--======================================inner page Banner end======================================-->


    <!--======================================job opeaning sec end======================================-->
    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/teams.blade.php ENDPATH**/ ?>