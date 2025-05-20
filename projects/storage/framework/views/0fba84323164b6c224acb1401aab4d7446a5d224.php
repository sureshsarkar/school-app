
<section class="inner-banner">
    <img src="<?php echo e(asset($bannerImage)); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>">
    <div class="inner-page-banner">
        <div class="inner-banner-content">
            <h2><?php echo e(strtoupper($name)); ?></h2>

        </div>
    </div>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
        <li><?php echo e(strtoupper($name)); ?></li>
    </ul>
</section>
<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/layouts/banner.blade.php ENDPATH**/ ?>