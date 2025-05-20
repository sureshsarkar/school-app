<?php

$list=App\Models\Slider::where("cms_id",$data->id)->where(["publish"=>"published"])->orderBy("ordering","asc")->get();

?>



<?php if(count($list)>0): ?>

        <section class="main-banner-wrapp">
            <div class="owl-carousel home-banner">
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-7 banner-col">
                            <div class="home-banner-content">
                                <div class="banner-con-img">
                                    <img src="<?php echo e(asset('front/images/banner-con.png')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" >
                                    <div class="banner-content-main">
                                        <div class="cover">
                                            <?php echo $c->description; ?>

                                            <a href="<?php echo e($c->link ?? '#'); ?>"><img src="<?php echo e(asset('front/images/button-shape.png')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" > Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-5 banner-col">
                            <div class="home-banner-img">
                                <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->name); ?>" title="<?php echo e($c->name); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>



<?php endif; ?><?php /**PATH E:\xampp\htdocs\subsidy-pro\projects\resources\views/front/layouts/slider.blade.php ENDPATH**/ ?>