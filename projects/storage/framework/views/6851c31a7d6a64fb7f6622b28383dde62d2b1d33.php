
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



     <section class="chairman-mesaage-wrapp">
              <div class="container">
                <div class="row">
                   <div class="col-lg-5 col-md-12 col-12">
                       <div class="chairman-message">
                            <img src="<?php echo e(asset($data->image)); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>">
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12 col-12">
                       <div class="ceo-message">
                        <div class="ceo-message-inn">
                           
                             <?php echo $data->shortDescription; ?>

                            <ul>
                                  <li><a href="<?php echo $setting_data['linkedin'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-linkedin"></i></a></li>
                                  <li><a href="<?php echo $setting_data['instagram'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-instagram-square"></i></a></li>
                                  <li><a href="<?php echo $setting_data['twitter'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-twitter-square"></i></a></li>
                                  <li><a href="<?php echo $setting_data['facebook'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-facebook-square"></i></a></li>
                                  
                                    <li><a href="<?php echo $setting_data['whatsapp'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-whatsapp-square"></i></a></li>
                                    <li><a href="<?php echo $setting_data['pinterest'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-pinterest-square"></i></a></li>
                            </ul>
                       </div>
                   </div>
               </div>
              </div>
              </div>
         </section>
     

<section class="conten-wrapp">
    <div class="container-fluid">
        <div class="content-inner-div">
             
                    <?php echo $data->mediumDescription; ?>

                    <?php echo $data->longDescription; ?>


        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/about-ceo.blade.php ENDPATH**/ ?>