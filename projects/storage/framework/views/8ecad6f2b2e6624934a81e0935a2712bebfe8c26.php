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



<!-- ========================= Start ================ -->

        <?php echo $data->shortDescription; ?>


<!-- ========================= End ================ -->





<!-- ========================= Start ================ -->

        <?php echo $data->mediumDescription; ?>


<!-- =========================  End ================ -->


   <!--==================================== Home page counter start================================-->


   <section class="counter-wrapper wow fadeInUp about-page-counter">
       <div class="counter-main">
           <div class="container">
               <div class="counter-inner">
                   <ul id="counter">
                       <li>
                           <div class="count-contanet">
                               <span class="count percent" data-count="<?php echo e($setting_data['project completed']); ?>">0</span>
                               <span class="plus-icon"><i class="fas fa-plus"></i></span>
                               <p>Number of countries Transacted </p>
                           </div>
                       </li>
                       <li>
                           <div class="count-contanet">
                               <span class="count percent" data-count="<?php echo e($setting_data['Working hours']); ?>">0</span>
                               <span class="plus-icon"><i class="fas fa-plus"></i></span>
                               <p>Number of Years in the market</p>
                           </div>
                       </li>
                       <li>
                           <div class="count-contanet">
                               <span class="count percent" data-count="<?php echo e($setting_data['Experienced Staff']); ?>">0</span>
                               <span class="plus-icon"><i class="fas fa-plus"></i></span>
                               <p>Our Partners</p>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </section>

   <!--==================================== Home page counter end================================-->
   <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ========================= Start ================ -->

    <?php echo $data->longDescription; ?>

   <div class="testimonial-slider owl-carousel">
       <?php $clients=App\Models\Testimonial::orderBy("id","desc")->first(); ?>
       <?php if($clients): ?>

           <?php $__currentLoopData = App\Models\Testimonial::orderBy("id","desc")->where("status","true")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="item">
                   <div class="testimonial-box">
                       <i class="fas fa-quote-left"></i>
                       <p><?php echo e($c->message); ?></p>
                       <div class="testi-author">
                           <img src="<?php echo e(asset($clients->image)); ?>">
                           <div class="author-name">
                               <h5>by <b><?php echo e($c->name); ?></b></h5>
                               <p><?php echo e($c->profile); ?></p>
                           </div>
                       </div>
                   </div>
               </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?>

   </div>
   </div>
   </section>

   <!--==================================== Home testimonial section start================================-->

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

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/about.blade.php ENDPATH**/ ?>