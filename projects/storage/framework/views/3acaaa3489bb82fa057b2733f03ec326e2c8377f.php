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
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>

    <section class="category-wrapper">
        <div class="mb-5 text-center text-white">
            <h4  class="text-center mt-5"><?php echo e($data->title); ?></h4>
        </div>
        <div class="container">
            <div class="row">

                    <div class="col-md-3">
                           <div class="card-body">
                               <div class="card">
                                 <h3>title</h3>
                                   <img src="">
                                   <div class="btn btn-warning">Vote Now</div>
                               </div>
                        </div>
                    </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <div class="card">
                            <h3>title</h3>
                            <img src="">
                            <div class="btn btn-warning">Vote Now</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <div class="card">
                            <h3>title</h3>
                            <img src="">
                            <div class="btn btn-warning">Vote Now</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/static/company-video.blade.php ENDPATH**/ ?>