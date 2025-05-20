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

        <!--================================== Home page main banner start==============================-->

    <section class="home-slider-wrapper">
        <div class="main-home-slider">
            <div class="home-slider-inner">
                <div class="owl-carousel" id="home-slider">


<?php $__currentLoopData = \App\Models\Slider::orderBy('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="item">
                            <img src="<?php echo e(asset($c->image)); ?>" alt="Overseers of Billing and Collections">
                            <div class="cover">
                                <div class="container">
                                    <div class="header-content">
                                        <div class="header-content-main">
                                            <div class="header-content-style">
                                                <div class="header-content-inner">
                                                    <div class="header-content-div">
                                                        <h2><?php echo e($c->title); ?></h2>
                                                        <p><?php echo $c->description; ?>

                                                        </p>
                                                        <a href="<?php echo e($c->link); ?>">Know More <i class="fas fa-caret-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <!--==================================== Home page main banner end================================-->


    <!--==================================== Home page counter start================================-->


    <section class="counter-wrapper wow fadeInUp">
        <div class="counter-main">
            <div class="container">
                <div class="counter-inner">
                    <ul id="counter">
                        <li>
                            <div class="count-contanet">
                                <span class="count percent" data-count="<?php echo e($setting_data['project completed']); ?>">0</span>
                                <span class="plus-icon"><i class="fas fa-plus"></i></span>
                                <p>Number of countries Transacted </p>
                            </div>
                        </li>
                        <li>
                            <div class="count-contanet">
                                <span class="count percent" data-count="<?php echo e($setting_data['Working hours']); ?>">0</span>
                                <span class="plus-icon"><i class="fas fa-plus"></i></span>
                                <p>Number of Years in the market</p>
                            </div>
                        </li>
                        <li>
                            <div class="count-contanet">
                                <span class="count percent" data-count="<?php echo e($setting_data['Experienced Staff']); ?>">0</span>
                                <span class="plus-icon"><i class="fas fa-plus"></i></span>
                                <p>Our Partners</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--==================================== Home page counter end================================-->

    <!--==================================== Home page counter end================================-->
    <?php echo $data->shortDescription; ?>

<!--================================= main banner end=============================-->

    <!--==================================== home service section start================================-->

    <section class="home-serv-wrapp">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serv-box wow fadeInUp">
                        <img src="<?php echo e($c->image); ?>">
                        <div class="service-box-con">
                            <h5><?php echo e($c->name); ?></h5>
                            <p><?php echo $c->description; ?></p>
                            <a href="<?php echo e(url($c->seo_url)); ?>">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!--==================================== Home service section end================================-->
    <!--==================================== Home cta section start================================-->
    <?php echo $__env->make('front.static.investment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--==================================== Home cta section end================================-->
    <!--==================================== Home case study section start================================-->

    <section class="case-study-wrapp">
        <div class="container">
         <?php echo $data->mediumDescription; ?>

            <div class="case-study-items">
                <div class="row">
                    <?php $__currentLoopData = App\Models\Location::orderBy("id","asc")->where('parent_id',0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="case-study-box wow fadeInUp">
                            <div class="case-study-box-img">
                                <img src="<?php echo e(asset($c->image)); ?>">
                                <div class="case-study-img-con">
                                    <div class="case-study-img-con-inn">
                                        <i class="fas fa-search"></i>
                                        <p><?php echo e($c->description); ?></p>
                                        <button onclick="myFunction(<?php echo e($key); ?>)">Read More</button>
                                    </div>
                                </div>
                                <div class="case-study-bottom">
                                    <h5><?php echo e($c->name); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>

    <!--==================================== Home case study section end================================-->
    <?php echo $data->longDescription; ?>

    <!-- ==================================== Home testimonial section start================================-->

    <section class="testimonial-wrapp wow fadeInUp">
        <div class="container">

            <?php echo $data->longDescriptiontwo; ?>

                <div class="testimonial-slider owl-carousel">
        <?php $clients=App\Models\Testimonial::orderBy("id","desc")->first(); ?>
        <?php if($clients): ?>

            <?php $__currentLoopData = App\Models\Testimonial::orderBy("id","desc")->where("status","true")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
            <div class="testimonial-box">
                <i class="fas fa-quote-left"></i>
                <p><?php echo e($c->message); ?></p>
                <div class="testi-author">
                    <img src="<?php echo e(asset($clients->image)); ?>">
                    <div class="author-name">
                        <h5>by <b><?php echo e($c->name); ?></b></h5>
                        <p><?php echo e($c->profile); ?></p>
                    </div>
                </div>
            </div>
        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
    </div>
    </section>

    <!--==================================== Home testimonial section start================================-->


    <?php echo $__env->make('front.static.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $clients=App\Models\OurClient::orderBy("id","desc")->first(); ?>
<?php if($clients): ?>
    <!--==================================== brand logo section start================================-->

    <section class="brand-logo-wrapp wow fadeInUp">
        <div class="brand-logo-main">
            <div class="container">
                <div class="owl-carousel brand-slider">

 <?php $__currentLoopData = App\Models\OurClient::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <img src="<?php echo e(asset($c->image)); ?>">
                        </div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </div>
       </div>
   </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
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


    <script>
        function myFunction(idd) {

            localStorage.setItem('lastTab', 'pills-home-tab'+idd);
            window.location.href="<?php echo e(url('case-studies')); ?>";
        }
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/home.blade.php ENDPATH**/ ?>