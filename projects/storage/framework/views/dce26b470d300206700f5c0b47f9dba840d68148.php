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
        $bannerImage = asset('front/images/inner-banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>

    <?php echo $__env->make('front.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- COURSE GRID SECTION START -->
            <div class="py-[120px] xl:py-[80px] md:py-[60px]">
                <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                    <div class="grid grid-cols-3 md:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/nursery.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Nursery Teacher Training
                                </a
                >
                            </h5>
                            <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/computer-training.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Computer Teacher Training
                                </a
                >
                                <p>Eligibility:- 10th, 12th | Duration:- One Year</p>
                            </h5>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/beautician.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Beautician
                                </a
                >
                                <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                            </h5>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE GRID SECTION END -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/course.blade.php ENDPATH**/ ?>