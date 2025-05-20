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
        <div class="mb-5 text-center">
            <h4  class="text-center mt-5"><?php echo e($data->title); ?></h4>
        </div>
        <div class="container">
            <div class="row">
<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $supported_image = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$src_file_name = $ads->image;
$ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

?>
                    <div class="col-md-4">
                               <?php echo Form::open(["route"=>"storevote",'files'=>true,"class"=>'card']); ?>

                                 <h3 class="text-center"><?php echo e($ads->campaign_name); ?></h3>
                        <?php if(in_array($ext, $supported_image)): ?>
                        <img src="<?php echo e(asset($ads->image)); ?>" style="max-height: 200px">
                        <?php else: ?>
                            <video  controls>
                                <source src="<?php echo e(asset(($ads->image))); ?>" type="video/mp4">
                            </video>

                        <?php endif; ?>
                                   <input type="hidden" name="ads_id" value="<?php echo e($ads->id); ?>">
                                   <input type="hidden" name="category_id" value="<?php echo e($ads->category_id); ?>">

                        <button class="btn btn-warning" type="submit">Vote Now</button>
                           </form>
                               </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/company-video.blade.php ENDPATH**/ ?>