<!--<footer>
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
</footer>-->


<footer>
	<div class="container">
	<div class="main-footer">
		<h3>Contact Us</h3>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12">
				<div class="f-logo">
					<img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/footer-logo.png'); ?>">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-12">
				<div class="f-links">
				    <?php echo $setting_data['address']; ?>

				<!--	<p>Barranco Beatriz 6*<br>
Ash Sharqiyah South Governorate<br>
Oman, OM (OMN)<br>
Western Asia<br>
Asia<br>
Lat/Lon<br>
21.5230262,<br>
59.19073020927925<br>-->
PBX:  <?php echo e($setting_data['mobile']); ?></p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="f-link">
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Social</a></li>
						<li><a href="#">Feedback</a></li>
						<li><a href="#">Support resources</a></li>
						<li><a href="#">Quick links</a></li>
						<li><a href="#">Privacy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="banner-social footer-social">
  	 			<ul>
  	 				<li><a href="<?php echo e($setting_data['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
  	 				<li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
  	 				<li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
  	 			</ul>
  	 		</div>
			</div>
		</div>
		<div class="footer-bottom-link">
			<ul>
				<li><a href="#">Contact</a></li>
						<li><a href="#">Social</a></li>
						<li><a href="#">Feedback</a></li>
						<li><a href="#">Support resources</a></li>
						<li><a href="#">Quick links</a></li>
						<li><a href="#">Privacy</a></li>
			</ul>
		</div>
		<div class="footer-button">
			<ul>
							<li><a href="#"><i class="far fa-user"></i>Login</a></li>
							<li><a href="#">Register</a></li>
						</ul>
		</div>
		<div class="copyright">
		    <?php echo $setting_data['copyright']; ?>

<!--			<p>Developed for - All right reserved.<br>2024</p>
-->		</div>
	</div>
	</div>
</footer>

<?php echo $__env->make("front.layouts.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("js"); ?>

<?php /**PATH /home/mobbindtechnolog/public_html/admin.mobbindtechnology.co.in/projects/resources/views/front/layouts/footer.blade.php ENDPATH**/ ?>