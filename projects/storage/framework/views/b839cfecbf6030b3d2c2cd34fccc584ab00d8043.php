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







 

         <section class="sponsors-section-four">

            <div class="container">

                <div class="row">

                  <?php $__currentLoopData = App\Models\WelcomePackage::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-3 col-lg-3 col-6">

                        <div class="image-box">

                            <a href="javaScript:;">

                                <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" width="100%">

                            </a>

                        </div><!-- /.image-box -->

                    </div><!-- /.col-md-6 col-lg-4 -->

                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div><!-- /.row -->

            </div><!-- /.auto-container -->

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
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/certificate.blade.php ENDPATH**/ ?>