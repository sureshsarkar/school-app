<!--==================================== Home cta section start================================-->

<!--==================================== Home cta section start================================-->
<?php
$investment =App\Models\Weoffer::orderBy("id","ASC")->where("publish","published")->first();
?>
<?php if($investment): ?>
<section class="homr-cta-sec wow fadeInUp">
    <div class="home-cta-main" style="background-image: url(<?php echo e(asset($investment->image)); ?>)">
        <div class="container">
            <div class="home-cta-con">
                <h3><?php echo $investment->title; ?></h3>
               <?php echo $investment->description; ?>

                <div class="cta-action">
                    <a href="<?php echo e(url('contact-us')); ?>" class="cta-contact">Contact Now <i class="fas fa-caret-right"></i></a>
                    <a href="#" class="cta-email"><i class="far fa-envelope"></i> Email :- <?php echo e($setting_data['email']); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--==================================== Home cta section end================================-->

<!--==================================== Home cta section end================================-->
<?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/jobs-counter.blade.php ENDPATH**/ ?>
