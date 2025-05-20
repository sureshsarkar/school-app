<footer>
    <div class="footer-main" style="background-image: url(images/smartleadz-footer.png);">
         <div class="container">

            <div class="newsletter-div wow fadeInDown  animated" data-wow-delay="200ms">
                 <div class="newsletter-left">
                    <h4>Subscribe to Our Newsletter</h4>
                    <?php echo Form::open(["route"=>"newsletterPost"]); ?>

                        <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" required="required" name="email">

                      <button class="btn btn-outline-secondary"id="button-addon2">
    <img src="<?php echo e(asset('front/images/submit-icon.png')); ?>"></button>

                    </div>
                    </form>
                 </div>
                 <div class="newsletter-right">
            <img src="<?php echo e(asset(ModelHelper::getDataFromSetting('footer_logo') ?? 'front/images/e_logo.png')); ?>" alt="<?php echo $setting_data['website']; ?>" title="<?php echo $setting_data['website']; ?>">
                     
                 </div>
            </div>

             <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-contact quick-links wow fadeInDown  animated" data-wow-delay="200ms">
                  <h4>Contacts</h4>
                  <ul>
                    <li>
                      <span><i class="fas fa-envelope"></i></span>
                      <span><a href="mailto:<?php echo e($setting_data['email']); ?>"><?php echo e($setting_data['email']); ?></a></span>
                    </li> 
                    <li>
                      <span><i class="fas fa-mobile-alt"></i></span>
                      <span><a href="tel:<?php echo e($setting_data['mobile']); ?>"><?php echo e($setting_data['mobile']); ?></a></span>
                    </li>
                  </ul>

                </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-about wow fadeInDown  animated" data-wow-delay="400ms">
                        <div class="footer-ab-inn">
                            <h4>About Us</h4>
                        <p><?php echo e($setting_data['about']); ?></p>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-12">
                    <div class="quick-links footer-company wow fadeInDown  animated" data-wow-delay="600ms">
                         <h4>Company</h4>
                         <ul>
                <li><a href="<?php echo e(url('lead-process')); ?>">Lead Process</a></li>
        <li><a href="<?php echo e(url('terms-of-service')); ?>">Terms Of Service</a></li>
                <li><a href="<?php echo e(url('smart-track')); ?>">Smart Track</a></li>
                <li><a href="<?php echo e(url('blogs')); ?>">News & Blog</a></li>
                         </ul>
                    </div>
                 </div>
                  <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer-about wow fadeInDown  animated" data-wow-delay="800ms">
                        <h4>Social Media</h4>
                        <ul>
                            <li><a href="<?php echo $setting_data['twitter'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-twitter"></i></a></li>

                     <li><a href="<?php echo $setting_data['facebook'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-facebook-f"></i></a></li>

                    <li><a href="<?php echo $setting_data['linkedin'] ?? '#'; ?>"  target="_BLANK"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                 </div>
                 
                
             </div>


             <div class="copyright-wrap wow fadeInDown  animated" data-wow-delay="200ms">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <p><?php echo e($setting_data['copyright']); ?> <a href="<?php echo e(url('https://digitalhubsolution.com/')); ?>">DigitalHubSolution.</a></p>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="footer-link-new">
                    <ul>
                    <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(url('services')); ?>">Service</a></li>
                    <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
                 
        </div>




         </div>

    </div>


</footer>







<?php echo $__env->make("front.layouts.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("js"); ?>

<?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>