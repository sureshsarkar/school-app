
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






    <section class="what-we-wrapp">
       <div class="container">
        <div class="what-we-head">
           <h3>What We Offer</h3>
        </div>
          <div class="row">

<?php $__currentLoopData = App\Models\Weoffer::orderBy("id","desc")->where("publish","published")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


             <div class="col-lg-6 col-md-6 col-12">
                <div class="what-we-box">
                   <img src="<?php echo e(asset($c->image)); ?>">
                   <div class="what-we-con">
                 <!--  <a href="<?php echo e(url('weoffer/'.$c->seo_url)); ?>/"></a> -->
                      <h5><?php echo e($c->title); ?></h5>
                      <p><?php echo Str::limit($c->description, 300); ?></p>
                   </div>
                </div>
             </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php echo $data->shortDescription; ?>






          </div>
       </div>
    </section>



<!-- ========================= Start ================ -->

        <?php echo $data->mediumDescription; ?>


<!-- =========================  End ================ -->




<!-- ========================= Start ================ -->

    <?php echo $data->longDescription; ?>


<!-- ========================= End ================ -->







<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/what-we-offer.blade.php ENDPATH**/ ?>