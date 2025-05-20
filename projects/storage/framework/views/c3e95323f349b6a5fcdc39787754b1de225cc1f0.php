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

<?php echo $__env->make('front.layouts.inner-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--======================================Faq page sec start======================================-->

    <section class="faq-wrapper">
        <div class="container">
            <div class="about-feat-head">
                <h4><?php echo e($name); ?></h4>
                <p><?php echo e($data->description); ?></p>
            </div>
            <div class="faq-main">
                <div class="accordion" id="accordionExample">
                    <?php $c1=1;?>
                    <?php $__currentLoopData = App\Models\Faq::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($c1==1): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne<?php echo e($c->id); ?>">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo e($c->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($c->id); ?>">
                                <?php echo $c->question; ?>

                            </button>
                        </h2>
                        <div id="collapseOne<?php echo e($c->id); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo $c->answer; ?>

                            </div>
                        </div>
                    </div>
                        <?php else: ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne<?php echo e($c->id); ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo e($c->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($c->id); ?>">
                                        <?php echo $c->question; ?>

                                    </button>
                                </h2>
                                <div id="collapseOne<?php echo e($c->id); ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo $c->answer; ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                            <?php $c1++;?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <!--======================================Faq page sec end======================================-->
<?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/faq.blade.php ENDPATH**/ ?>