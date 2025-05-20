
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
<?php $__env->startSection("container"); ?>

   <?php
        $name=$data->name;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
    <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       <!--============================about page middle sec start ============================-->
        <section class="about-mid-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="home-about-right about-mid-con">
                            <div class="about-mid-con-inner">
                                <?php echo $data->shortDescription; ?>

                                <div class="certificate-about">
                                    <?php $__currentLoopData = App\Models\WelcomePackage::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="about-mid-img">
                            <img src="<?php echo e(asset($data->image)); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============================about page middle sec end ============================-->
        <!--============================about Team sec start ============================-->
        <section class="team-wrapper">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = App\Models\Deal::where("is_home","false")->orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="team-box">
                            <a href="<?php echo e(asset($c->image)); ?>" data-fancybox="images" alt=""> 
                            <img src="<?php echo e(asset($c->image)); ?>">
                            </a>
                            <h3><?php echo e($c->title); ?></h3>
                            <h6><?php echo e($c->description); ?></h6>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--============================about Team sec end ============================-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/about.blade.php ENDPATH**/ ?>