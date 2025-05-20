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
    <?php $name=$data->name; ?>

        <!--=============================================Main Banner start======================================-->
    <section class="pxp-hero vh-100" style="background-color: #e6f0f9;">
        <div class="pxp-hero-caption">
            <div class="container">
                <div class="row pxp-pl-80 align-items-center justify-content-between">
                    <div class="col-12 col-xl-6 col-xxl-5">
                        <h1><?php echo e($data->description); ?></h1>
                        <div class="pxp-hero-subtitle mt-3 mt-lg-4">
                          <?php echo $data->shortDescription; ?>

                        </div>
                        <div class="pxp-hero-form pxp-hero-form-round mt-3 mt-lg-4">
                            <form class="row gx-3 align-items-center" role="search" method="get" action="<?php echo e(url('career/latest-opportunities')); ?>">
                                <div class="col-lg-5 col-md-5 col-12 ">
                                    <div class="mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="keywords" value="<?php echo e(app('request')->input('keywords')); ?>" id="keywords" placeholder="Job Title or Keyword">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-12 col-12 col-sm pxp-has-left-border">
                                    <div class="input-group mb-3 mb-sm-0">
									<span class="input-group-text">
									<span class="fa fa-globe"></span>
									</span>
                                        <select class="form-select" name="location" id="location">
                                            <option value="0">All Locations</option>
                                            <?php $__currentLoopData = \App\Models\Deal::where('publish','published')->orderBy('title','asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($l->id); ?>" <?php echo e(app('request')->input('location') == $l->id ? "selected" :""); ?>><?php echo e($l->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                                <div class=" col-lg-2 col-md-2 col-12col-12 col-sm-auto">
                                    <button><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="pxp-hero-searches-container">
                            <div class="pxp-hero-searches-label">
                                Popular Searches
                            </div>
                            <?php
                            $jobcategory=\App\Models\CareerCategory::whereHas('jobs',function ($q){
                                $q->where('publish','published');
                            })->where('isHome','true')->where('publish','published')->orderBy('ordering','asc')->limit(6)->get();

                                ?>
                            <?php if($jobcategory->count()>0): ?>
                            <div class="pxp-hero-searches">
                                <div class="pxp-hero-searches-items">
                                 <?php $__currentLoopData = $jobcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(url('career/latest-opportunities/'.$c->seo_url)); ?>"><?php echo e($c->title); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class=" d-xl-block col-xl-5 position-relative">
                        <div class="pxp-hero-cards-container pxp-animate-cards pxp-mouse-move" data-speed="160">
                            <div class="pxp-hero-card pxp-cover pxp-cover-top" style="background-image: url(<?php echo e(asset($data->image)); ?>);">
                            </div>
                            <div class="pxp-hero-card-dark"></div>
                            <div class="pxp-hero-card-light"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $partners=\App\Models\OurClient::all();
        ?>
        <?php if($partners->count()>0): ?>
        <div class="pxp-hero-logos-carousel-container">
            <div class="container">
                <div class="row pxp-pl-80">
                    <div class="col-12 col-xl-6">
                        <div class="pxp-hero-logos-carousel owl-carousel">
<?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset($p->image)); ?>" alt="<?php echo e($p->title); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="pxp-hero-right-bg-card pxp-has-animation"></div>
    </section>
    <!--=============================================Main Banner end======================================-->

    <!--=============================================shop category start======================================-->

    <section class="shop-cat-wrapper">
        <div class="container">
            <div class="shop-cat-head">
                <div class="shop-cat-title">
                    <?php echo $data->mediumDescription; ?>

                </div>
                <a href="<?php echo e(url('categories')); ?>">All Categories <i class="fas fa-angle-right"></i></a>
            </div>
            <?php if($jobcategory->count()>0): ?>
            <div class="owl-carousel shop-cat">
                <?php $__currentLoopData = $jobcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $jonopen_count=\App\Models\Career::where('category',$c->id)->where('publish','published')->count();
                    ?>
                <div class="item">
                    <a href="<?php echo e(url('career/latest-opportunities/'.$c->seo_url)); ?>">
                        <div class="shop-cat-box">
                            <div class="shop-cat-icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <h5><?php echo e($c->title); ?></h5>
                            <p><?php echo e($jonopen_count??'0'); ?> open positions</p>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!--=============================================shop category end======================================-->

    <!--=============================================featured offer start======================================-->
<?php
 $featuredjob=\App\Models\Career::with(['categories','locations'])->where('publish','published')->where('is_featured',1)->limit(8)->get();

