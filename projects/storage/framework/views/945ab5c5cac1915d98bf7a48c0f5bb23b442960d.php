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

        <div class="container">
           <div class="text-center text-black catrgory-head-div"><h3>Select Category</h3></div>
            <div class="row" >
                <?php $__currentLoopData = \App\Models\Deal::orderBy('ordering','asc')->where('publish','published')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!--<div class="col-md-2 mt-2">
                <div class="card mb-2" style="height: 100px;
  resize: both;
  overflow: auto;
  max-width: 100vw !important;
">

    <a href="<?php echo e(url('vote-now/'.$c->seo_url)); ?>"> <button class="btn btn-warning"><?php echo e($c->title); ?></button></a>
    </div>
</div>
--><div class="col-lg-2 col-md-4 col-6" >
    <div class="mycard ">
    <div class="card-body mycard1" style="background-color:#ffc107 !important;">
            <a href="<?php echo e(url('ads/'.$c->seo_url)); ?>"> <button class=" mycard1 btn btn-warning"><?php echo e($c->title); ?></button></a>

    </div>
    </div>
</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/categories.blade.php ENDPATH**/ ?>