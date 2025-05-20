<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>

<?php $__env->startSection("container"); ?>
    <?php echo $__env->make("front.layouts.inner-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--======================================Job Offer sec start======================================-->

    <section class="pxp-page-header-simple form-header" style="background-color: #e6f0f9;">
        <div class="container">
            <h1 class="">
                Latest Opportunities
            </h1>
            <div class="pxp-hero-subtitle pxp-text-light ">
                Search your career opportunity through 12,800 jobs
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

    <section class="job-off-mid-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="job-off-cat">
                        <h5>Offerd Salary</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under $10,000
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>

                        <h5>Job Type</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Full Time
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>


                        <h5>Designation</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Designer
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>

                        <h5>Experince</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1Year To 2Year
                                    </label>
                                </div>
                                <span>1</span>
                            </li>
                        </ul>


                        <h5>Qualification</h5>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        High School
                                    </label>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
<?php if($latestjob->count()>0): ?>
<?php $__currentLoopData = $latestjob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $skills=\App\Models\WelcomePackage::whereIn('id',explode(',',$job->skill_id))->get();
    ?>
                    <!-- Single Verticle job -->
                    <div class="job-verticle-list">
                        <div class="vertical-job-card">
                            <div class="vertical-job-header">
                                <div class="vrt-job-cmp-logo"> <a href="#"><img src="<?php echo e(asset($job->image)); ?>" class="img-responsive" alt=""></a> </div>
                                <h4><a href="#"><?php echo e($job->company); ?></a></h4>
                                <span class="com-tagline"><?php echo e($job->categories->title??''); ?></span> <span class="pull-right vacancy-no">No. <span class="v-count"><?php echo e($job->no_of_position); ?></span></span>
                            </div>
                            <div class="vertical-job-body">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                        <ul class="can-skils">
                                            <li><strong>Job Type: </strong><?php echo e($job->emp_type); ?></li>
                                            <li><strong>Skills: </strong> <div>
                                                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="skill-tag"><?php echo e($sk->name); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div> </li>
                                            <li><strong>Experience: </strong><?php echo e($job->exp_year_from); ?> - <?php echo e($job->exp_year_to); ?> Year</li>
                                            <li><strong>Location: </strong> <?php if($job->address): ?><?php echo e($job->address); ?>,<?php endif; ?><?php echo e($job->locations->title??''); ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <div class="vrt-job-act"> <a href="<?php echo e(url('career/job-apply/'.$job->seo_url)); ?>" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="<?php echo e(url('career/job-details/'.$job->seo_url)); ?>" title="" class="btn-job light-gray-btn">View Job</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/career/latest-jobs.blade.php ENDPATH**/ ?>