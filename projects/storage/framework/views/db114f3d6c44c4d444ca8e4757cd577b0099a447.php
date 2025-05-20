<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("per_page_data_section"); ?>
<?php echo $data->head_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("container"); ?>
<?php 
$bannerImage='front/images/inner-banner.jpg';
if($data->bannerImage){
  $bannerImage=$data->bannerImage;
}
?>

    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
    <!-- start banner sec -->
    
  <?php echo $__env->make("front.layouts.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="career-main-wrap">
   <div class="container">
      <div class="career-main-head">
         <h3>popular jobs categories</h3>
      </div>
      <div class="career-main-div">
         <div class="row">
             <?php $__currentLoopData = App\Models\CareerCategory::where("isHome","true")->limit(8)->orderBy("ordering","asc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-12">
              <a href="<?php echo e(url('career/category/'.$c->seo_url)); ?>" class="main-career-link">
               <div class="career-box">
                  <div class="career-box-inner">
                        <?php if($c->image): ?>
                            <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->title); ?>" title="<?php echo e($c->title); ?>" />
                        <?php else: ?>
                            <?php echo $c->icon; ?>

                        <?php endif; ?>
                     <h3><?php echo e($c->title); ?></h3>
                      <h5><?php echo e(App\Models\Career::where("category",$c->id)->count()); ?> Open Positions</h5>
                  </div>
               </div>
               </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </div>
      </div>
      <div class="browse-category">
         <a href="<?php echo e(url('career/category-listing')); ?>">Browse All Categories</a>
      </div>
   </div>
</section>


<section class="how-career-sec">
   <div class="container">
      <div class="how-career-head">
         <h3>How it work</h3>
      </div>
       <div class="how-career-image">
          <img src="<?php echo e(asset('html/images/how-career.png')); ?>" alt="CureTech Services">
       </div>
   </div>
</section>


<section class="domain-list-cta">
	 <div class="domain-list-main-cta" style="background-image: url(<?php echo e(asset('html/images/domain-list-form.png')); ?>);">
	 	<div class="container">
	 	<div class="domain-list-cta-form">
	 		 <div class="row">
	 		 	 <div class="col-lg-6 col-md-12 col-12">
	 		 	 	<div class="domain-form-left">
	 		 	 		 <h4>Fill Your Detail </h4>
	 		 	 		<?php echo Form::open(["url"=>"domain-feedback","files"=>true]); ?>

	 		 	 		 	<div class="form-row row">
	 		 	 		 	    <input type="hidden" name="service_id" value="<?php echo e($data->name); ?>" />
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 <?php echo Form::label("Name"); ?>

		<?php echo Form::text('name',null,["class"=>"form-control","required"]); ?>

	 		 	 		 		 </div>
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 <?php echo Form::label("Email"); ?>

	 	<?php echo Form::email('email',null,["class"=>"form-control","required"]); ?>

	 		 	 		 		 </div>
	 		 	 		 	</div>
	 		 	 		 	<div class="form-row row">
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		 	 <?php echo Form::label("Contact Number"); ?>

	 	<?php echo Form::text('contactnumber',null,["class"=>"form-control","required"]); ?>

	 		 	 		 		 </div>
	 		 	 		 		 <div class="form-group col-lg-6 col-md-6 col-12">
	 		 	 		 		  <?php echo Form::label("Upload Resume"); ?>

	 	 <?php echo Form::file("image",["class"=>"form-control","required"]); ?>

	 		 	 		 		 </div>
	 		 	 		 	</div>
	 		 	 		 	
	 		 	 		 	<div class="form-row row">
	 		 	 		 		 <div class="form-group col-lg-12 col-md-12 col-12">
	 		 	 		 		 	 <?php echo Form::label("Message"); ?>

	 	<?php echo Form::textarea('message',null,["class"=>"form-control","rows"=>2]); ?>

	 		 	 		 		 </div>
	 		 	 		 		
	 		 	 		 	</div>
	 		 	 		 	
		 	 		 	
	 		 	 		 	<div class="cta-submit-button">
	 		 	 		 		 <button type="submit">Submit</button>
	 		 	 		 	</div>
		 	 		 	<?php echo Form::close(); ?>  
	 		 	 	</div>
	 		 	 </div>
	 		 	 <div class="col-lg-6 col-md-12 col-12">
	 		 	 	<div class="domain-list-cta-content">
	 		 	 		<div class="domain-list-cta-inner-content">
	 		 	 		   
	 		 	 		
	 		 	 		  <h5>Build your career with us </h5>
                            <p> Those who think about changing careers have one thing in common: they're always eager to learn and grow.  </p>
	 		 	 		    <p>Intentional choices and actions create a meaningful career, not chance.</p>
	 		 	 		   
	 		 	 		 </div>
	 		 	 	</div>
	 		 	 </div>
	 		 </div>
	 	</div>
	 </div>
	 </div>
</section>

<section class="career-feat-job">
   <div class="container">
      <div class="career-feat-head">
         <h4>Latest Jobs</h4>
      </div>
      <div class="career-feat-main">
          <?php
            $jobs=App\Models\Career::orderBy("id","desc")->paginate(6);
          ?>
         <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="career-feat-box">
            <div class="career-feat-img">
               <img src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->title); ?>">
            </div>
            <div class="career-feat-content">
               <h3><?php echo e($c->job_type); ?></h3>
               <h5><?php echo e($c->title); ?></h5>
               <p>Posted <?php echo e(date('d F Y',strtotime($c->created_at))); ?> by <a href="#"><?php echo e($c->company); ?></a></p>
               <ul>
                   <?php if($c->location): ?>
                 <li><i class="fas fa-map-marker-alt"></i> <?php echo e($c->location); ?></li>
                 <?php endif; ?>
                 <?php if($c->package): ?>
                 <li><i class="fas fa-briefcase"></i> <?php echo e($c->package); ?></li>
                 <?php endif; ?>
               </ul>
            </div>
            <div class="browse-jobs">
               <a href="<?php echo e(url('career/detail/'.$c->id)); ?>">Browse Job</a>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      
      <?php echo e($jobs->links()); ?>

   </div>
</section>



<?php if($data->image): ?>
<section class="zimbra-cta-wrapp mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-img">
        <img src="<?php echo e(asset($data->image)); ?>" alt="<?php echo e($data->name); ?>">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12 zimb-col">
      <div class="zimb-cta-con">
        <div class="zimb-cta-con-inner">
          <?php echo $data->cta_description; ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/static/career.blade.php ENDPATH**/ ?>