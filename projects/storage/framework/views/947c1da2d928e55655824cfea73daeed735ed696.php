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


     <!--==================================== Services mid start================================-->

     <section class="home-about-wrapp">
         <div class="container">

             <?php echo $data->shortDescription; ?>

             <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php
                     if ($key % 2 == 0){
                         ?>
                         <div class="serv-desk-div">
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-12">
                         <div class="home-abt-img service-page-img wow fadeInUp">
                             <img src="<?php echo e(asset($c->image)); ?>">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-12">
                         <div class="home-abt-con service-box-page wow fadeInUp">
                             <div class="home-abt-con-inn case-real-con realestate-con">
                                 <h3><?php echo e($c->name); ?></h3>
                                 <p><?php echo $c->description; ?></p>
                                 <a href="<?php echo e(url("services/".$c->seo_url)); ?>">Read More</a>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <?php
                     }else{
                         ?>
                 <div class="serv-desk-div serv-left-design">
                     <div class="row">

                         <div class="col-lg-8 col-md-8 col-12">
                             <div class="home-abt-con service-box-page wow fadeInUp">
                                 <div class="home-abt-con-inn case-real-con realestate-con">
                                     <h3><?php echo e($c->name); ?></h3>
                                     <p><?php echo $c->description; ?></p>
                                     <a href="<?php echo e(url("services/".$c->seo_url)); ?>">Read More</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-4 col-12">
                             <div class="home-abt-img service-page-img wow fadeInUp">
                                 <img src="<?php echo e(asset($c->image)); ?>">
                             </div>
                         </div>

                     </div>
                 </div>
                  <?php
                     }
                 ?>


             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            





         </div>
     </section>

     <!--==================================== Services mid end================================-->

     <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $data->mediumDescription; ?>


     <?php echo $__env->make('front.static.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!--==================================== brand logo section start================================-->

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

     <!--==================================== brand logo section end================================-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/services.blade.php ENDPATH**/ ?>