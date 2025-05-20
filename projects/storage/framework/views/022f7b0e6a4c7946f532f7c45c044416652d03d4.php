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

     
   <section class="banner-wrapper">
  	  
  	 <div class="container">
  	 	<div class="row">
  	 	<div class="offset-lg-3 col-lg-8 col-md-8 col-12">
  	 		<div class="main-slider owl-carousel">
  	 			<div class="item">
  	 				<div class="slider-inner">
  	 					<div class="row">
  	 						<div class="col-lg-6 col-md-6 col-12">
  	 							<div class="banne-content">
  	 								<div class="banner-con-inner">
  	 									<img src="<?php echo e(asset('front/images/banner-con.png')); ?>">
  	 								</div>
  	 							</div>
  	 						</div>
  	 						<div class="col-lg-6 col-md-6 col-12">
  	 							<div class="slider-img">
  	 								<img src="<?php echo e(asset('front/images/banner.png')); ?>">
  	 							</div>
  	 						</div>
  	 					</div>
  	 				</div>
  	 			</div>
  	 			<div class="item">
  	 				<div class="slider-inner">
  	 					<div class="row">
  	 						<div class="col-lg-6 col-md-6 col-12">
  	 							<div class="banne-content">
  	 								<div class="banner-con-inner">
  	 									<img src="<?php echo e(asset('front/images/banner-con.png')); ?>">
  	 								</div>
  	 							</div>
  	 						</div>
  	 						<div class="col-lg-6 col-md-6 col-12">
  	 							<div class="slider-img">
  	 								<img src="<?php echo e(asset('front/images/banner.png')); ?>">
  	 							</div>
  	 						</div>
  	 					</div>
  	 				</div>
  	 			</div>
  	 		</div>
  	 	</div>
  	 	
  	 	<div class="col-lg-1 col-md-1 col-12">
  	 		<div class="banner-social">
  	 			<ul>
  	 				<li><a href="<?php echo e($setting_data['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
  	 				<li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
  	 				<li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
  	 			</ul>
  	 		</div>
  	 	</div>
  	 </div>
  	 </div>
  	  <div class="banner-shape">
  	   	  <img src="<?php echo e(asset('front/images/banner-shape.png')); ?>">
  	   </div>
  </section>


<section class="counter-wrapper">
    <div class="container">
      <div class="row">
      <div class="col-lg-2 col-md-2 col-12">
        <div class="become-img">
          <img src="<?php echo e(asset('front/images/mamber.png')); ?>">
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <div class="couner-inner">
          <h5>Only</h5>
            <ul id="counter">
              <li>
                <div class="count-contanet">
                  <span class="count percent" data-count="<?php echo e($setting_data['project completed']); ?>">0</span>
                <p>Days</p>
                </div>
              </li>
              <li>
                <div class="count-contanet">
                  <span class="count percent" data-count="<?php echo e($setting_data['Working hours']); ?>">0</span>
                <p>Hours</p>
                </div>
              </li>
              <li>
                <div class="count-contanet">
                  <span class="count percent" data-count="<?php echo e($setting_data['Experienced Staff']); ?>">0</span>
                <p>Minutes</p>
                </div>
              </li>
              <li>
                <div class="count-contanet">
                  <span class="count percent" data-count="<?php echo e($setting_data['Happy Clients']); ?>">0</span>
                <p>Seconds</p>
                </div>
              </li>
            </ul>
            <h4>...FOR THE <span class="pink-span">CREATIVE EVENT</span> OF <span class="orange-span">THE YEAR!</span></h4>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-12">
        <div class="become-img right-img">
          <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/footer-logo.png'); ?>">
        </div>
      </div>
      </div>
    
    <div class="counter-bottom mt-5">
       <div class="row">
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box first-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/smart-era-corporate-life-work-smartly-together-by-creatively-ai-generative.jpg')); ?>">
              </div>
              <h5>Badir wins best digital spot</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box second-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/arab-employee-celebrating-award.jpg')); ?>">
            </div>
            <h5>The awards are dresses in gold</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box third-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/group-arabic-people-engineer.jpg')); ?>">
            </div>
             <h5>A successful team</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box four-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/man-with-glasses-beard-sitting-table-with-laptop-generative-ai.jpg')); ?>">
            </div>
             <h5>Goals and dreams fulfilled</h5>
           </div>
         </div>
       </div>
    </div>

    </div>
