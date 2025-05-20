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
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e(strtoupper($name)); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/layouts/banner.blade.php ENDPATH**/ ?>