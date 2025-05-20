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
<?php echo $__env->make("front.layouts.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




        <!--============================home about sec start ============================-->
        <section class="home-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="home-about-left">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="home-about-box">
                                        <img src="<?php echo e(asset('front/images/about-home-011.webp')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">
                                        <div class="home-about-box-con">
                                            <p>Configurable advanced  metering infrastructure (AMI) solutions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="home-about-box mt-5">
                                        <img src="<?php echo e(asset('front/images/about-home-101.webp')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">
                                        <div class="home-about-box-con">
                                            <p>Big data enabledmeter data analytics solution (MDAS)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="home-about-right">
                            <h5>ABOUT COMPANY</h5>
                            <h3>Light<span>house</span></h3>
                            <h4>IoT Solutions Pvt Ltd</h4>
                            <p>Is a privately held company, incorporated in 2021, providing IoT enabled smart energy meters, smart grid and energy efficiency solutions. Lighthouse IoT has invested nearly 2 years in R&D to develop an innovative, cutting edge and cost effective AMI based smart metering solution </p>
                            <a href="<?php echo e(url('abot-us')); ?>">Read More</a>
                            <div class="home-about-con-div">
                                <div class="image-feat-about">
                                    <img src="<?php echo e(asset('front/images/about-home-021.webp')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">
                                </div>
                                <div class="con-feat-about">
                                    <div class="con-feat-about-inn">
                                        <p>Sophisticated communication network which supports RF- mesh, NB-IOT & GPRS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============================home about sec end ============================-->
        <!--============================home feat sec start ============================-->
    


        <section class="home-feat-wrapp">
            <div class="container">
                <div class="row owl-carousel home-feat-slide">
                    <?php $__currentLoopData = App\Models\WelcomePackage::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item box-parent">
                        <div class="home-feat-box">
                            <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->name); ?>" title="<?php echo e($c->name); ?>">
                            <h4><?php echo e($c->name); ?></h4>
                            <p><?php echo e($c->longDescription); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--============================home feat sec end ============================-->
        <!--============================why choose sec start ============================-->
        <section class="why-choose-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="why-choose-con home-about-right">
                            <h5>WHY CHOOSE Us</h5>
                            <h3>Innovation </h3>
                            <h4>& Quality manufacturing</h4>
                            <ul>
                                <li>Lighthouse IoT has been focused on continuous innovation & quality manufacturing </li>
                                <li>Our R&D team consists of Hardware, Firmware, Testing & Validation and Mechanical engineers, with a routine and acceptance test lab as per IS 16444:2015.</li>
                                <li>7000sqft manufacturing area with future production capacity of 1.2 million meters/annum </li>
                                <li>Tie-ups with component distributors for confirmed just-in-time supply of electronic components</li>
                                <li>In house software Dev team to develop custom Apps as per customer needs</li>
                                <li>Mobile App on Android & iOS platforms for customer use</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="why-choose-image">
                            <img src="<?php echo e(asset('front/images/why-choose.webp')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============================why choose sec end ============================-->
        <!--============================Home Products sec start ============================-->
        <section class="our-product-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="product-small-box product-first-box">
                                    <div class="product-first-box-inn">
                                        <h3>our<br> <span>Products</span></h3>
                                        <p>In house software Dev team to develop custom Apps as per customer needs</p>
                                        <a href="<?php echo e(url('products')); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php $__currentLoopData = App\Models\Location::where("is_home","true")->orderBy("ordering","asc")->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="product-small-box" style="background-image: url(<?php echo e(asset('front/images/product-back.png')); ?>);">
                                    <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e(strip_tags($c->name)); ?>" title="<?php echo e(strip_tags($c->name)); ?>" >
                                    <h5><?php echo $c->name; ?> </h5>
                                    <a href="<?php echo e(url('products/'.$c->seo_url)); ?>">Read More</a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php $__currentLoopData = App\Models\Location::where("is_home","true")->orderBy("ordering","asc")->take(1)->skip(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-box-rigth" style="background-image: url(<?php echo e(asset('front/images/product-back.png')); ?>);">
                             <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e(strip_tags($c->name)); ?>" title="<?php echo e(strip_tags($c->name)); ?>" >
                                    <h5><?php echo $c->name; ?> </h5>
                                    <a href="<?php echo e(url('products/'.$c->seo_url)); ?>">Read More</a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--============================Home Products sec end ============================-->
        <!--============================Counter sec start ============================-->
        <section class="counter-wrapp">
            <div class="container">
                <div class="counter-main" style="background-image: url(<?php echo e(asset('front/images/counter-back.png')); ?>);">
                    <div class="counter-inner">
                        <ul>
                            <li>
                                <h3><?php echo $setting_data['project completed'] ?? ''; ?></h3>
                                <p>Successful projects</p>
                            </li>
                            <li>
                                <h3><?php echo $setting_data['Happy Clients'] ?? ''; ?></h3>
                                <p>Satisfied Clients</p>
                            </li>
                            <li>
                                <h3><?php echo $setting_data['Experienced Staff'] ?? ''; ?></h3>
                                <p>Experienced Staff</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--============================Counter sec end ============================-->
        <!--============================testimonial sec start ============================-->
        <section class="testimonial-wrapp">
            <div class="testi-back" style="background-image: url(<?php echo e(asset('front/images/testimonial-back.png')); ?>);">
                <div class="container">
                    <div class="testimonial-head">
                        <h5>TESTIMONIALS</h5>
                        <h3>What Our Client Say About Easton.</h3>
                    </div>
                    <div class="owl-carousel testi-slider">
                        <?php $__currentLoopData = App\Models\Testimonial::take(6)->orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="testi-content">
                                <div class="author-image">
                                    <?php if($c->image): ?>
                                    <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" >
                                    <?php endif; ?>
                                </div>
                                <div class="testi-auth-content">
                                    <p><?php echo e($c->message); ?></p>
                                    <h4><?php echo e($c->name); ?> <br><?php echo e($c->profile); ?></h4>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--============================testimonial sec end ============================-->
        <!--============================faq sec start ============================-->
        <section class="faq-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="faq-image">
                            <img src="<?php echo e(asset('front/images/faq.webp')); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>" >
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="faq-content">
                            <h5>FAQ’S</h5>
                            <h3>Frequently<br> <span>Asked Question</span></h3>
                            <div class="accordion" id="accordionExample">
                                <?php $c1=1;?>
                                <?php $__currentLoopData = App\Models\Faq::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($c1==1): ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne<?php echo e($c->id); ?>">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo e($c->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($c->id); ?>">
                                                <?php echo $c->question; ?>

                                                </button>
                                            </h2>
                                            <div id="collapseOne<?php echo e($c->id); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php echo $c->answer; ?>

                                                </div>
                                            </div>
                                        </div>
                                   <?php else: ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo<?php echo e($c->id); ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo e($c->id); ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo e($c->id); ?>">
                                                <?php echo $c->question; ?>

                                                </button>
                                            </h2>
                                            <div id="collapseTwo<?php echo e($c->id); ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo<?php echo e($c->id); ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php echo $c->answer; ?>

                                                </div>
                                            </div>
                                        </div>
                                  <?php endif; ?>
                                <?php $c1++;?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============================faq sec end ============================-->
        <!--============================brand sec start ============================-->
        <section class="brand-logo-wrapp">
            <div class="container">
                <div class="owl-carousel brand-slider">
                    <?php $__currentLoopData = App\Models\OurClient::take(6)->orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->name); ?>" title="<?php echo e($c->name); ?>" >
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!--============================brand sec end ============================-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/home.blade.php ENDPATH**/ ?>