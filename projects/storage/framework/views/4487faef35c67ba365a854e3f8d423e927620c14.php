<?php
//$jobcounter=\App\Models\Cms::where('is_parent',$data->id)->first();
$jobcounter=\App\Models\Cms::where('seo_url','job-counter')->first();
?>
<?php if($jobcounter): ?>
<section class="mt-100">
    <div class="container">
        <div class="row justify-content-between align-items-center mt-4 mt-md-5">
            <div class="col-lg-6 col-xxl-5">
                <div class="pxp-info-fig pxp-animate-in pxp-animate-in-right pxp-in"><div class="pxp-info-fig-image pxp-cover" style="background-image: url(<?php echo e(asset($jobcounter->image)); ?>);"></div><div class="pxp-info-stats"><div class="pxp-info-stats-item "><div class="pxp-info-stats-item-number"><?php echo e($setting_data['project completed']); ?><span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Business Development
                            </div>
                        </div><div class="pxp-info-stats-item "><div class="pxp-info-stats-item-number"><?php echo e($setting_data['Working hours']); ?><span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Marketing &amp; Comminication
                            </div>
                        </div><div class="pxp-info-stats-item"><div class="pxp-info-stats-item-number"><?php echo e($setting_data['Experienced Staff']); ?><span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Human Resources
                            </div>
                        </div></div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6">
                <div class="pxp-info-caption mt-4 mt-sm-5 mt-lg-0  "><h2 class="pxp-section-h2">
                    <?php echo e($jobcounter->description); ?>

                    </h2><p class="pxp-text-light">
                      <?php echo $jobcounter->shortDescription; ?>

                    </p><div class="pxp-info-caption-list">
                      <?php echo $jobcounter->mediumDescription; ?>

                    </div>
                    <div class="pxp-info-caption-cta">
                        <a href="<?php echo e(url('career/latest-opportunities')); ?>" class="btn rounded-pill pxp-section-cta">
                            Get Started Now
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/jobs-counter.blade.php ENDPATH**/ ?>