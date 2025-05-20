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


    <?php echo $data->shortDescription; ?>

    <!--==================================== management team memb section start================================-->

    <section class="managemet-member-wrapp">
        <div class="container">
            <div class="investor-head">
                <h3>AI Capital investors</h3>
            </div>
            <div class="row">
                <?php $__currentLoopData = App\Models\OurTeam::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="management-mem-box">
                        <img src="<?php echo e(asset($c->image)); ?>">
                        <h3><?php echo e($c->name); ?></h3>
                        <h6><?php echo e($c->profile); ?></h6>
                        <p><?php echo e($c->message); ?> </p>
                        <ul>
                            <?php if($c->facebook): ?>
                            <li><a href="<?php echo e($c->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                                <?php if($c->twitter): ?>
                            <li><a href="<?php echo e($c->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if($c->instagram): ?>
                            <li><a href="<?php echo e($c->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; ?>
                                <?php if($c->linkedin): ?>
                            <li><a href="<?php echo e($c->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>

    <!--====================================management team memb section end================================-->
  

    <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('front.static.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $clients=App\Models\OurClient::orderBy("id","desc")->first(); ?>
    <?php if($clients): ?>
        <!--==================================== brand logo section start================================-->

        <section class="brand-logo-wrapp wow fadeInUp">
            <div class="brand-logo-main">
                <div class="container">
                    <div class="owl-carousel brand-slider">

                        <?php $__currentLoopData = App\Models\OurClient::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <img src="<?php echo e(asset($c->image)); ?>">
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/management-team.blade.php ENDPATH**/ ?>