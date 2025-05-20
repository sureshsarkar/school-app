
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
<section class="product-banner ">
	<div class="item">
		<img src="<?php echo e(asset($bannerImage)); ?>" alt="<?php echo e(strip_tags($data->name)); ?>" title="<?php echo e(strip_tags($data->name)); ?>">
		<div class="cover">
			<div class="container">
				<div class="header-content">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-12">
							<div class="product-banner-left product-banner-section">
								<div class="banner-left-inn-pro ">
									<h2><?php echo $data->name; ?></h2>
									<p><?php echo e($data->description); ?>

									</p>
									<?php if($data->broucher): ?>
										<a href="<?php echo e(asset($data->broucher)); ?>" target="_BLANK" download class="product-anchor-banner"> <i class="fa fa-download"></i> Download Now</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-12">
							<div class="banner-right-form">
								<div class="form-right-div">
									<h5>Enquire Now</h5>
									
									<?php echo Form::open(["class"=>"row","route"=>"productDetailPost"]); ?>

										<input type="hidden" name="product_id" value="<?php echo e($data->id); ?>">
										<input type="hidden" name="product_name" value="<?php echo e($data->name); ?>">

										<div class="form-group col-lg-12 col-md-12 col-12">
											<input type="text" name="name" class="form-control" placeholder="Name *" required>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<input type="email" name="email" required class="form-control" placeholder="Email *">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<input type="text" name="mobile" required class="form-control" placeholder="Mobile *">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<input type="text" name="message" class="form-control" placeholder="Message *" required>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<button type="submit" class="btn-product-form">Submit</button>
										</div>
									<?php echo Form::close(); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--============================project detail banner sec end ============================-->
<!--============================Product Detail sec start ============================-->
<section class="home-about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-12">
				<div class="home-about-right product-det-mid">
					<div class="product-det-mid-inn">
						<h5>Lighthouse</h5>
						<h3><span><?php echo $data->name; ?></span></h3>
						
						<?php echo $data->longDescription; ?>

					</div>
				</div>
			</div>
			
		
			<div class="col-lg-5 col-md-5 col-12">
				<div class="product-det-mid">
					<img src="<?php echo e(asset($data->attraction_image)); ?>"  alt="<?php echo e(strip_tags($data->name)); ?>" title="<?php echo e(strip_tags($data->name)); ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!--============================Product Detail sec end ============================-->
<?php if(App\Models\PropertySpace::where(["property_id"=>$data->id,"space_type"=>"FEATURES"])->orderBy("id","desc")->count()>0): ?>
<section class="product-specificate">
	<div class="container">
		<div class="pro-spec-head">
			<h3>Our Features</h3>
		
		</div>
		<div class="row">
			<?php $__currentLoopData = App\Models\PropertySpace::where(["property_id"=>$data->id,"space_type"=>"FEATURES"])->orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="pro-spec-box">
					<?php if($c->space_image): ?>
					<img src="<?php echo e(asset($c->space_image)); ?>" alt="<?php echo e($c->space_name); ?>" title="<?php echo e($c->space_name); ?>" />
					<?php endif; ?>
					<h4><?php echo e($c->space_name); ?></h4>
					<p>
						<?php echo e($c->space_status); ?>

					</p>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<?php endif; ?>
<?php if($data->broucher): ?>
<section class="download-cta">
	<div class="download-cta-main" style="background-image: url(<?php echo e(asset('front')); ?>/images/inner-banner.jpg);">
		<div class="container">
			<div class="down-cta-con">
				<h3>Download Brochure</h3>
				
				<a href="<?php echo e(asset($data->broucher)); ?>" target="_BLANK" download> <i class="fa fa-download"></i> Download Now</a>
			
			</div>
		</div>
	</div>
</section>
	<?php endif; ?>
<?php if(App\Models\PropertySpace::where(["property_id"=>$data->id,"space_type"=>"SPECIFICATION"])->orderBy("id","desc")->count()>0): ?>
<section class="product-specificate our-pro-feat">
	<div class="container">
		<div class="pro-spec-head">
			<h3>SPECIFICATION</h3>
			
		</div>
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-12">
				<div class="pro-feat-con-main">
					<ul>
						<?php $__currentLoopData = App\Models\PropertySpace::where(["property_id"=>$data->id,"space_type"=>"SPECIFICATION"])->orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<?php if($c->space_image): ?>
								<img src="<?php echo e(asset($c->space_image)); ?>" alt="<?php echo e($c->space_name); ?>" title="<?php echo e($c->space_name); ?>" />
							<?php endif; ?>
							<div class="pro-feat-con">
								
								<h5><?php echo e($c->space_name); ?></h5>
								<p>
            						<?php echo e($c->space_status); ?>

            					</p>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/products/common.blade.php ENDPATH**/ ?>