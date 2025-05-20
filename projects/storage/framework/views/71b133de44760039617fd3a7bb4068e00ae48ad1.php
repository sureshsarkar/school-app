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

<!--======================================inner page Banner end======================================-->

<!--======================================career page Banner start======================================-->
<section class="about-page-middle">
    <div class="container">
        <div class="about-mid-head">
            <h4><?php echo e($name); ?></h4>
            <?php echo $data->shortDescription; ?>

        </div>
        <div class="about-mid-con">
            <?php echo $data->mediumDescription; ?>

        </div>
    </div>
</section>
<!--======================================career page Banner end======================================-->

<!--======================================career mid sec start======================================-->
<section class="career-feat-wrapp">
    <div class="container">
        <div class="row">
            <?php
                $carrersupports= \App\Models\Weoffer::where('type',$data->id)->get();
            ?>
            <?php if($carrersupports->count()>0): ?>
                <?php $__currentLoopData = $carrersupports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="contact-box">
                    <div class="shop-cat-box">
                        <div class="shop-cat-icon">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <h6><?php echo e($c->title); ?></h6>
                        <?php echo $c->description; ?>

                    </div>
                </div>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<!--======================================career mid sec end======================================-->


<!--======================================about us middle start======================================-->
<?php echo $__env->make('front.static.jobs-counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--======================================about us middle end======================================-->


<!--======================================job opeaning sec start======================================-->

<section class="job-open-wrapp">
    <div class="container">
        <div class="job-open-head">
            <?php echo $data->longDescription; ?>

        </div>
        <?php
            $carrercategory=\App\Models\CareerCategory::whereHas('jobs',function ($q){
                                $q->where('publish','published');
                            })->where('publish','published')->orderBy('ordering','asc')->get();
        ?>
        <?php if($carrercategory->count()>0): ?>
        <div class="job-open-list">
            <ul>
                <?php $__currentLoopData = $carrercategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $jonopen_count=\App\Models\Career::where('category',$c->id)->where('publish','published')->count();
                    ?>
                <li>
                    <div class="job-open-box">
                        <div class="job-open-con">
                            <h5><?php echo e($c->title); ?></h5>
                            <p>Total Openings: <?php echo e($jonopen_count??0); ?></p>
                        </div>
                        <a href="<?php echo e(url('career/latest-opportunities/'.$c->seo_url)); ?>">Apply Now</a>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</section>

<!--======================================job opeaning sec end======================================-->
<?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/career.blade.php ENDPATH**/ ?>