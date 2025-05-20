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

    <?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>

</style>
    <!--======================================login page sec start======================================-->

     <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-img">
                        <img src="<?php echo e(asset($data->image)); ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="login-form-sec">
                        <div class="login-form">
                            <h5>Welcome Back!</h5>
                            <form action="<?php echo e(route('user.login')); ?>" enctype="multipart/form-data" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-floating">
                                    <input type="number" name="roll_no" class="form-control" placeholder="Enter Roll Number">
                                    <label for="floatingInput">Roll Number</label> 
                                </div> 
                                <div class="form-floating mt-2">
                                    <button type="submit" class="btn btn-success" >Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================login page sec end======================================-->
 


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/login.blade.php ENDPATH**/ ?>