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

    <section class=" vote-page-wrapp">

        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-8 col-md-8 col-12 contact-reg mt-5">
                    <h4  class="text-center mt-5"><?php echo e($name); ?></h4>

                    <?php echo Form::open(["route"=>"customer.post.login"]); ?>


                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <div class="form-group check-form-div text-center">
                            <button class="btn btn-sub-online" type="submit">Vote Now </button>
                        </div>
                    </div>
                    </form>

                </div>

            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/vote-now.blade.php ENDPATH**/ ?>