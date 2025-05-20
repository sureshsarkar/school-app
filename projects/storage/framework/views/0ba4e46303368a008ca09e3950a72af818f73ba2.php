
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


<!-- =========================  End ================ -->



<!-- ========================= Start ================ -->

        <?php echo $data->mediumDescription; ?>


<!-- =========================  End ================ -->





     <section class="mortage-benefit-wrapp rml-bottom-wrapp">
       <div class="container">
<!--  -->

    <!-- ========================= Start ================ -->

    <?php echo $data->longDescription; ?>


   <!-- ========================= End ================ -->

<!--  -->

          <div class="row">
<?php $__currentLoopData = App\Models\OurTeam::orderBy("id","desc")->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <div class="col-lg-6 col-md-6 col-12">
               <div class="rml-bottom-box">
                  <img src="<?php echo e(asset($c->image)); ?>">
               </div>
             </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             

          </div>

          <div class="rml-bottom-btn">
             <a href="javascript:void();">and many, many more... Ask for a complete list...</a>
          </div>
          
       </div>
    </section>








<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/reverse-mortage-lead.blade.php ENDPATH**/ ?>