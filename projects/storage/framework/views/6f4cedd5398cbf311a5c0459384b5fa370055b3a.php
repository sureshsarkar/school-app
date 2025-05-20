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
    <!--======================================search by category sec start======================================-->

    <section class="search-by-cat-wrapp">
        <div class="container">
            <div class="shop-cat-head">
                <div class="shop-cat-title">
                    <?php echo $data->shortDescription; ?>

                </div>
            </div>

            <div class="row">
<?php
$carrercategory=\App\Models\CareerCategory::whereHas('jobs',function ($q){
                                $q->where('publish','published');
                            })->where('publish','published')->orderBy('ordering','asc')->get();
?>
                <?php if($carrercategory->count()>0): ?>
                    <?php $__currentLoopData = $carrercategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $jonopen_count=\App\Models\Career::where('category',$c->id)->where('publish','published')->count();
                        ?>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="sbc-box">
                        <a href="#">
                            <div class="shop-cat-box">
                                <div class="shop-cat-icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <h5><?php echo e($c->title); ?></h5>
                                <p><?php echo e($jonopen_count??0); ?> open positions</p>
                            </div>
                        </a>
                    </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--======================================search by category sec end======================================-->


    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/static/careerCategorList.blade.php ENDPATH**/ ?>