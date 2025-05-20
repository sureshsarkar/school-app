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
        <!-- start banner sec -->

    <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--====================================Case Studies mid start================================-->

    <section class="home-about-wrapp case-studies-wrapp">
        <div class="container">
            <div class="case-studies-list">
                <?php echo $data->shortDescription; ?>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php $__currentLoopData = App\Models\Location::orderBy("id","asc")->where('parent_id',0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if($key==0): ?> active <?php endif; ?> " id="pills-home-tab<?php echo e($key); ?>" data-bs-toggle="pill" data-bs-target="#pills-home<?php echo e($key); ?>" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e($c->name); ?></button>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?php
                       $datas= App\Models\Location::with('children')->orderBy("id","asc")->where('parent_id',0)->get();

                    ?>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key11=>$c1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="tab-pane fade <?php if($key11==0): ?>show active <?php endif; ?>" id="pills-home<?php echo e($key11); ?>" role="tabpanel" aria-labelledby="pills-home-tab<?php echo e($key11); ?>">

                        <div class="case-page-list-main">
                            <div class="row">
                           <?php if($c1->children->count()>0): ?>
                               <?php $__currentLoopData = $c1->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$c2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-lg-3 col-md-6 col-12">
                                        <a href="<?php echo e(url("case-studies/".$c2->seo_url)); ?>">
                                    <div class="case-list-box">
                                        <div class="case-list-img">
                                            <img src="<?php echo e(asset($c2->image)); ?>">
                                            <div class="case-list-box-con">
                                                <div class="case-list-con-inn">
                                                    <h4><?php echo e($c2->name); ?></h4>
                                                    <p><?php echo e($c2->created_at); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                   
                </div>
            </div>
        </div>
    </section>

    <!--==================================== Case Studies mid end================================-->

    <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('front.static.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $clients=App\Models\OurClient::orderBy("id","desc")->first(); ?>
    <?php if($clients): ?>
        <!--==================================== brand logo section start================================-->

        <section class="brand-logo-wrapp wow fadeInUp">
            <div class="brand-logo-main">
                <div class="container">
                    <div class="owl-carousel brand-slider">

                        <?php $__currentLoopData = App\Models\OurClient::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <img src="<?php echo e(asset($c->image)); ?>">
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <script src="<?php echo e(asset('front/assets/jquery/jquery.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
    <script>
        $(function() {

            // go to the latest tab, if it exists:
            var lastTab = localStorage.getItem('lastTab');
            if (lastTab) {

                $('#'+lastTab).trigger('click');
                localStorage.clear();

                /* $('[href="' + lastTab + '"]').tab('show');*/
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/case-studies.blade.php ENDPATH**/ ?>