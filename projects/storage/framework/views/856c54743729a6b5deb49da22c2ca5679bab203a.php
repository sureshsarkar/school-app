
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




<!-- ========================= Start ================ -->

    <?php echo $data->longDescription; ?>


<!-- ========================= End ================ -->

 

   <!--  <?php echo $data->longDescriptiontwo; ?> -->

 

<section class="on-page-optimization">
   <div class="container">
      <div class="on-page-head">
         <h3>ON-Page Optimization</h3>
         <p>Our on-page optimization process is a vital part of the overall work methodology and focuses on the identification of potential problems on your website itself and their effective rectification to make the site search engine friendly. We usually do the following:</p>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-6 col-12">
            <div class="on-page-box">
              <div class="icon-box">
               <i class="fas fa-chart-line"></i>
               </div>
               <p>Setting the Meta Title and Meta Description on every targeted web page in your site</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="on-page-box">
              <div class="icon-box">
               <i class="fas fa-chart-line"></i>
               </div>
               <p>Setting the Meta Title and Meta Description on every targeted web page in your site</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="on-page-box">
              <div class="icon-box">
               <i class="fas fa-chart-line"></i>
               </div>
               <p>Setting the Meta Title and Meta Description on every targeted web page in your site</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="on-page-box">
              <div class="icon-box">
               <i class="fas fa-chart-line"></i>
               </div>
               <p>Setting the Meta Title and Meta Description on every targeted web page in your site</p>
            </div>
         </div>
      </div>
   </div>
</section>




<?php echo $data->longDescriptionthree; ?>







<?php echo $data->longDescriptionfour; ?>






<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/seo-service.blade.php ENDPATH**/ ?>