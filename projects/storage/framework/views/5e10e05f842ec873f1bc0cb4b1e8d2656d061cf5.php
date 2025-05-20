<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-about">
                        <img src="<?php echo e(asset($setting_data['footer_logo'])); ?>">
                        <p><?php echo e($setting_data['about']); ?></p>
                        <a href="#"><i class="far fa-envelope"></i> Email :- <?php echo e($setting_data['email']); ?></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-contact">
                        <h5>Contact us</h5>
                        <p><?php echo e($setting_data['address']); ?></p>
                        <p><span>Call/WhatsApp:</span>  <a href="#"><?php echo e($setting_data['mobile']); ?></a></p>
                        <!--  <p><a href="#">info@aicapital.net</a></p> -->
                        <h6>Follow Social</h6>
                        <ul>
                            <li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo e($setting_data['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer-link ps-0">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(url('case-studies')); ?>">Case Studies</a></li>
                            <li><a href="<?php echo e(url('management-team')); ?>">Management Team</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-link">
                        <h5>Services</h5>
                        <ul>
                            <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a  href="<?php echo e(url('services/'.$c->seo_url)); ?>"><?php echo e($c->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
        <div class="copyrigt-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="copyright-con">
                            <p><?php echo e($setting_data['mail_footer']); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="copyright-link">
                            <a href="<?php echo e(url('terms-of-service')); ?>">Terms & Condition</a>
                            <a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php echo $__env->make("front.layouts.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("js"); ?>

<?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>