</section>


<section class="about-home">
  <div class="about-home-main">
   <div class="container">
       <div class="social-media-tabs events-tab">
               <h2>Event</h2>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-hero-sec-tab" data-bs-toggle="pill" data-bs-target="#pills-hero-sec" type="button" role="tab" aria-controls="pills-hero-sec" aria-selected="true">Hero Section</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-event-detail-tab" data-bs-toggle="pill" data-bs-target="#pills-event-detail" type="button" role="tab" aria-controls="pills-event-detail" aria-selected="false">Event Details</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-participate-tab" data-bs-toggle="pill" data-bs-target="#pills-participate" type="button" role="tab" aria-controls="pills-participate" aria-selected="false">Participate</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-our-partner-tab" data-bs-toggle="pill" data-bs-target="#pills-our-partner" type="button" role="tab" aria-controls="pills-our-partner" aria-selected="false">Our Partners</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-social-media-tab" data-bs-toggle="pill" data-bs-target="#pills-social-media" type="button" role="tab" aria-controls="pills-social-media" aria-selected="false">Social Media</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-hero-sec" role="tabpanel" aria-labelledby="pills-hero-sec-tab">
                 
                 <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                           <img src="<?php echo e(asset('front/images/logo.png')); ?>">
                        </div>
                        <div class="second-img">
                          <img src="<?php echo e(asset('front/images/mamber.png')); ?>">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-12">
                          <div class="tab-con-div">
                            <p>John Smith, an exceptional marketing
professional, has been honored with the
prestigious TOMI Award for Excellence in
Marketing. Held annually, the TOMI Awards
celebrate the top marketers in Oman who
have demonstrated outstanding innovation,
strategic thinking, and impactful results in
their campaigns. Smith's creative approach
and dedication to driving brand success
have distinguished him among his peers,
earning him this esteemed accolade. His
contributions continue to set a high
standard in the marketing industry in Oman.</p>
                          </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-12">
                         <div class="tab-img">
                           <img src="<?php echo e(asset('front/images/smart-era-corporate-life-work-smartly-together-by-creatively-ai-generative.jpg')); ?>">
                         </div>
                       </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>

              </div>
              <div class="tab-pane fade" id="pills-event-detail" role="tabpanel" aria-labelledby="pills-event-detail-tab">
                
                <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                           <img src="<?php echo e(asset('front/images/logo.png')); ?>">
                        </div>
                        <div class="second-img">
                          <img src="<?php echo e(asset('front/images/mamber.png')); ?>">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-12">
                          <div class="tab-con-div">
                            <p>The Oman Convention Center, a
state-of-the-art facility known for its modern
architecture and world-class amenities, is set
to host the highly anticipated TOMI
Marketing Awards. This premier event,
established to recognize and honor the best
in marketing across Oman, originated as a
platform to celebrate outstanding
achievements and innovative strategies
within the industry. The TOMI Awards
highlight the exceptional contributions of
marketing professionals who have
demonstrated excellence in creativity,
strategic execution, and impactful results.
The Oman Convention Center, with its
expansive spaces and advanced technology,
provides the perfect setting for this
prestigious event, where the brightest minds
in marketing will gather to celebrate their
successes and inspire future achievements.</p>
                          </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-12">
                         <div class="tab-img">
                           <img src="<?php echo e(asset('front/images/smart-era-corporate-life-work-smartly-together-by-creatively-ai-generative.jpg')); ?>">
                         </div>
                       </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>

              </div>
              <div class="tab-pane fade" id="pills-participate" role="tabpanel" aria-labelledby="pills-participate-tab">3</div>
              <div class="tab-pane fade" id="pills-our-partner" role="tabpanel" aria-labelledby="pills-our-partner-tab">
                
                <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                           <img src="<?php echo e(asset('front/images/logo.png')); ?>">
                        </div>
                        <div class="second-img">
                          <img src="<?php echo e(asset('front/images/mamber.png')); ?>">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-6 col-12">
                    <div class="row">
                       <div class="col-lg-12 col-md-6 col-12">
                          <div class="tab-con-div">
                            <p>The TOMI Marketing Awards, an esteemed event honoring the best in marketing across Oman, invites leading