?>
    <?php if($featuredjob->count()>0): ?>
    <section class="feat-offer-wrapper">
        <div class="container">

            <div class="feat-off-head">
                <?php echo $data->longDescription; ?>

            </div>
            <div class="row">
                <?php $__currentLoopData = $featuredjob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $skills=\App\Models\WelcomePackage::whereIn('id',explode(',',$f->skill_id))->get();

                    $skill_arr=[];
                    foreach ($skills as $sk){
                        $skill_arr[]=$sk->name;
                    }
                    if(count($skill_arr)>0){
                      $skill_string=  implode(', ',$skill_arr);
                    }else{
                        $skill_string='';
                    }
                    ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="feat-off-box">
                        <a href="<?php echo e(url('career/job-details/'.$f->seo_url)); ?>" class="category-feat"><i class="fas fa-chart-line"></i> <?php echo e($f->categories->title??''); ?></a>
                        <a href="<?php echo e(url('career/job-details/'.$f->seo_url)); ?>"><h5><?php echo e($f->company); ?></h5></a>
                        <div class="location-feat">
                            <a href="#"><i class="fas fa-globe-europe"></i><?php echo e($f->locations->title??''); ?></a>
                            <p><?php echo e($f->emp_type); ?></p>
                        </div>
                        <div class="company-detail">
                            <div class="comp-title">
                                <p><?php echo e($f->created_at->format('F d, Y')); ?> by</p>
                                <h5><?php echo e($skill_string); ?></h5>
                            </div>
                            <img src="<?php echo e(asset($f->image)); ?>">
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="all-job-off-btn">
                <a href="<?php echo e(url('career/feature-jobs')); ?>">All Job Offer <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!--=============================================featured offer end======================================-->

    <!--=============================================cts offer end======================================-->
    <section class="cta-wrapper">
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url(<?php echo e(asset($data->image2)); ?>) 50% -71.65px repeat scroll transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <?php echo $data->longDescriptiontwo; ?>

                            <a href="<?php echo e(url('customer-register')); ?>" title="">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================cts offer end======================================-->

    <!--=============================================career tip start======================================-->

    <section class="career-tip-wrap">
        <div class="block">
            <div data-velocity="-.1" style="background: url(<?php echo e(asset('front/images/parallax3.jpg')); ?>) 50% -55.3625px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <?php echo $data->longDescriptionthree; ?>

                        </div><!-- Heading -->
                        <?php
                        $tips=\App\Models\Service::where('publish','published')->get();
                        ?>
                        <?php if($tips->count()>0): ?>
                        <div class="blog-sec">
                            <div class="row">
                                <?php $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="<?php echo e(url('career-tips/'.$c->seo_url)); ?>" title=""><img src="<?php echo e(asset($c->image)); ?>" alt=""></a>
                                            <div class="blog-metas">
                                                <a href="#" title=""> <?php echo e($c->created_at->format('F d, Y')); ?></a>
                                                
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title=""><?php echo e($c->name); ?></a></h3>
                                            <p><?php echo e($c->description); ?></p>
                                            <a href="<?php echo e(url('career-tips/'.$c->seo_url)); ?>" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="job-log-sec">
                    <div class="jp_register_section_main_wrapper">
                        <div class="jp_regis_left_side_box_wrapper">
                            <div class="jp_regis_left_side_box">
                                <img src="<?php echo e(asset('front/images/l1.png')); ?>" alt="icon">
                                <h4>LOGIN AS ADMIN</h4>
                                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_regis_right_side_box_wrapper">
                            <div class="jp_regis_right_img_overlay"></div>
                            <div class="jp_regis_right_side_box">
                                <img src="<?php echo e(asset('front/images/l2.png')); ?>" alt="icon">
                                <h4>I'M An employer</h4>
                                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                </ul>
                            </div>
                            <div class="jp_regis_center_tag_wrapper">
                                <p>OR</p>
                            </div>
                        </div><div class="jp_regis_left_side_box_wrapper">
                            <div class="jp_regis_left_side_box">
                                <img src="<?php echo e(asset('front/images/l1.png')); ?>" alt="icon">
                                <h4>LOGIN AS JOBSEEKERS</h4>
                                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                </ul>
                            </div>
                            <div class="jp_regis_center_tag_wrapper">
                                <p>OR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================career tip end======================================-->

    <!--=============================================company logo tip start======================================-->

    <section class="partner-logo-wrap">
        <div class="container">
            <div class="partner-logo-head">
                <?php echo $data->longDescriptionfour; ?>

            </div>
        </div>
    </section>
    <section class="partner-sec-wrap">
        <div class="container">
            <div class="partner-sec-main">
                <div class="partner-logo-slider">
                    <div class="owl-carousel logo-slider">
                        <?php $__currentLoopData = \App\Models\Gallery::where('status','active')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <img src="<?php echo e(asset($com->image)); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="counter-wrapp">
                    <div class="counter-wrapper wow fadeInUp">
                        <div class="counter-main">
                            <div class="container">
                                <div class="counter-inner">
                                    <ul id="counter">
                                        <li>
                                            <div class="count-contanet">
                                                <span class="count percent" data-count="5">0</span><span>M</span>
                                                <p>Million daily active users</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="count-contanet">
                                                <span class="count percent" data-count="9">0</span><span>K+</span>
                                                <p>Open job positions</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="count-contanet">
                                                <span class="count percent" data-count="2">0</span><span>M+</span>
                                                <p>Million stories shared</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================company logo end======================================-->


    <!--=============================================footer top start======================================-->

    <?php echo $__env->make('front.layouts.search-job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--=============================================footer top end======================================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/pinoy.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/home.blade.php ENDPATH**/ ?>