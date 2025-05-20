
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





<section class="about-midd-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-12 col-12">
               <div class="contact-form-left">
                 <h5>Contact</h5>
                 <h2>Get In Touch With Us</h2>
                  <?php echo Form::open(["route"=>"contactPost"]); ?>

                    <div class="form-group">
                       <input type="text" name="name" class="form-control" placeholder="Full Name" required="required">
                    </div>
                    <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                       <textarea class="form-control" placeholder="Comments" required="required" name="message"></textarea>
                    </div>
                    <div class="form-group">
                       <button>Let's Talk With Us</button>
                    </div>
                 </form>
               </div>
             </div>
             <div class="col-lg-6 col-md-12 col-12">
                <div class="contact-detail-right">
                   <div class="contact-detail-right-inn">
                   <img src="<?php echo e(asset('front/images/smartleadz-logo-contact.png')); ?>">
                       <div class="location-contact">
                           <h5>Headquarter</h5>
                           <p><?php echo e($setting_data['address']); ?></p>
                       </div>
                       <div class="location-contact">
                           <h5>Email</h5>
                           <p><?php echo e($setting_data['email']); ?></p>
                       </div>
                       <div class="location-contact">
                           <h5>Phone</h5>
                           <p><?php echo e($setting_data['mobile']); ?></p>
                       </div>
                       <div class="contact-social-div">
                          <ul>
                           
      <li><a href="<?php echo $setting_data['twitter'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-twitter"></i></a></li>
       <li><a href="<?php echo $setting_data['facebook'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="<?php echo $setting_data['linkedin'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-linkedin-in"></i></a></li>
                          </ul>
                       </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>


    <section class="map-wrapp">
       <div class="container">
          <div class="map-inner">
             <iframe src="<?php echo $setting_data['map'] ?? '#'; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
       </div>
    </section>








<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/contact.blade.php ENDPATH**/ ?>