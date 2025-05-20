
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

   <?php
        $name=$data->name;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
    <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <section class="sample-ml-mid">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <div class="sample-ml-box">
                   <div class="sample-ml-head">
                      <h6>Lead ID # 2473984</h6>
                      <h5>Date: August 20, 2009 2:55 PM EST</h5>
                   </div>
                   <ul>
                     <li><p>Loan Request:</p><p>Refinance w/ Cash Out</p></li>
                     <li><p>Loan Purpose:</p> <p>&nbsp;</p></li>
                     <li><p>Preferred Product</p> <p>30 Year Fixed Rate</p></li>
                     <li><p>Loan Amont: </p> <p>625.500</p></li>
                     <li><p>Value:</p> <p>850.000</p></li>
                     <li><p>LTV:</p> <p>73%</p></li>
                   </ul>
                </div>
             </div>

           <div class="col-lg-12 col-md-12 col-12">
             <div class="sml-common">
                <h5> Sample Mortgage Lead</h5>
                <p>Receive mini 1003's in real-time daily! Target your desired borrower and customize your campaign with unique filters to meet your exact needs and budget. Each mortgage lead you receive contains up to 27 fields of information. Smart Leadz mortgage leads are customer initiated and generated from our vast network of consumer websites,  We do not use spam, gimmicks or incentives to generate our leads and only use targeted keyword and PPC marketing. Each lead is internally verified for accuracy and is backed by our 100% lead quality guarantee or it is replaced for free.</p>
             </div>
           </div>


          </div>
       </div>
    </section>










<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/static/sample-mortage-lead.blade.php ENDPATH**/ ?>