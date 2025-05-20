<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("logo",$data->image); ?>
<?php $__env->startSection("header-section"); ?>
<?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php
error_reporting(0);
?>
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
    <section class="banner-wrapper">

        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-8 col-md-8 col-12 contact-reg mt-5">
                            <h4><?php echo e($name); ?></h4>

                            <?php echo Form::open(["route"=>"contactPost"]); ?>


                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message" placeholder="Type Your Message Here."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-group check-form-div">
                                    <button class="btn btn-sub-online" type="submit">Submit</button>
                            </div>
                            </div>
                            </form>

                    </div>

            </div>
        </div>
        <div class="banner-shape">
            <img src="<?php echo e(asset('front/images/banner-shape.png')); ?>">
        </div>
    </section>


    <!--======================================contact detail sec end======================================-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/static/contact.blade.php ENDPATH**/ ?>