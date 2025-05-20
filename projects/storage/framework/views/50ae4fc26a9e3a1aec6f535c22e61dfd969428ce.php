
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







    <section class="about-midd-section direct-mail-mid">
       <div class="container">
        <div class="smart-track-head about-mid-head direct-mail-con ivr-cont">
          <h3>SmartTrack - Lead Tracking & Management</h3>
                  <h5>Sales Lead Tracking and Management Software </h5>
        </div>
          <div class="row">
             <div class="col-lg-6 col-md-12 col-12">
               <div class="about-mid-head direct-mail-con ivr-cont ">
                  
                 <div class="smart-track-accord">
                   <div class="accordion" id="accordionExample">

                <?php $c1=1;?>
                <?php $__currentLoopData = App\Models\Faq::orderBy("id","desc")->where("type",$data->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($c1==1): ?>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOneheadingOne<?php echo e($c->id); ?>">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo e($c->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($c->id); ?>">
                            <?php echo $c->question; ?>

                          </button>
                        </h2>
                       <div id="collapseOne<?php echo e($c->id); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $c->answer; ?>

                                        </div>
                                    </div>
                      </div>
                       <?php else: ?>
                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo<?php echo e($c->id); ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo e($c->id); ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo e($c->id); ?>">
                                        <?php echo $c->question; ?>

                                        </button>
                                    </h2>
                                    <div id="collapseTwo<?php echo e($c->id); ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $c->answer; ?>

                                        </div>
                                    </div>
                                </div>

             <?php endif; ?>
                  <?php $c1++;?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                    </div>
                 </div>               

               </div>
             </div>
             <div class="col-lg-6 col-md-12 col-12">
                <div class="about-mid-img">
                   <img src="<?php echo e(asset('front/images/smarttrack.png')); ?>">
                </div>
             </div>
          </div>
       </div>
    </section>



<?php echo $data->shortDescription; ?>








    <section class="smarttrack-benefits">
       <div class="container">
        <div class="smart-benefit-main">
          <div class="smart-benefit-head">
             <h4>Features & Benefits Of SmartTrack </h4>
          </div>
          <ul>
<?php $__currentLoopData = App\Models\Deal::orderBy("id","desc")->where("type","$data->id")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
            <li><?php echo e($c->title); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
       </div>
       </div>
    </section>














<?php $__env->stopSection(); ?>


<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/smart-track.blade.php ENDPATH**/ ?>