
<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("header-section"); ?>
<?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("footer-section"); ?>
<?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("css"); ?>
    <style>
        .left-sec_appr {
            width: 100%;
        }
        .sub-footer{
            display:none;
        }
    </style>
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


    <!-- start about section -->
        
      <!-- About Section -->
      <section class="about_wrapper mt-4 mb-4">
         <div class="container">
            <div class="row m-0">

                    <?php echo $data->shortDescription; ?>

                    <?php echo $data->mediumDescription; ?>

                    <?php echo $data->longDescription; ?>


              
            </div>
         </div>
      </section>


<?php if($data->image): ?>
<section class="zimbra-cta-wrapp mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-img">
        <img src="<?php echo e(asset($data->image)); ?>" alt="<?php echo e($data->name); ?>">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-con">
        <div class="zimb-cta-con-inner">
          <?php echo $data->cta_description; ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/common.blade.php ENDPATH**/ ?>