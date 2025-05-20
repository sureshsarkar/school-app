
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




<section class="about-midd-section direct-mail-mid">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-12 col-12">
               <div class="about-mid-head direct-mail-con roi-cont">
                  <h3>ROI</h3>
                  <p>See how much your return could be with our Mortgage Plus Leads! </p>

                  <form class="row">
                    <div class="form-group col-lg-6 col-md-6 col-12">
                       <input type="text" name="text" class="form-control" placeholder="# of leads:">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                       <input type="text" name="text" class="form-control" placeholder="Cost/Lead:">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                       <input type="text" name="text" class="form-control" placeholder="% Closed:">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                       <input type="text" name="text" class="form-control" placeholder="Comm Per Loan:">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-12">
                       <input type="text" name="text" class="form-control" placeholder="Commission (%):">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-12">
                       <button type="btn" class="btn-roi">Calculate Roi</button>
                    </div>
                         <div class="form-group return-div-main col-lg-12 col-md-12 col-12">
                         <div class="row g-3 align-items-center return-div">
                            <div class="col-lg-5 col-md-12 col-12">
                              <label class="col-form-label">Return on Investment :</label>
                            </div>
                            <div class="col-lg-7 col-md-12 col-12">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          </div>

                  </form>

               </div>
             </div>
             <div class="col-lg-6 col-md-12 col-12">
                <div class="about-mid-img">
                   <img src="<?php echo e(asset('front/images/roi.png')); ?>">
                </div>
             </div>
          </div>
       </div>
    </section>



<section class="roi-impact">
   <div class="container">
      <div class="roi-impact-main">
         <div class="roi-impact-head">
            <h3>HIGH IMPACT DATA LISTS</h3>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="roi-impact-box">
                 <img src="<?php echo e(asset('front/images/ri1.png')); ?>">
                 <h4>View Sample Lead </h4>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="roi-impact-box">
                 <img src="<?php echo e(asset('front/images/ri2.png')); ?>">
                 <h4>See Testimonials</h4>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="roi-impact-box">
                 <img src="<?php echo e(asset('front/images/ri3.png')); ?>">
                 <h4>Buy Online or Ofline</h4>
              </div>
            </div>
         </div>
      </div>
   </div>
</section>











<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/roi.blade.php ENDPATH**/ ?>