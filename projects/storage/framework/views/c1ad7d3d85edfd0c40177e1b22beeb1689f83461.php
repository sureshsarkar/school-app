
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

       <!--============================contact detail sec start ============================-->

        <section class="contact-detail-wrapp">
             <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="contact-detail-box">
                            <i class="fas fa-headset"></i>
                            <div class="contact-detal-con">
                                <a href="tel:<?php echo $setting_data['mobile'] ?? '#'; ?>"><?php echo $setting_data['mobile'] ?? '#'; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="contact-detail-box">
                            <i class="fas fa-at"></i>
                            <div class="contact-detal-con">
                                <a href="mailto:<?php echo $setting_data['email'] ?? '#'; ?>"><?php echo $setting_data['email'] ?? '#'; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="contact-detail-box">
                            <i class="fas fa-map-marked-alt"></i>
                            <div class="contact-detal-con">
                                <p> <?php echo $setting_data['address'] ?? '#'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>

        <!--============================contact detail sec end ============================-->
        

         <!--============================contact map sec start ============================-->

            <section class="contact-form-wrapp">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="contact-map">
                                 <iframe src="<?php echo $setting_data['map'] ?? '#'; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="contact-form-main">
                                 
                                <?php echo Form::open(["route"=>"contactPost","class"=>"row g-3"]); ?>

                                      <div class="col-md-6">
                                        <input type="text" name="name" required class="form-control" placeholder="Name">
                                      </div>
                                      <div class="col-md-6">
                                        <input type="email" name="email" required="" class="form-control" placeholder="Email">
                                      </div>
                                      <div class="col-12">
                                        <input type="text" name="mobile" class="form-control" placeholder="Phone">
                                      </div>
                                      <div class="col-12">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                      </div>
                                      <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                             </div>
                         </div>
                    </div>
                </div>
            </section>
            
             
          <!--============================contact map sec end ============================-->




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
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/contact.blade.php ENDPATH**/ ?>