organizations to become official partners. As a partner, your organization will play a crucial role in supporting
and celebrating the achievements of the most innovative and effective marketers in the region.</p>
     <p>Partnering with the TOMI Awards offers a unique opportunity to align your brand with excellence and
innovation in the marketing industry. The event, hosted at the renowned Oman Convention Center, gathers top
professionals, industry leaders, and media representatives, providing exceptional exposure and networking
opportunities for our partners.</p>
                          </div>
                            
                            <div class="partner-logo">
                                <ul>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                  <li><img src="<?php echo e(asset('front/images/part2.png')); ?>"></li>
                                </ul>
                            </div>

                       </div>
                       
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>

              </div>
              <div class="tab-pane fade" id="pills-social-media" role="tabpanel" aria-labelledby="pills-social-media-tab">5</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">6</div>
            </div>
            </div>
            

            <div class="home-abt-mid pt-5 mt-2">
               <div class="row">
                  <div class="col-lg-2 col-md-3 col-12">
                    <div class="about-side-img">
                        <div class="first-img">
                           <img src="<?php echo e(asset('front/images/logo.png')); ?>">
                        </div>
                        <div class="second-img">
                          <img src="<?php echo e(asset('front/images/mamber.png')); ?>">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6 col-12">
                    <div class="about-video">
                       <iframe width="100%" height="415" src="https://www.youtube.com/embed/o5NzlRqs4zA?si=lUWmWOt9u7ym0G5X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-12">
                      <div class="banner-social abt-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>


   </div>
 </div>
</section>




<section class="sponser-wrapp">
  <div class="container">
    <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12">
        <div class="spons-head">
           <h3>SPONSORS LOGOS</h3>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12">
       <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
  </div>
</div>
</section>

 <section class="jury-wrapp">
  <div class="jury-inner-wrapp">
    <div class="container">
        <div class="social-media-tabs jury-tab">
              <div class="logo-side">
                 <img src="<?php echo e(asset('front/images/logo.png')); ?>">
              </div>
               <h2>Jury</h2>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-proccess-tab" data-bs-toggle="pill" data-bs-target="#pills-proccess" type="button" role="tab" aria-controls="pills-proccess" aria-selected="true">Proccess</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profiles-tab" data-bs-toggle="pill" data-bs-target="#pills-profiles" type="button" role="tab" aria-controls="pills-profiles" aria-selected="false">Profiles</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-trans-tab" data-bs-toggle="pill" data-bs-target="#pills-trans" type="button" role="tab" aria-controls="pills-trans" aria-selected="false">Transparency</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-proccess" role="tabpanel" aria-labelledby="pills-proccess-tab">
                  
                  <div class="proccess-tab-inn">
                     <div class="process-tab-main">
                        <div class="row">
                           <div class="col-lg-7 col-md-7 col-12">
                              <div class="process-tab-con">
                                 <p>The TOMI Marketing Awards celebrates the pinnacle of marketing excellence in Oman, and the journey to selecting our esteemed winners is both rigorous and transparent, ensuring that only the most outstanding achievements are recognized.</p>

                                 <p>Application Process:<br> The journey begins with an open call for nominations. Marketing professionals and organizations across Oman are invited to submit their most impactful campaigns and projects. Each application requires detailed documentation, including campaign objectives, strategies, execution plans, and measurable results. Applicants must also provide supporting materials such as case studies, creative assets, and performance metrics to demonstrate the effectiveness of their work.</p>

                                 <p>Selection Process:<br> Once the submission period closes, all applications undergo an initial screening by the TOMI Awards committee. This panel of experienced marketing professionals reviews each entry to ensure it meets the eligibility criteria and adheres to the submission guidelines. Entries that pass this preliminary stage move forward to the judging phase.</p>

                                 <p>Judging Process:<br> The judging process is conducted by a distinguished panel of industry experts, comprising seasoned marketers, academicians, and business leaders. The panel evaluates each entry based on several criteria, including creativity, innovation, strategic thinking, execution, and measurable impact. Each judge scores the entries independently to ensure a fair and unbiased evaluation.</p>
                              </div>
                           </div>
                           <div class="col-lg-5 col-md-5 col-12">
                              <div class="process-tab-img">
                                 <img src="<?php echo e(asset('front/images/banner.png')); ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

              </div>
              <div class="tab-pane fade" id="pills-profiles" role="tabpanel" aria-labelledby="pills-profiles-tab">2
                <div class="process-sec-tab">
                  <div class="row mt-5">
              <div class="col-lg-4 col-md-6 col-12 col-padd">
                 <div class="jury-box jury1">
                    <h3>THOMAS<br> CLARCK</h3>
                    <p>Thomas Clark is a dynamic and results-oriented
