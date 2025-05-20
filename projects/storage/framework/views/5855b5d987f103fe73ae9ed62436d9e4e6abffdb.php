
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




 


 


 <!-- ========================= Commercial loan lead ================ -->

        <?php echo $data->shortDescription; ?>


<!-- ========================= Commercial loan lead Start ================ -->





 <!-- ========================= Commercial loan lead ================ -->

        <?php echo $data->mediumDescription; ?>


 <!-- ========================= Commercial loan lead ================ -->


    <section class="cll-cta-wrapp">
       <div class="container">
          <div class="row">
             <div class="col-lg-9 col-md-9 col-12">
                <div class="cll-cta-con">
                   <h4>For more information please call 585-496-7020</h4>
                   <h6>We can tailor a campaign to meet your exact needs and budget! </h6>
                </div>
             </div>
             <div class="col-lg-3 col-md-3 col-12">
                <div class="cll-cta-btn">
                   <a href="<?php echo e(url('contact-us')); ?>">Contact Us</a>
                </div>
             </div>
          </div>
       </div>
    </section>






<?php $__env->stopSection(); ?> 
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/commercialloan-lead.blade.php ENDPATH**/ ?>