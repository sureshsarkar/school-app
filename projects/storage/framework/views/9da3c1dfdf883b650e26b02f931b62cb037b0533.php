<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>
<?php $__env->startSection('logo', $data->image); ?>
<?php $__env->startSection('header-section'); ?>
    <?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer-section'); ?>
    <?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>

    <?php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>
    <!-- start banner sec -->

    <?php echo $__env->make('front.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
        $gallery = App\Models\Gallery::where('status','active')->orderBy('id', 'desc')->get();
    ?> 
    <!-- GALLERY SECTION START -->
    <?php if(count($gallery) > 0): ?>
        
    <?php endif; ?>
    <!-- GALLERY SECTION END -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/franchise.blade.php ENDPATH**/ ?>