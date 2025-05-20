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
<?php $__env->startSection('css'); ?>
    <style>
        @media (max-width: 767px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }

			.home-slider h2 {
            color: white;font-family:GothamBold;;
            margin: 0px 0px 40px;
            text-align: center;
            font-size:40px;
            line-height:18px;
            font-weight: 400;
            letter-spacing: -2px;
        }
		.home-slider h3 {
            color: white;font-family:GothamBold;;
            margin: 0px 0px 40px;
            text-align: center;
            font-size:20px;

            font-weight: 400;
            letter-spacing: -2px;
        }

        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }
        .home-slider {
            position: absolute;
            font-family:GothamBold;
            left: 50%;top:50%;
            transform: translate(-50%, -50%);
            max-width: 99%;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            z-index: 5;
            pointer-events: none;
        }
        .home-slider h2 {
            color: white;font-family:GothamBold;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 64px;

            font-weight: Bold;;
            letter-spacing: -2px;
        }

		 .home-slider h3 {
            color: white;font-family:GothamBold;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 44px;

            font-weight: 400;
            letter-spacing: -2px;
        }
        .navbar-collapse .footer-button{
             /*
             margin-top: 0px !important;
             */

        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

        /* RESETS */


        /* TIMER STYLES */
        .timeContainer {
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;font-family:GothamBold;
        }


.counter-wrapperx {  background: #413839;}




        .timeContainer .wrapper {
            width: 800px;
            padding: 20px;
            max-height: 400px;
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .timeContainer .wrapper div {
            color: #ccc;
            text-align: center;
            width: 24%;
            height: 150px;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .timeContainer .wrapper div:first-child{
            background: #454545;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(2){
            background: #00A3D0;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(3){
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div:last-child{
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div h2 {
            font-size: 4.4rem;
            font-family:GothamBold;
        }

        .circleDiv {
            position: fixed;
            z-index: -1;
            top: calc(50% - 237px);
            left: calc(-50% + 474px);
            width: 474px;
            height: 474px;
            border-radius: 100%;
            border: 6px dashed #00A3D0;
            animation: rotatingCircle infinite linear 60s;
        }

        @keyframes rotatingCircle {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* MOUSE TRAIL STYLE */
        #cursor {
            position: fixed;
            top: 0;
            left: 0;
            background-color: transparent;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 100%;
            pointer-events: none;
            user-select: none;
            backdrop-filter: invert(100%);
        }
    </style>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>
    <?php $name=$data->name; ?>

<!--banner -->
   <section class="banner-wrapper" style="background-color: #ed7300 !important;">

  	 <div class="container" style="background-color: #ed7300 !important;">
  	 	<div class="row" id="Wrap" style="background-color: #ed7300 !important;">
            <div class="home-slider">


<h2>Let Oman’s Creativity Inspire  </h2><!--
<h3>Oman's First-Ever Marketing Excellence Awards<br>Doesn't Oman deserve its own marketing awards?-->

</h3>

            </div>
  	 

  	 
  	 </div>
  	 </div>
  	  
  </section>
  <!-- counter -->
<section class="counter-wrapper">
    <div class="container">
      <div class="row">

          <!-- MOUSE TRAIL -->


          <!-- ROTATING CIRCLE-->


          <!-- TIMER -->
          <section class="timeContainer">
              <div class="wrapper" style="">
                  <div class="days" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="days">DD</h2>DAYS
                  </div>
                  <div class="hours" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="hours">HH</h2>HOURS
                  </div>
                  <div class="minutes" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="minutes">MM</h2>MINUTES
                  </div>
                  <div class="seconds" style="    background-image: radial-gradient(ellipse at 50% 50%, rgba(243, 34, 114, 1) 0%, rgba(171, 21, 103, 1) 100%);
    background-color: #7967ff;    transition: background 0.5s, border 0.5s, border-radius 0.5s, box-shadow 0.5s;">
                      <h2 id="seconds">SS</h2>SECONDS
                  </div>
              </div>
          </section>




      </div>

    <div class="counter-bottom mt-5 d-none">
       <div class="row">
           <?php
           $i=1;
           ?>
           <?php $__currentLoopData = \App\Models\WelcomePackage::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

if($i==1){
    $color='first-box';
}elseif($i==2){
    $color='second-box';
}elseif ($i==3){
        $color='third-box';

}elseif ($i==4){
           $color='four-box';
 $i=0;
}
$i++;
?>

               <div class="col-lg-3 col-md-6 col-12 col-padd">
                   <div class="count-bottom-box <?php echo e($color); ?>">
                       <div class="box-img">
                           <img src="<?php echo e(asset($c->image)); ?>">
                       </div>
                       <h5 class="text-center"><?php echo e($c->name); ?></h5>
                   </div>
               </div>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </div>
    </div>

    </div>
</section>



<!-- about -->
    <section class="counter-wrapperx" id="about-tomi">
        <div class="container">
        <!--    <h2 class="text-white" style="padding-top:20px;"><?php echo e($data->description); ?></h2> -->
    <div class="proccess-tab-inn">


        <div class="process-tab-main">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-12 " >
                 <div class="myhome_big">  <?php echo strip_tags($data->shortDescription); ?> </div>
                    <div class="process-tab-con">
                        <?php echo $data->mediumDescription; ?>


                    </div>
                </div>
                <div class="col-lg-1 col-md-9 col-12">
                    <div class="myimage">
                        <img src="<?php echo e(asset($data->image)); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
<!-- video -->
    <section class="about-home" id="video">
        <div class="about-home-main">
            <div class="container">
                <div class="home-abt-mid pt-5 mt-2">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <div class="about-side-img">
                                <div class="first-img">
                                    <a href="<?php echo e(url('/')); ?>">   <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/logo.png'); ?>"></a>
                                </div>
                                <div class="second-img">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="about-video">
                                <iframe width="100%" height="415" src="<?php echo e($data->cta_description); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="jury-wrapp" id="jury">
        <div class="jury-inner-wrapp">
            <div class="container">
                <div class="social-media-tabs jury-tab">
                    <div class="logo-side">

                    </div>
                    <h2>Judging</h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profiles-tab" data-bs-toggle="pill" data-bs-target="#pills-profiles" type="button" role="tab" aria-controls="pills-profiles" aria-selected="true" style="font-family:GothamBold !important; font-size:24px !important;text-transform: capitalize!important;">Profiles</button>
                        </li>
						<li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-proccess-tab" data-bs-toggle="pill" data-bs-target="#pills-proccess" type="button" role="tab" aria-controls="pills-proccess" aria-selected="false" style="font-family:GothamBold !important; font-size:24px !important;text-transform: capitalize!important;">Process</button>
                        </li>

                        <!--<li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trans-tab" data-bs-toggle="pill" data-bs-target="#pills-trans" type="button" role="tab" aria-controls="pills-trans" aria-selected="false">Transparency</button>
                        </li>-->
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade  " id="pills-proccess" role="tabpanel" aria-labelledby="pills-proccess-tab">

                           <div class="proccess-tab-inn">
                                <div class="process-tab-main active">
                                    <div class="row">
<!--                                         <?php echo $data->longDescription; ?>

-->                                         <div class="col-lg-12 col-md-12 col-12">
                                            <div class="process-tab-con">
                                                <?php echo $data->longDescription; ?>

                                            </div>
                                        </div>
<!--                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/footer-logo.png'); ?>">
                                            </div>
                                        </div>
-->                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show active" id="pills-profiles" role="tabpanel" aria-labelledby="pills-profiles-tab">
                                <div class="process-tab-main active" style="display:inline;">
                                 <div class="row">
<!--                                         <?php echo $data->longDescription; ?>

-->                                         <div class="col-lg-12 col-md-12 col-12">
                                            <div class="process-tab-con">
                                                <p style="text-align:center;">An independent panel of respected marketing experts, selected for their expertise, is responsible for choosing the winners.
											 This panel operates independently from the organizing committee, ensuring unbiased and competent evaluations</p>
                                            </div>
                                        </div>
<!--                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/footer-logo.png'); ?>">
                                            </div>
                                        </div>
-->                                    </div>

                                                <div class="row mt-5">
                    <?php
                        $j=1;
                    ?>

                    <?php $__currentLoopData = \App\Models\OurTeam::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
                            $name=$c->name;
                            $arr_name=explode(" ",$name);
                               if($j==1){
                                   $color='jury1';
                               }elseif($j==2){
                                   $color='jury2';
                               }elseif ($j==3){
                                       $color='jury3';
         $j=0;
                               }
                               $j++;
                        ?>
                        <div class="col-lg-4 col-md-6 col-12 col-padd">
                            <div class="jury-box <?php echo e($color); ?>  jur-dev-sty">
                                <h3><?php echo e($arr_name[0]??''); ?><br> <?php echo e($arr_name[1]??''); ?></h3>
                                <img src="<?php echo e(asset($c->image)); ?>">
                                <div class="banner-social footer-social">

                                    <ul>
                                        <?php if($c->facebook): ?>
                                            <li><a  target="_blank" href="<?php echo e($c->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->instagram): ?>
                                            <li><a  target="_blank" href="<?php echo e($c->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->twitter): ?>
                                            <li><a  target="_blank" href="<?php echo e($c->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->linkedin): ?>
                                            <li><a  target="_blank" href="<?php echo e($c->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                            </div>
                        </div>
<!--                        <div class="tab-pane fade" id="pills-trans" role="tabpanel" aria-labelledby="pills-trans-tab">

                            <div class="proccess-tab-inn">
                                <div class="process-tab-main">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-12">
                                            <div class="process-tab-con">
                                                <?php echo $data->longDescriptionthree; ?>


                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="process-tab-img">
                                                <img src="<?php echo asset($setting_data['footer_logo'] ?? 'images/footer-logo.png'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
-->                    </div>
                </div>
               <!-- <div class="jury-con mt-5">
                    <?php echo $data->longDescription; ?>

                </div>
                <div class="row mt-5">
                    <?php
                        $j=1;
                    ?>

                    <?php $__currentLoopData = \App\Models\OurTeam::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
                            $name=$c->name;
                            $arr_name=explode(" ",$name);
                               if($j==1){
                                   $color='jury1';
                               }elseif($j==2){
                                   $color='jury2';
                               }elseif ($j==3){
                                       $color='jury3';
         $j=0;
                               }
                               $j++;
                        ?>
                        <div class="col-lg-3 col-md-6 col-12 col-padd">
                            <div class="jury-box <?php echo e($color); ?>  jur-dev-sty">
                                <h3><?php echo e($arr_name[0]??''); ?><br> <?php echo e($arr_name[1]??''); ?></h3>
                                <img src="<?php echo e(asset($c->image)); ?>">
                                <div class="banner-social footer-social">
                                    <ul>
                                        <?php if($c->facebook): ?>
                                            <li><a href="<?php echo e($c->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->instagram): ?>
                                            <li><a href="<?php echo e($c->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->twitter): ?>
                                            <li><a href="<?php echo e($c->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($c->linkedin): ?>
                                            <li><a href="<?php echo e($c->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>-->
            </div>
        </div>
    </section>


























<section class="participate-wrapp" id="participate">
   <div class="container">
      <div class="parti-head">

         <h4>Participate</h4>

          <div class="parti-con" style="text-align:center;">
              <?php echo $data->longDescriptionfour; ?>


          </div>
      </div>
      <div class="row mt-5">
          <?php $__currentLoopData = \App\Models\Location::where('publish','published')->orderBy('ordering','asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-lg-3 col-md-6 col-6">
            <div class="part-box">
              <div class="icon-img">
               <img src="<?php echo e(asset($c->image)); ?>">
               </div>
                <?php if($c->seo_url=='company-login'): ?>
                    <?php if(!\Illuminate\Support\Facades\Auth::guard('employee')->user()): ?>
                        <a href="<?php echo e(url($c->seo_url)); ?>"> <img src="<?php echo e(asset($c->bannerImage)); ?>" alt="<?php echo e($c->title); ?>"></a>
                    <?php else: ?>
                        <a href="<?php echo e(url("company-ads")); ?>"> <img src="<?php echo e(asset($c->bannerImage)); ?>" alt="<?php echo e($c->title); ?>"></a>
                    <?php endif; ?>
                <?php elseif($c->seo_url=='category'): ?>
                    <?php if(!\Illuminate\Support\Facades\Auth::guard('voter')->user()): ?>
                        <a href="<?php echo e(url('vote-now')); ?>"> <img src="<?php echo e(asset($c->bannerImage)); ?>" alt="<?php echo e($c->title); ?>"></a>
                    <?php else: ?>
                        <a href="<?php echo e(url($c->seo_url)); ?>"> <img src="<?php echo e(asset($c->bannerImage)); ?>" alt="<?php echo e($c->title); ?>"></a>
                    <?php endif; ?>

                    <?php else: ?>
                    <a href="<?php echo e(url($c->seo_url)); ?>"> <img src="<?php echo e(asset($c->bannerImage)); ?>" alt="<?php echo e($c->title); ?>"></a>
                <?php endif; ?>

            </div>
         </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="footer-button mt-5 pt-3">
      <ul>
          <?php if(!\Illuminate\Support\Facades\Auth::guard('employee')->user()): ?>
             
          <?php endif; ?>
            </ul>
    </div>
   </div>
</section>










    <!--=============================================footer top start======================================-->


    <!--=============================================footer top end======================================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>
    <script>
        $(document).ready(function() {
            // MOUSE TRAIL JS GSAP3
            document.addEventListener("mousemove", (ev) => {
                const x = ev.clientX,
                    y = ev.clientY;

                // lag cursor behind mouse
                gsap.to("#cursor", {
                    duration: (i) => 0.2 + i/10,
                    x,
                    y
                });
            });

// TIMER JS
            const __days = document.querySelector("#days")
            const __hours = document.querySelector("#hours")
            const __minutes = document.querySelector("#minutes")
            const __seconds  = document.querySelector("#seconds")

// Change the of this variable.
// ex: May 22 2024 18:00:00
// May 22, 2024 at 6PM
            const newYearEnd = 'OCT 01 2024 10:00:00';

            function countdown(){
                const newYearEndDate = new Date(newYearEnd);
                const currentDate = new Date();

                const totalSeconds = (newYearEndDate-currentDate)/1000;
                const days = Math.floor(totalSeconds / 3600 / 24);
                const hours = Math.floor(totalSeconds / 3600 ) % 24;
                const minutes = Math.floor(totalSeconds / 60 ) % 60;
                const seconds = Math.floor(totalSeconds % 60);


                __days.innerHTML =  formatTime(days);
                __hours.innerHTML = formatTime(hours);
                __minutes.innerHTML = formatTime(minutes);
                __seconds.innerHTML = formatTime(seconds);
                // console.log(seconds)
                // console.log(minutes)
                // console.log(hours)

            }
            countdown();

            function formatTime(time){
                return time < 10 ? `0${time}` : time;
            }

            setInterval(countdown,1000);
        });
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/home.blade.php ENDPATH**/ ?>