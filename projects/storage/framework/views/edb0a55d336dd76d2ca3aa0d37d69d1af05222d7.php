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
<?php $__env->startSection('css'); ?>
    <style>
        .guide-con h6,li {
            font-size: 20px!important;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>

    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>




    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4><?php echo e($data->name); ?></h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="guide-con">
                            <?php echo $data->shortDescription; ?>

                        </div>
                      
                    </div>
                   
                </div>
            </div>

        </div>
    </section>





   
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/guideline.blade.php ENDPATH**/ ?>