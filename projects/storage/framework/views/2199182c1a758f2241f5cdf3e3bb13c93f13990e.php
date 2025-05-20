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
<?php $__env->startSection('css'); ?>

<style>
    .required{
        color:black !important;
    }
    </style>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>

    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>

    <section class="comp">

        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-8 col-md-8 col-12 contact-reg mt-5">
                    <h4><?php echo e($name); ?></h4>

                    <?php echo Form::open(["route"=>"adsPost",'files'=>true]); ?>


                    <div class="form-group">
                        <label>Choose category <span class="required">*</span></label>
                      <select name="category_id" class="form-select" required>
                          <option value=""> Please Select</option>
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </select>
                    </div>
                    <div class="form-group">
                        <label>Brand <span class="required">*</span></label>
                        <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                    </div>

                    <div class="form-group">
                        <label>Campaign Name <span class="required">*</span></label>
                        <input type="text" name="campaign_name" class="form-control" placeholder="Campaign Name" required>
                    </div>

                    <div class="form-group">
                        <label>Upload file <span class="required">*</span></label>
                        <input type="file" name="image" class="form-control" placeholder="Paste the link" required>
                    </div>
                    <div class="form-group">
                        <label>Link to Work </label>
                        <input type="url" name="link_work" class="form-control" placeholder="Paste the link">
                    </div>
                    <div class="form-group">
                        <label>Description <span class="required">*</span></label>
                        <textarea class="form-control" name="description" required placeholder="Type Your Message Here." required></textarea>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/company-form.blade.php ENDPATH**/ ?>