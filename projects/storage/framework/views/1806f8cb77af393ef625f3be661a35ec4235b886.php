
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
    <!-- start banner sec -->
    
  <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <section class="team-page-wrapp">
            <div class="container">
                <div class="row">
                  <?php $__currentLoopData = App\Models\OurTeam::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="#"><img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->name); ?>"></a>
                                    <ul class="social-links clearfix">
                                        <li><a href="mailto:<?php echo e($c->email); ?>"><span class="fa fa-envelope"></span></a></li>
                                        <li style="display:none;"><a href="tel:<?php echo e($c->mobile); ?>"><span class="fa fa-phone"></span></a></li>
                                       
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <h5><a href="#"><?php echo e($c->name); ?></a></h5>
                                    <div class="designation"><?php echo e($c->profile); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
<section class="conten-wrapp">
    <div class="container-fluid">
        <div class="content-inner-div">
             
                    <?php echo $data->mediumDescription; ?>

                    <?php echo $data->longDescription; ?>


        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/our-team.blade.php ENDPATH**/ ?>