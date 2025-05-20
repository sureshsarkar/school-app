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
        <div class="py-[130px] xl:py-[80px] md:py-[60px]">
            <div
                class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
                <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">

                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="space-y-[30px] lg:space-y-[20px]">
                            <div
                                class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                                <img src="<?php echo e(asset($c->image)); ?>"
                                    alt="<?php echo e($c->thumbnail); ?>" title="<?php echo e($c->thumbnail); ?>" class="w-full aspect-square object-cover">
                                <a href="<?php echo e(asset($c->image)); ?>"
                                    data-fslightbox="gallery"
                                    class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                                    <i class="fa-plus fa-regular"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- GALLERY SECTION END -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/gallery.blade.php ENDPATH**/ ?>