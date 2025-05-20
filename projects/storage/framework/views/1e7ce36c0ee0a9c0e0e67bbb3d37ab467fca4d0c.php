<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>

<?php $__env->startSection("container"); ?>
<?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--======================================Job Offer sec start======================================-->

<section class="pxp-page-header-simple form-header" style="background-color: #e6f0f9;">
    <div class="container">
        <h1 class="">
            <?php echo e($job->company); ?>

        </h1>
        <div class="pxp-hero-subtitle pxp-text-light ">
            <?php echo e($job->description); ?>

        </div>
        <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
            <form id="pxp-jobs-page-search-form" class="row gx-3 align-items-center" role="search" method="get" action="">
                <div class="col-div">
                    <!-- Keywords field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-search"></span>
                        </span>
                        <input type="text" name="keywords" id="keywords" class="form-control" value="<?php echo e(app('request')->input('keywords')); ?>" placeholder="Job Title or Keyword">
                    </div>
                </div>
                <div class="col-div pxp-has-left-border">
                    <!-- Location field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                        </span>
                        <select class="form-select" name="location" id="location">
                            <option value="0">
                                All Locations
                            </option>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($l->id); ?>" <?php echo e(app('request')->input('location') == $l->id ? "selected" :""); ?>>
                                    <?php echo e($l->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-div pxp-has-left-border">
                    <!-- Category field -->
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                        <span class="fa fa-folder-o"></span>
                        </span>
                        <select class="form-select" name="category" id="category">
                            <option value="0">
                                All Categories
                            </option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php echo e(app('request')->input('category') == $c->id ? "selected" :""); ?>>
                                    <?php echo e($c->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-div-btn">
                    <button>Find Jobs</button>
                </div>
            </form>
        </div>
    </div>
</section>


<!--======================================Job Offer sec end======================================-->

<!--======================================Job Offer middle sec start======================================-->

<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="row">
                            <div class="col-md-4 text-center user_profile_img"> <img src="<?php echo e(asset($job->image)); ?>" class="width-100"  alt="<?php echo e($job->title); ?>"/>
                                <h4 class="meg-0"><?php echo e($f->categories->title??''); ?></h4>
                                <span><?php if($job->address): ?><?php echo e($job->address); ?>,<?php endif; ?><?php echo e($job->locations->title??''); ?> <?php echo e($job->pincode); ?></span>
                                <div class="text-center">
                                    <a href="<?php echo e(url('career/job-apply/'.$job->seo_url)); ?>"><button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button></a>
                                </div>
                            </div>
                            <div class="col-md-8 user_job_detail">
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-credit-card"></i><?php echo e($job->salary_from); ?>K To <?php echo e($job->salary_to); ?>K/Month </div>
                                <?php if($job->contact): ?>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-mobile"></i><?php echo e($job->contact); ?></div>
                                <?php endif; ?>
                                <?php if($job->email): ?>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-envelope"></i><?php echo e($job->email); ?></div>
                                <?php endif; ?>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-calendar-alt"></i><span class="full-type"><?php echo e($job->emp_type); ?></span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-user"></i><span class="cl-danger"><?php echo e($job->no_of_position); ?> Open Position</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="fas fa-shield-virus"></i><?php echo e($job->exp_year_from); ?> - <?php echo e($job->exp_year_to); ?> Year Exp. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Description</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <?php echo $job->shortDescription; ?>

                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Skill</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                           <?php echo $job->mediumDescription; ?>

                        </ul>
                    </div>
                </div>
                <?php if($job->map): ?>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Location</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <iframe src="<?php echo e($job->map); ?>" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <?php endif; ?>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Requirements</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                           <?php echo $job->longDescription; ?>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <!-- Start: Job Overview -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="fas fa-info-circle"></i>Details</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <li><i class="ti-credit-card padd-r-10"></i>Publish Date: <?php if($job->start_date): ?><?php echo e(date('F d, Y',strtotime($job->start_date))); ?> to <?php endif; ?> <?php if($job->end_date): ?> <?php echo e(date('F d, Y',strtotime($job->end_date))); ?> <?php endif; ?></li>
                                    <li><i class="ti-world padd-r-10"></i><?php echo e($job->website); ?></li>
                                    <li><i class="ti-mobile padd-r-10"></i><?php echo e($job->contact); ?></li>
                                    <li><i class="ti-email padd-r-10"></i><?php echo e($job->email); ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End: Job Overview -->

                   
                </div>
            </div>
        </div>
        <!-- End Row -->
<?php if($similarjobs->count()>0): ?>
        <div class="row">
            <div class="col-md-12">
                <h4 class="mrg-bot-30 title-head">Similar Jobs</h4>
            </div>
        </div>
        <div class="row">
            <!-- Single Job -->
            <?php $__currentLoopData = $similarjobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type full-type"><?php echo e($j->emp_type); ?></span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox" checked>
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="<?php echo e(url('career/job-details/'.$j->seo_url)); ?>"> <img class="img-responsive" src="<?php echo e(asset($j->image)); ?>" alt=""> </a> </div>
                        <h5><a href="#"><?php echo e($j->title); ?></a></h5>
                        <p class="text-muted"><?php if($job->address): ?><?php echo e($job->address); ?>,<?php endif; ?><?php echo e($job->locations->title??''); ?> <?php echo e($job->pincode); ?></p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="<?php echo e(url('career/job-apply/'.$job->seo_url)); ?>" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>


<!--======================================Job Offer middle sec end======================================-->


<?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/career/job-details.blade.php ENDPATH**/ ?>