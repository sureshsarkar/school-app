
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

 
<section class="blog-wrapper ">
  <div class="container">
    <div class="home-blog-sec">
      <div class="row">
          <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="col-lg-4 col-md-6 col-12">
          <div class="blog-page">
               <?php $date=$b->publish_date; if($date){}else{$date=$b->created_at;} ?>
               <?php if($b->featureImage): ?>
                        <div class="home-blog-image">
              
                            <img src="<?php echo e(asset($b->featureImage)); ?>" alt="<?php echo e($b->title); ?>" class="img-fluid"  />
                             
            </div>
            <?php endif; ?>
                        <div class="blog-content">
              <h4><a href="<?php echo e(url('blog/'.$b->seo_url)); ?>/"> <?php echo e($b->title); ?> </a></h4>
                     <h6 class="blog-feat">
                <span class="blog-date"><i class="far fa-calendar-alt"></i>&nbsp; <?php echo e(date('dS F Y',strtotime($date))); ?></span>
                  
                  
                      
              </h6>
              <p><?php echo Str::limit($b->shortDescription, 200); ?></p>
      <?php echo e($b->blog_categories,"id"); ?>

              <a href="<?php echo e(url('blog/'.$b->seo_url)); ?>/" class="blog-read">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
   
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

         <?php echo $__env->make("front.layouts.empty", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php endif; ?>
    
      </div>

      
      <div class="row"><?php echo e($blogs->links()); ?></div>

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
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/blogs.blade.php ENDPATH**/ ?>