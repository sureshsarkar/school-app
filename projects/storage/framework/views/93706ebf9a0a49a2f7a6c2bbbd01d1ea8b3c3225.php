<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="footer-about">
                        <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/logo.png'); ?>">
                        <p><?php echo e($setting_data['about']); ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="footer-link">
                        <h5>QUICK LINKS</h5>
                        <ul>
                            <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(url('customer-login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('career')); ?>">Careers</a></li>
                            <li><a href="<?php echo e(url('customer-register')); ?>">Register</a></li>
                            <li><a href="#">For Employers</a></li>
                            <li><a href="<?php echo e(url('teams')); ?>">Teams</a></li>
                            <li><a href="#">For Job Seekers</a></li>
                            <li><a href="<?php echo e(url('faqs')); ?>">FAQ's</a></li>
                            <li><a href="<?php echo e(url('career/latest-opportunities')); ?>">Latest Opportunities</a></li>
                            <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-contact">
                        <h5>GET IN TOUCH</h5>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p><?php echo e($setting_data['address']); ?></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="#"><?php echo e($setting_data['mobile']); ?></a></p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p><a href="#"><?php echo e($setting_data['email']); ?></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-con">
                <p><?php echo e($setting_data['copyright']); ?></p>
                <ul>
                    <li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="<?php echo e($setting_data['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="<?php echo e($setting_data['pinterest']); ?>"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<?php echo $__env->make("front.layouts.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("js"); ?>

<?php /**PATH F:\Xampp8.0.2\htdocs\pinoy\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>