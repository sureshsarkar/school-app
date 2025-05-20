
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



<section class="review-wrapper">
  <div class="container">
    <div class="row">
       <?php $i=0; $list=App\Models\Testimonial::where("status","true")->orderBy("id","desc")->paginate(10); ?>
     <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="testi-block">
          <div class="inner">
            <div class="icon"><span>“</span></div>
            <div class="info">
              <div class="image">
                <a href="#">
                  <?php if($c->image): ?>
                    <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" >
                  <?php endif; ?>
                </a>
              </div>
              <div class="name"><?php echo e($c->name); ?></div>
              <div class="designation"><?php echo e($c->profile); ?></div>
            </div>
            <div class="text">
              <?php echo e($c->message); ?>

            </div>
          </div>
        </div>
      </div>
      
<?php $i++; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="row">
      <div class="col-md-12 text-center">
          <?php echo e($list->links()); ?>

      </div>
  </div>


    </div>
  </div>
</section>
     

<section class="conten-wrapp">
    <div class="container-fluid">
        <div class="content-inner-div">
               <?php echo $data->shortDescription; ?>

                    <?php echo $data->mediumDescription; ?>

                    <?php echo $data->longDescription; ?>


        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/reviews.blade.php ENDPATH**/ ?>