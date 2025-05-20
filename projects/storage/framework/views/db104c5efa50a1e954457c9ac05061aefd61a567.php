<footer >
	<div class="container"  class="my-footer">
	<div class="main-footer text-white" id="contact">
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
59.19073020927925<br>
PBX: --> <?php echo e($setting_data['mobile']); ?></p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="f-link">
					<ul>
						<!--<li><a href="<?php echo e(url('/')); ?>#contact">Contact</a></li>-->
						
						<!--<li><a href="<?php echo e(url('feedback')); ?>">Feedback</a></li>
						<li><a href="<?php echo e(url('privacy-policy')); ?>">Support resources</a></li>
						<li><a href="<?php echo e(url('quick-links')); ?>">Quick links</a></li>
						<li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy</a></li>-->
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="banner-social footer-social">
  	 			<ul>

                    <?php if($setting_data['instagram']): ?>
  	 				<li><a href="<?php echo e($setting_data['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if($setting_data['facebook']): ?>
  	 				<li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif; ?>
                    <?php if($setting_data['twitter']): ?>
  	 				<li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if($setting_data['linkedin']): ?>
                            <li><a href="<?php echo e($setting_data['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                        <?php endif; ?>

  	 			</ul>
  	 		</div>
			</div>
		</div><br>
		<div class="footer-bottom-link">
      <ul >
      
	<!--<li><a class="nav-link" href="<?php echo e(url('/home')); ?>">Home</a></li>-->
		<li><a class="nav-link" href="<?php echo e(url('/')); ?>#about-tomi">About TOMI</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>#participate" style="color: #8bc53f!important;">Participate</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>#jury" style="color: #ec0972!important;">Jury</a></li>
		<li class="nav-item"><a class="nav-link"  style="color: #0c9cd8!important;" href="<?php echo e(url('galleries')); ?>">Event</a></li>
		<li class="nav-item"><a class="nav-link"  style="color: #fff!important;" href="<?php echo e(url('/')); ?>#contact">Contact Us</a></li>
	<li  style="color: #8bc53f!important;" class="nav-item"><a class="nav-link"  style="color: #8bc53f!important;" href="<?php echo e(url('feedback')); ?>">Feedback</a></li>
         <li class="nav-item"><a class="nav-link"  style="color: #ec0972!important;" href="<?php echo e(url('support-resources')); ?>">Support resources</a></li>
               <li class="nav-item"><a class="nav-link" style="color: #0c9cd8!important;" href="<?php echo e(url('quick-links')); ?>">Quick links</a></li>
              <li class="nav-item"><a class="nav-link" style="color: #fff!important;" href="<?php echo e(url('privacy-policy')); ?>">Privacy</a></li>
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


<?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/layouts/footer.blade.php ENDPATH**/ ?>