marketing executive with a proven track record
of delivering impactful campaigns and driving
business growth. With over a decade of
experience in the industry, Thomas has built a
reputation for his strategic vision, creativity, and
ability to execute marketing initiatives that
exceed expectations.</p>
                    <img src="<?php echo e(asset('front/images/jury1.png')); ?>">
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12 col-padd">
                <div class="jury-box jury2">
                    <h3>AYESHA<br> HENDASY</h3>
                    <p>Ayesha Hendasy is a dynamic and visionary
marketing executive with a proven track record
of driving impactful campaigns and delivering
exceptional results. With over 15 years of
experience in the industry, Ayesha has
established herself as a strategic leader with a
keen understanding of market trends and
consumer behavior.</p>
                    <img src="<?php echo e(asset('front/images/jury2.png')); ?>">
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12 col-padd">
                <div class="jury-box jury3">
                    <h3>KHALID<br> SAEED</h3>
                    <p>Khalid Saeed is a visionary marketing leader
renowned for his innovative strategies and
transformative approach to brand management.
With over 10 years of experience in the field,
Khalid has consistently delivered exceptional
results for leading multinational corporations
across diverse industries.</p>
                    <img src="<?php echo e(asset('front/images/jury3.png')); ?>">
                 </div>
              </div>
              
           </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-trans" role="tabpanel" aria-labelledby="pills-trans-tab">
                
                <div class="proccess-tab-inn">
                     <div class="process-tab-main">
                        <div class="row">
                           <div class="col-lg-7 col-md-7 col-12">
                              <div class="process-tab-con">
                                 <p>Transparency in the Selection of TOMI Marketing Awards Winners</p>

                                 <p>The TOMI Marketing Awards are committed to upholding the highest standards of transparency and integrity in the selection of our winners. Our meticulous process ensures that each award recipient is chosen fairly, based on merit and measurable achievements.</p>

                                 <p>Open and Clear Application Process:<br> From the outset, we ensure that the application process is open to all eligible marketing professionals and organizations in Oman. Detailed guidelines and criteria are provided to all applicants, ensuring clarity on what is required for a successful submission. This openness encourages a diverse range of entries, showcasing the full spectrum of talent in the industry</p>

                                 <p>Objective Evaluation Criteria:<br> All submitted entries are evaluated against a predefined set of criteria, including creativity, innovation, strategic execution, and measurable impact. These criteria are clearly communicated to all applicants in advance, ensuring that everyone understands how their work will be judged. This standardized approach guarantees that every entry is assessed on a level playing field.</p>

                                 <p>Independent Judging Panel:<br>
The selection of winners is entrusted to an independent panel of judges comprising
respected experts in the field of marketing. These judges are selected based on their
extensive experience and expertise, ensuring a high level of competence in evaluating the
entries. The judges operate independently of the organizing committee, providing an
unbiased perspective</p>


                              </div>
                           </div>
                           <div class="col-lg-5 col-md-5 col-12">
                              <div class="process-tab-img">
                                 <img src="<?php echo e(asset('front/images/banner.png')); ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

              </div>
            </div>
            </div>
            <div class="jury-con mt-5">
               <p>We are thrilled to unveil the distinguished panel of judges who will preside over the Marketing Excellence Awards in Oman. Each member brings a wealth
