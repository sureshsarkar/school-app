<?php

$list=App\Models\Slider::where(["publish"=>"published"])->orderBy("ordering","asc")->get();

?>


<?php if(count($list)>0): ?>
    <div class="offset-lg-3 col-lg-8 col-md-8 col-12">
        <div class="main-slider owl-carousel">
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <div class="slider-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="banne-content">
                                <div class="banner-con-inner">
                                    <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->name); ?>" title="<?php echo e($c->name); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider-img">
                                <img src="<?php echo e(asset($c->image2)); ?>" alt="<?php echo e($c->name); ?>" title="<?php echo e($c->name); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/layouts/slider.blade.php ENDPATH**/ ?>