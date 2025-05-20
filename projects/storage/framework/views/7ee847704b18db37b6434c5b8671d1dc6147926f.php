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




 
<?php $__currentLoopData = App\models\Slider::orderBy("id","desc")->limit(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="hero-section position-relative min-vh-100 kp-banner-hight background-video-overly flex-column d-flex justify-content-center">

<?php if($c->image): ?>

            <video poster="<?php echo e(asset($c->image)); ?>" class="fit-cover w-100 h-100 position-absolute z--1" autoplay="" muted="" loop="" id="myVideo">
                <source src="<?php echo e($c->link); ?>" type="video/mp4">
            </video>  
<?php else: ?>
 
<?php endif; ?>

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="hero-content-left text-white text-center">
                            <!-- <h1 class="text-white display-4 font-weight-bolder">Speak To A Lead Specialist Today & Ask About Our Current Promotions!! <br> Call Toll Free: 585-496-7020</h1> -->
                            <?php echo $c->description; ?>

                    
                        </div>
                    </div>
                </div>
            </div> 
        </section>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       

<!--================================= main banner end=============================-->

<section class="banner-bottom-wrap wow fadeInDown  animated" data-wow-delay="200ms">
   <div class="banner-bottom-inner banner-point-head">
<!--     <h5>WHAT TYPE of LEADS Does Smart Leadz Offer?</h5> -->
      <div class="owl-carousel" id="banner-bottom">

<?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="item">
           <div class="banner-bot-icon">
              <!-- <a href="<?php echo e(url('services/'.$c->seo_url)); ?>/"></a> -->
                <h4><?php echo e($c->name); ?></h4>
           </div>
         </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



      </div>
   </div>
</section>




<section class="home-about-wrpp">
   <div class="container-fluid">
      <div class="row-div">
        <div class="row">
           <div class="col-lg-6 col-md-12 col-12 pds">
              <div class="about-vid-sec about-vid-new-sec wow fadeInDown  animated" data-wow-delay="800ms">
                 <img src="<?php echo e(asset('front/images/young-programmers.jpg')); ?>">
                 <div class="video-paly-sec">
                <a data-fancybox="" href="#VisaChipCardVideo" class="play-head-button"><img src="http://localhost/smartlead/uploads/uploads/6486fef098b3f.png"></a>
              </div>
              </div>
              <video id="VisaChipCardVideo"  controls style="display:none;">
                  <source src="<?php echo e(asset('front/video/banner.mp4')); ?>" type="video/mp4">
                </video>
           </div>
<!--  -->
             <?php echo $data->shortDescription; ?>

<!--  -->
        </div>
        
        
        
   
      </div>
   </div>
</section>



<section class="our-serv-wrapp">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-5 col-md-12 col-12">
           <div class="our-serv-left">
              <h2 class="wow fadeInDown  animated" data-wow-delay="200ms">Our Services</h2>
<p class="wow fadeInDown  animated" data-wow-delay="200ms"><b>A full spectrum marketing firm offering:</b></p>
<ul class="wow fadeInDown  animated" data-wow-delay="200ms">

<?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->where("publish","published")->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($c->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</ul>

 

            
           </div>
         </div>
         <div class="col-lg-7 col-md-12 col-12">
            <div class="our-serv-rigth">


                <div class="owl-carousel wow fadeInDown  animated" data-wow-delay="800ms" id="serv-slider-sec">
 <!-- <a href="<?php echo e(url('services/'.$c->seo_url)); ?>/"></a> -->
<?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><img src="<?php echo e(asset($c->image)); ?>"></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-12">
           <div class="our-serv-left " id="gaurav-animation-data">
             
              <a href="<?php echo e(url('contact-us')); ?>" class="wow bounce animated" data-wow-delay="200ms">Contact Now <img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></a>
           </div>
         </div>
        
      </div>
   </div>
</section>




<section class="testimonial-wrapp">
   <div class="test-main" style="background-image: url(<?php echo e(asset('front/images/testi-back.jpg')); ?>;">
      <div class="container">
        <div class="row">
           <div class="col-lg-8 col-md-12 col-12">
             <div class="testimonial-left">
                <h3 class="wow fadeInDown  animated" data-wow-delay="200ms">Benefits of a Smart Lead</h3>
                <ul>

<?php $__currentLoopData = App\Models\Deal::orderBy("id","desc")->where("publish","published")->where("is_home","true")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                
<li><?php echo e($c->title); ?></li>


 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </ul>
                
             </div>
           </div>
           <div class="col-lg-4 col-md-12 col-12">
              <div class="testi-right">
                 <div class="owl-carousel" id="testimonial-slider">




<?php $clients=App\Models\Testimonial::orderBy("id","desc")->first(); ?>
<?php if($clients): ?>  

<?php $__currentLoopData = App\Models\Testimonial::orderBy("id","desc")->where("status","true")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item">
                      <div class="testimonial-box">
                          <ul>
<?php for($i = 1; $i <= 5; $i++): ?>
<?php if($i <= $c->score): ?>

                            <li><i class="fas fa-star"></i></li>
 <?php endif; ?>
<?php endfor; ?>      
                          </ul>
                          <p><?php echo e($c->message); ?></p>
                          <div class="author">
                             <img src="<?php echo e(asset($clients->image)); ?>">
                             <div class="author-detail">
                               <h4><?php echo e($c->name); ?> </h4>
                               <p><?php echo e($c->profile); ?> </p>
                             </div>
                          </div>
                      </div>
                    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endif; ?>





                 </div>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
             <div class="testimonial-left" id="gaurav-testimonial-left-to-right">
                
                <a href="#" class="wow fadeInDown  animated" data-wow-delay="800ms">View More <img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></a>
             </div>
           </div>
        </div>
      </div>
   </div>
</section>



<!-- start -->

<section class="wheel-section-wrapp">
   <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 col-12">
        <div class="wheet-content-div ">
            <?php 
            $ar=[
                    "idvertical1"=>[
                            "title"=>"Mortgage Leads",
                            "paragraph1"=>"Partner with a 20 year veteran of the Mortgage Lead Generation Industry! Our leads are generated from borrowers online right now keyword searching for assistance.",
                            "paragraph2"=>"The goal here is to provide higher quality targeted leads while lowering your cost per funded loan and cutting down on 'busy work'. These are still leads not loans and my intention isn't to suggest these leads walk on water but rather helping your team work smarter not harder. Making 300 calls to close 4 loans is not only cumbersome but it is a drain on morale. I find that when working an exclusive lead generated from quality traffic where the homeowner knows they have opt-in for a call and not baited in with free offers or teaser rates that do not exist the overall success rate speaks for itself.",
                        ],
                    "idvertical2"=>[
                            "title"=>"Addiction / Rehab",
                            "paragraph1"=>"If you want to keep your beds full and grow your drug rehab organization, the somewhat-unfortunate truth is you’ve got to “pay to play” to some degree. That’s not necessarily a bad thing, though, as your investment can yield a substantial return.",
                            "paragraph2"=>"One of the oldest digital marketing channels is still one of the most fruitful, so long as you do it right. Consumers still check their email inboxes as often as ever, so you have the opportunity to hit them with personalized messages that they will actually read. The trick is to build up your contact list before you spend excessive time on crafting each email. This is where Addiction-Rep can make a difference.",
                        ],
                    "idvertical3"=>[
                            "title"=>"Insurance",
                            "paragraph1"=>"We provide leads as a back-end lead publisher to other insurance lead vendors. In fact, it was brought to my attention that you might be buying leads currently and going through a broker/middleman. It’s a sure bet we can provide a higher quality lead at a lower cost. ",
                            "paragraph2"=>"While it is a tough time for family and friends who lose a loved one, an agent can make the loss a little easier by providing quality and affordable service. Agents looking for a final expense insurance leads want first-rate service to be at the top of their list for prospective clients. The popularity of final expense insurance has increased in recent years as individuals and families look for both a dignified and affordable way to deal with the inevitable.",
                        ],
                    "idvertical4"=>[
                            "title"=>"Solar",
                            "paragraph1"=>"For solar energy installers looking to expand, we can help you find new customers and grow your business at an effective ROI.  We know how much time and effort it takes marketing to the end consumer – supplement your own internal efforts or save yourself the effort entirely with SmartLeads Media. Our Solar Lead Machine works 24/7 to ensure that you get a consistent supply of high-quality solar leads where you work.",
                            "paragraph2"=>"Consumer Traffic: Our network of educational websites and content educate consumers nationwide about solar energy and energy efficiency. We use organic search engine capability, keyword collections and our national presence enable our properties on the web to rank higher in search results. That’s how we reach more consumers than our partners can independently.",
                        ],
                    "idvertical5"=>[
                            "title"=>"CGX Cancer Screening",
                            "paragraph1"=>"To find folks interested in receiving a Free test from Medicare part B, we use Conversational Artificial Intelligence calls. Our Special Sauce is the data. We tend to be very creative when identifying propective customers for these tests. But for sure, they all have Medicare Part B. Artificial Intelligence is a term that is almost always misunderstood. Ours is Conversational. We build custom AI for every campaign. Once the prospective customer answers their phone, a voice lets them know that there is a free test available. The AI leads them through a brief series of yes / no questions. If they say no, we thank them for their time. If they say yes, they get transferred to you. Your buffer lets you get rid of the tire kickers. From there it’s up to you to close the deal! ",
                            "paragraph2"=>"AI-Transfers (Initial Order: 100 Exclusive calls; comes w/ applicable call-timer buffer for quality assurance) ",
                        ],
                    "idvertical6"=>[
                            "title"=>"DME",
                            "paragraph1"=>"Medicare Part B (Medical Insurance) covers medically necessary durable medical equipment (DME) if your doctor prescribes it for use in your home.",
                            "paragraph2"=>"Medicare will only cover your DME if your doctors and DME suppliers are enrolled in Medicare. Doctors and suppliers have to meet strict standards to enroll and stay enrolled in Medicare. If your doctors or suppliers aren’t enrolled, Medicare won’t pay the claims submitted by them, including hospital bed coverage. ",
                        ],
                    "idvertical7"=>[
                            "title"=>"Debt Settlement",
                            "paragraph1"=>"SmartLeads Media's marketing campaigns allow you to target debt holders with a maximum amount of revolving credit card debt, open trade lines, a declining sub-prime history and a strong likelihood of major and minor credit derogatory without the use of farmed or co-reg data.",
                            "paragraph2"=>"Through dynamic web-based advertising and content-rich advertorials, we offer the quality leads you need to succeed and stay on budget. All of our leads are generated from highly targeted websites that are designed to target customer initiated applications of motivated borrowers who are searching the internet for debt settlement.",
                        ],
                    "idvertical8"=>[
                            "title"=>"Student Loan Consolidation",
                            "paragraph1"=>"Fresh leads for student loan debt or consolidation are generated from top tier internet traffic, through dynamic web-based advertising and content-rich advertorials, we offer the quality leads you need to succeed and stay on budget. All of our leads are generated from highly targeted websites that are designed to target customer initiated applications of motivated borrowers who are searching the internet for student loan consolidation.",
                            "paragraph2"=>"Given the amount of college student debt in our country and years of new grads entering the workplace year after year, it’s no surprise that such an industry exists today. For firms that are legitimately trying to help students there are many options for fresh leads.",
                        ],
                    "idvertical9"=>[
                            "title"=>"Commercial Loans",
                            "paragraph1"=>"SmartLeads Media offers commercial loan leads in every state in the nation with customized filters to target the type of loans you want to write. Offering but not limited to: New purchase, refinance, and construction of commercial properties.",
                            "paragraph2"=>"Through dynamic web-based advertising we offer the quality leads you need to succeed and on budget. All of our leads are generated from highly targeted websites that are designed to target customer initiated applications of motivated borrowers who are searching the internet for commercial financing.",
                        ],
                    "idvertical10"=>[
                            "title"=>"Merchant Cash Adv",
                            "paragraph1"=>"We have both exclusive real-time posted leads generated from search traffic, advertorials, native ads, some banner placement on specific B2B sites. We also have some inbound web-calls going to our call center and the only outbound calling we do are on tcpa compliant opt-in leads generated within the last 3 days. ",
                            "paragraph2"=>"All live-transfers are TCPA compliant and come with a guaranteed 1 or 2 minute billable call-timer. Thus we provide up to 2 minutes for you to judge, assess, and qualify each lead before its added to your campaign. This dramatically reduces any invalid leads and puts only viable and qualified candidates in your hands!",
                        ]



                
                ];
            
            ?>
            
            <div class="wheel-content-inn" id="idvertical0">
               <h2>Vertical Markets</h2>
               <p >Leads generated over the weekend convert 20% better than weekday leads and should be a part of your overall marketing plan. What’s more, if weekend leads are worked with the same intensity as their weekday counterparts they have an even higher chance of converting. This is according to a new study conducted which looked at the performance of nearly a quarter million leads over a one-year period.</p>
               <p>If a company works weekend leads with the same intensity as weekday leads, the weekend generated leads perform even better. "If a weekend lead is contacted it converts 32% better, if it is quoted 51% better and if it is contacted in the first 5 minutes, it converts 100% better than weekday leads." Stated Joshua Conklin, Co-Founder and Lead Publisher at SmartLeads Media. When asked to speak of the conversion ratios on conventional and FHA refinance internet leads versus HARP or VA Streamline leads he said, "the various loan types do have a slight variance of 1-3% in conversion, however, the bigger factor is the state the loan is in."</p>
                   <a href="#" >Read More <img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></a>
            </div>
            <?php foreach($ar as $id=>$a):?>
            
            <div class="wheel-content-inn d-none" id="demo-<?= $id?>" data-id="<?= $id?>">
               <h2 ><?= $a['title']?></h2>
               <p ><?= $a['paragraph1']?></p>
               <p ><?= $a['paragraph2']?></p>
                   <a href="#" >Read More <img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></a>
            </div>
            <?php endforeach;?>
            
            
        </div>

      </div>
      
      <div class="col-lg-5 col-md-12 col-12">
        <div class="wheel-main-div wow fadeInDown  animated" data-wow-delay="600ms">
          <div class="wheel-html">
                <button id="spin" class="idvertical0"><img src="<?php echo e(asset('front/images/e_logo.png')); ?>"></button>
                <span class="arrow"></span>
              <div class="container">

                  <a href="javascript:;" class="common-anchor-data-demo" id="idvertical1" title="Technology development of software and hardware with forin division">
                    <div class="one gaurav-custom-class-data" style="background-color: #f5b818;">
                      <span class="cont">
                         <p>Mortgage Leads</p>
                      </span>
                    </div>
                  </a>
                  <a href="javascript:;" class="common-anchor-data-demo" id="idvertical2" title="Video: Lock on-Live">
                    <div class="two  gaurav-custom-class-data" style="background-color: #ef7b27;">
                      <span class="cont">
                         <p>Addiction / Rehab</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical3" title="Social:Network-RealCommunity">
                    <div class="three gaurav-custom-class-data" style="background-color: #c53794;">
                      <span class="cont">
                         <p>Insurance</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical4" title="Logistic and Transport:WFI-BUS">
                    <div class="four gaurav-custom-class-data" style="background-color: #7c52a0;">
                      <span class="cont">
                         <p>Solar</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical5" title="Fintech: With for money">
                    <div class="five gaurav-custom-class-data" style="background-color: #209fb9;">
                      <span class="cont">
                         <p>CGX Cancer Screening</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical6" title="Editorial: with for Blog">
                    <div class="six  gaurav-custom-class-data" style="background-color: #ed1d59;">
                      <span class="cont">
                         <p>DME</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical7" title="Radio:WFI.FM">
                    <div class="seven gaurav-custom-class-data" style="background-color: #273f99;">
                      <span class="cont">
                         <p>Debt Settlement</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical8" title="Commerce: E-T-Commerce">
                    <div class="eight gaurav-custom-class-data" style="background-color: #0e783c;">
                      <span class="cont">
                         <p>Student Loan Consolidation</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical9" title="Marketing: Sponsorbing">
                    <div class="nine gaurav-custom-class-data" style="background-color: #8dd3d3;">
                      <span class="cont">
                         <p>Commercial Loans</p>
                      </span>
                    </div>
                  </a>
                  <a  href="javascript:;" class="common-anchor-data-demo" id="idvertical10" title="Music:Sound on-Live">
                    <div class="ten gaurav-custom-class-data" style="background-color: #7c112b;">
                      <span class="cont">
                         <p>Merchant Cash Adv</p>
                      </span>
                    </div>
                  </a>
                           </div>
                      </div>
        </div>
      </div>
      </div>
   </div>
</section>








<!-- <section class="home-about-wrpp mt-5">
   <div class="container-fluid">
      <div class="row-div">
        <div class="row">
           <div class="col-lg-6 col-md-12 col-12 pds">
              <div class="about-vid-sec wow fadeInDown  animated" data-wow-delay="800ms">
                 <img src="images/banner_02.png">
              </div>
           </div>
           <div class="col-lg-6 col-md-12 col-12 pds">
              <div class="about-right-div">
                <div class="about-right-inner">
                 <h3 class="wow fadeInDown  animated" data-wow-delay="200ms">Ask about our new HARP Mortgage Lead Campaigns</h3>
                 <div class="about-con-right">
                    <div class="about-con-inner">

                       <p class="wow fadeInDown  animated" data-wow-delay="400ms">Stop wasting money on leads that don’t convert. Speak to qualified and motivated borrowers today. Our internet leads are generated from prospects online right now key-word searching for a home loan and sent to you immediately.</p>
                      <ul>
                        <li>Set your own budget</li>
<li>Statewide targeting</li>
<li>No set-up fees, contracts or risks</li>
<li>100% Exclusive lead platform & Semi-exclusive leads</li>
<li>Target conventional Refinance & FHA, HARP 2.0 and VA loans</li>
<li>Above average contact & conversion ratios</li>
<li>Reach consumers who are ACTIVELY searching for mortgages</li>
<li>Excellent & Good credit borrower only!</li>
<li>Dedicated Account Manager to ensure success</li>

                      </ul>
                      <p><b>EXCLUSIVE LEADS WITH A UNIQUE LEAD VERIFICATION
SYSTEM -&- A LIVE CALL TRANSFER FEATURE!
</b></p>

                    </div>
                 </div>
              </div>
              </div>
           </div>
        </div>
        
        
        
   
      </div>
   </div>
</section> -->




<section class="offer-wrapp">
  <div class="container">
     <div class="offer-content-div">
        <!--  <h5>Limited Time Offer - Earn 5 FREE Leads</h5>
<h6>When you Register with Smart Leadz & Purchase Any 50 Lead Trial Campaign!</h6>
<p>Connecting You With More Customers is Our Business!</p> -->

<h5>FREE Lead Mailbox™ Account With Every Order</h5>
<p>Smart Leadz cares about your ROI and we want to prove that are leads will get you the best results and the lowers cost per acquisition.</p>


     </div>
  </div>
</section>










<section class="home-about-wrpp">
   <div class="container-fluid">
      <div class="row-div">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-12 pds">
              <div class="about-right-div">
                <div class="about-right-inner home-contact">
                 <h3 class="wow fadeInDown  animated" data-wow-delay="200ms">Contact Us</h3>
                 <div class="about-con-right home-contact-inner">
                    <div class="about-con-inner">
                       <h2 class="wow fadeInDown  animated" data-wow-delay="400ms">For Customer Support and Query, Send us a note.</h2>

                        <?php echo Form::open(["route"=>"contactPost"]); ?>

                          <div class="row">
                          <div class="form-group col-lg-6 col-md-6 col-12">
                               <input type="text" name="name" class="form-control" placeholder="Full name" required="required">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-12">
                               <input type="text" name="company_name" class="form-control" placeholder="Company name" required="required">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-12">
                               <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-12">
                               <input type="text" name="mobile" class="form-control" placeholder="Phone Number" required="required">
                             </div>
                             <div class="form-group col-lg-12 col-md-12 col-12">
                               <textarea class="form-control" name="message" placeholder="How Can We Help?" required="required"></textarea>
                             </div>
                             
                             <div class="form-group col-lg-12 col-md-12 col-12">
                               <!-- <a href="<?php echo e(route('contactPost')); ?>">Submit<img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></a> -->
                             </div> 

                             <div class="form-group col-lg-12 col-md-12 col-12">

                                <a href=""><button class="btn btn-contact-form">Send Message<img src="<?php echo e(asset('front/images/button-icon.png')); ?>"></button></a>
                            </div> 

                          </div>
                        </form>
 





                    </div>
                 </div>
              </div>
              </div>
           </div>
           <div class="col-lg-6 col-md-12 col-12 pds">
              <div class="about-vid-sec wow fadeInDown  animated" data-wow-delay="800ms">
                 <div class="owl-carousel" id="contact-home">
                    <div class="item">
                       <img src="<?php echo e(asset('front/images/contact.jpg')); ?>">
                    </div>
                    <div class="item">
                       <img src="<?php echo e(asset('front/images/contact.jpg')); ?>">
                    </div>
                    <div class="item">
                       <img src="<?php echo e(asset('front/images/contact.jpg')); ?>">
                    </div>
                    <div class="item">
                       <img src="<?php echo e(asset('front/images/contact.jpg')); ?>">
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </div>
   </div>
</section>



 
<?php $clients=App\Models\OurClient::orderBy("id","desc")->first(); ?>
<?php if($clients): ?>  
<section class="partner-logo-wrap">
   <div class="container">
      <div class="our-partner-head">
         <h3 class="wow fadeInDown  animated" data-wow-delay="200ms">Our Partners</h3>
      </div>
       <div class="owl-carousel wow fadeInDown  animated" data-wow-delay="500ms" id="partner-logo">

 <?php $__currentLoopData = App\Models\OurClient::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="partner-img">
               <img src="<?php echo e(asset($c->image)); ?>">
            </div>
          </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
    
       </div>
   </div>
</section>
<?php endif; ?>

 
 


<?php $__env->startSection("js"); ?>
<script>
    
    
    var i=10;
    var i1=10;
    var i11=10;
        
        const div = document.querySelector('#gaurav-animation-data');
      
        const div11 = document.querySelector('#gaurav-testimonial-left-to-right');
        
        jQuery(window).scroll(function () {
           const {
              top: t,
              left: l
            } = div.getBoundingClientRect();
          
           const {
              top: t11,
              left: l11
            } = div11.getBoundingClientRect();
            
            //console.log(div1.getBoundingClientRect());
            if(t<550   && t>100){
                if(l<1000){
                    document.querySelector('#gaurav-animation-data').style.marginLeft   =(99+i)+"px";
                    i=i+30;
                }else{
                    i=i-30;
                }
            }else{
                i=10;
                document.querySelector('#gaurav-animation-data').style.marginLeft   ="99px";
            }
            
            if(t11<550   && t11>100){
                if(l11<1000){
                    document.querySelector('#gaurav-testimonial-left-to-right').style.marginLeft   =(99+i11)+"px";
                    i11=i11+30;
                }else{
                    i11=i11-30;
                }
            }else{
                i11=10;
                document.querySelector('#gaurav-testimonial-left-to-right').style.marginLeft   ="99px";
            }
            
        
            
        });


    </script>
    
      <script>
        var i1=1;
        var style_color='';
        var style_first_target="";
        var length=$(".wheel-content-inn").length
        var timer =setInterval(function(){
          // console.log("total length:-"+length+" I value:-"+i1);
          

          i1++;
          if(i1==length){
            i1=1;
          }
          $(".wheel-content-inn").addClass("d-none");
          $(".wheel-content-inn").eq(i1).removeClass("d-none");
           // idvertical1
           
                if(style_first_target!=""){
                    style_first_target.attr("style",style_color);
                }
                id=$(".wheel-content-inn").eq(i1).data("id");
                style_color=$("#"+id).find(".gaurav-custom-class-data").attr("style");
                $("#"+id).find(".gaurav-custom-class-data").attr("style","background-color:#262727!important");
                style_first_target=$("#"+id).find(".gaurav-custom-class-data");
                console.log(id)
            
        },5000);

          $(document).on("click",".common-anchor-data-demo",function(){
             var id_data=$(this).attr("id");
             $(".wheel-content-inn").addClass("d-none");
             $("#demo-"+id_data).removeClass("d-none");
             clearInterval(timer);
              if(style_first_target!=""){
                    style_first_target.attr("style",style_color);
                }
          });
          
          
          
          $(document).on("click",".idvertical0",function(){
                 $(".wheel-content-inn").addClass("d-none");
              $("#idvertical0").removeClass("d-none");
              clearInterval(timer);
               if(style_first_target!=""){
                    style_first_target.attr("style",style_color);
                }
          });
      </script>
<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>


 
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\subsidy-pro\projects\resources\views/front/static/home.blade.php ENDPATH**/ ?>