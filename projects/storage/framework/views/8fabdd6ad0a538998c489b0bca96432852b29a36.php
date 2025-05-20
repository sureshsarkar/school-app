

<footer>

    

<div class="footer-main" style="background-image: url(<?php echo e(asset('front/images/footer.png')); ?>">

     <div class="container">

         <div class="footer-inner">

            <div class="row">

                 <div class="col-lg-3 col-md-12 col-12">

                    <div class="footer-about">

                        <img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>" alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">

                    <p><?php echo $setting_data['about'] ?? '#'; ?></p>

                    <ul>

                        <li><a href="<?php echo $setting_data['linkedin'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-linkedin"></i></a></li>

                        <li><a href="<?php echo $setting_data['instagram'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-instagram-square"></i></a></li>

                        <li><a href="<?php echo $setting_data['twitter'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-twitter-square"></i></a></li>

                        <li><a href="<?php echo $setting_data['facebook'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-facebook-square"></i></a></li>

                        <li><a href="<?php echo $setting_data['whatsapp'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-whatsapp-square"></i></a></li>

                        <li><a href="<?php echo $setting_data['pinterest'] ?? '#'; ?>" target="_BLANK"><i class="fab fa-pinterest-square"></i></a></li>

                    </ul>



                    </div>

                 </div>

                 <div class="col-lg-9 col-md-12 col-12">

                    <div class="footer-right">

                         <div class="footer-contact-detail">

                            <ul>

                                <li>

                                    <h6>Email</h6>

                                    <p><a href="mailto:<?php echo $setting_data['email'] ?? '#'; ?>"><?php echo $setting_data['email'] ?? '#'; ?></a></p>

                                </li>

                                <li>

                                    <h6>Phone</h6>

                                    <p><a href="tel:<?php echo $setting_data['mobile'] ?? '#'; ?>"><?php echo $setting_data['mobile'] ?? '#'; ?></a></p>

                                </li>

                                <li>

                                    <h6>Location</h6>

                                    <p><a href="<?php echo $setting_data['map'] ?? '#'; ?>"><?php echo $setting_data['address'] ?? '#'; ?></a></p>

                                </li>



                            </ul>

                         </div>

                         <div class="footer-links-div">

                             <div class="row">

                                 <div class="col-lg-4 col-md-3 col-5">

                                    <div class="quick-links">

                                        <h5>Quick Links</h5>

                                        <ul>

                                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>

                                            <li><a href="<?php echo e(url('about-us')); ?>">About us</a></li>

                                            <li><a href="<?php echo e(url('products')); ?>">Products</a></li>

                                            <li><a href="<?php echo e(url('faqs')); ?>">FAQs</a></li>

                                            <li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>

                                            <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>

                                        </ul>

                                    </div>

                                 </div>

                                 <div class="col-lg-4 col-md-5 col-7">

                                    <div class="quick-links">

                                        <h5>Products & Services</h5>

                                        <ul>

                                            <?php $__currentLoopData = App\Models\Location::orderBy("ordering","asc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <li><a href="<?php echo e(url('products/'.$c->seo_url)); ?>"><?php echo e($c->name); ?></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <li><a href="<?php echo e(url($c->seo_url)); ?>"><?php echo e($c->name); ?></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>

                                    </div>

                                 </div>

                                 <div class="col-lg-4 col-md-4 col-12">

                                    <div class="footer-subscribe quick-links">

                                         <h5>Subscribe</h5>

                                         <p><?php echo $setting_data['newsletter'] ?? '#'; ?></p>

                                         <?php echo Form::open(["class"=>"newsletter-data","route"=>"newsletterPost"]); ?>


                                            <div class="input-group mb-3">

                                              <input type="email" name="email" class="form-control" placeholder="Enter your email">

                                              <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-chevron-right"></i></button>

                                            </div>

                                         </form>

                                    </div>

                                 </div>

                             </div>

                         </div>

                    </div>

                 </div>

            </div>

         </div>

     </div>



     <div class="copyright-wrapper">

         <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">

                    <div class="copyright-content">

                         <p><?php echo $setting_data['copyright'] ?? '#'; ?></p>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <div class="footer-bottom-link">

                         <ul>

                            <li><a href="<?php echo e(url('terms-and-conditions')); ?>">Terms and Conditions</a></li>

                            <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>

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

<?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/layouts/footer.blade.php ENDPATH**/ ?>