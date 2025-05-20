
<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("header-section"); ?>
<?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("footer-section"); ?>
<?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>
    <?php
        $name=Str::limit($data->title,30);;
        $bannerImage=asset('front/images/banner.png');
        if($data->image){
            $bannerImage=asset($data->image);
        }
    ?>

      




    <!-- start banner sec -->
<section class="inner-banner-wrapper">
    <div class="inner-banner-img">
        <img src="<?php echo e(asset($bannerImage)); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>" />
        <div class="over-lay"></div>
        <div class="inner-banner-con">
            <div class="container">
                <div class="inner-banner-con-inn">
                    <h2><?php echo e(strtoupper($name)); ?></h2>
                    <div class="bread-crumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i>  Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('blogs')); ?>">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e(strtoupper($name)); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/group/singleofferdetails.blade.php ENDPATH**/ ?>