of experience and expertise in the field of marketing, ensuring a fair and rigorous evaluation process for the most outstanding marketers in the country.
CREATOMI Award: Recognizing the most specialized and innovative marketing campaigns that push the boundaries of creativity and strategic thinking.
FIRETOMI Award: Presented to emerging talents with exceptional promise and potential in the field of marketing, highlighting the next generation of
leaders and innovators</p>
            </div>
           <div class="row mt-5">
              <div class="col-lg-3 col-md-6 col-12 col-padd">
                 <div class="jury-box jury1">
                    <h3>THOMAS<br> CLARCK</h3>
                    <img src="<?php echo e(asset('front/images/jury1.png')); ?>">
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 col-padd">
                <div class="jury-box jury2">
                    <h3>AYESHA<br> HENDASY</h3>
                    <img src="<?php echo e(asset('front/images/jury2.png')); ?>">
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 col-padd">
                <div class="jury-box jury3">
                    <h3>KHALID<br> SAEED</h3>
                    <img src="<?php echo e(asset('front/images/jury3.png')); ?>">
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="jury-box">
                    <img src="<?php echo e(asset('front/images/banner.png')); ?>">
                 </div>
              </div>
           </div>
</div>
    </div>
 </section>



<section class="participate-wrapp">
   <div class="container">
      <div class="parti-head">
        <div class="logo-side">
                 <img src="<?php echo e(asset('front/images/logo.png')); ?>">
              </div>
         <h4>Participate</h4>
          <div class="parti-con">
            <p>It is important for us to provide all the necessary information to our members. We make all these online information channels available and also the possibility of receiving personalized advice when applying as a participant or member of our organization</p>
            <img src="<?php echo e(asset('front/images/participate.png')); ?>">
          </div>
      </div>
      <div class="row mt-5">
         <div class="col-lg-3 col-md-6 col-12">
            <div class="part-box">
              <div class="icon-img">
               <img src="<?php echo e(asset('front/images/part1.png')); ?>">
               </div>
               <img src="<?php echo e(asset('front/images/part1-but.png')); ?>">
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="part-box">
              <div class="icon-img">
               <img src="<?php echo e(asset('front/images/part2.png')); ?>">
             </div>
               <img src="<?php echo e(asset('front/images/part2-but.png')); ?>">
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="part-box">
              <div class="icon-img">
               <img src="<?php echo e(asset('front/images/part3.png')); ?>">
             </div>
               <img src="<?php echo e(asset('front/images/part3-but.png')); ?>">
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
            <div class="part-box">
              <div class="icon-img">
               <img src="<?php echo e(asset('front/images/part4.png')); ?>">
             </div>
               <img src="<?php echo e(asset('front/images/part4-but.png')); ?>">
            </div>
         </div>
      </div>
      <div class="footer-button mt-5 pt-3">
      <ul>
              <li><a href="#"><i class="far fa-user"></i>Login</a></li>
              <li><a href="#">Register</a></li>
            </ul>
    </div>
   </div>
</section>


<section class="social-media-wrapp">

   <div class="container">

            <div class="social-media-tabs">
              <div class="logo-side">
                 <img src="<?php echo e(asset('front/images/logo.png')); ?>">
              </div>
               <h2>Social Media</h2>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">News</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Media</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Meetings</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
            </div>

      <div class="social-media-bottom">
          <div class="counter-bottom mt-5">
       <div class="row">
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box first-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/smart-era-corporate-life-work-smartly-together-by-creatively-ai-generative.jpg')); ?>">
              </div>
              <h5>Oman Honors Marketing's Finest</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box second-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/arab-employee-celebrating-award.jpg')); ?>">
            </div>
            <h5>Innovation Resigns <br>Supreme</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box third-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/group-arabic-people-engineer.jpg')); ?>">
            </div>
             <h5>Brand Shine at TOMI<br> Ceremony</h5>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 col-padd">
           <div class="count-bottom-box four-box">
            <div class="box-img">
              <img src="<?php echo e(asset('front/images/man-with-glasses-beard-sitting-table-with-laptop-generative-ai.jpg')); ?>">
            </div>
             <h5>Marketing Stars: Oman Celebrates!</h5>
           </div>
         </div>
       </div>
    </div>
      </div>
   </div>
</section>


<section class="sponser-wrapp mt-0 mb-5">
  <div class="container">
    <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12">
        <div class="spons-head">
           <h3>SPONSORS LOGOS</h3>
        </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12">
       <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                  <h5>LOGO</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="spons-logo">
                 <h5>LOGO</h5>
              </div>
            </div>
        </div>
     </div>
  </div>
</div>
</section>
  	 


    <!--=============================================footer top start======================================-->


    <!--=============================================footer top end======================================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/admin.mobbindtechnology.co.in/projects/resources/views/front/static/home.blade.php ENDPATH**/ ?>