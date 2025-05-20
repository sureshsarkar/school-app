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







     <section class="team-wrapper">
                <div class="container">
                    <div class="row">
                         <?php $__currentLoopData = App\Models\Gallery::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="team-box gallery-box">
                                <a href="<?php echo e(asset($c->image)); ?>" data-fancybox="images" title="<?php echo e($c->thumbnail); ?>"> 
                                <img src="https://tomi.mobbindtechnology.co.in/uploads/cms/64708848c1c26.webp" alt="<?php echo e($c->thumbnail); ?>" title="<?php echo e($c->thumbnail); ?>">
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>

            <section class="video-sec-gall">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="video-gal-box">
                                <iframe src="https://www.youtube.com/embed/cR1FyHv_rJE?si=kHowOGLjubvj4-4X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="video-gal-box">
                                <iframe src="https://www.youtube.com/embed/cR1FyHv_rJE?si=kHowOGLjubvj4-4X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="video-gal-box">
                                <iframe src="https://www.youtube.com/embed/cR1FyHv_rJE?si=kHowOGLjubvj4-4X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="video-gal-box">
                                <iframe src="https://www.youtube.com/embed/cR1FyHv_rJE?si=kHowOGLjubvj4-4X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/gallery.blade.php ENDPATH**/ ?>