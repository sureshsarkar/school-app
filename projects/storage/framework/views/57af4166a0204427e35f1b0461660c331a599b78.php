<!-- 
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

 -->

<section class="inner-banner-wrapper">
    <div class="inner-banner-img">
        <img src="<?php echo e(asset($bannerImage)); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>">
        <div class="over-lay"></div>
        <div class="inner-banner-con">
            <div class="container">
                <div class="inner-banner-con-inn">
                    <h2><?php echo e(strtoupper($name)); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bread-crumb mb-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(strtoupper($name)); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/layouts/banner.blade.php ENDPATH**/ ?>