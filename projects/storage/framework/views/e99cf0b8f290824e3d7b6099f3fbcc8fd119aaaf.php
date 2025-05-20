<header class="<?php echo e(Request::segment(1)!=''?'inner-header':'main-header-div'); ?>">
	<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>" title="Home Page"><img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ms-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>"  title="Home Page">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo e(url('about-us')); ?>">About Lighthouse</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('about-ceo')); ?>">About CEO</a></li>

            <li><a class="dropdown-item" href="<?php echo e(url('our-clients')); ?>">Our Clients</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('our-team')); ?>">Our Team</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('certificates')); ?>"> Certificates</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('reviews')); ?>"> Reviews</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('galleries')); ?>"> Gallery</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('career')); ?>">Career</a></li>
            <li><a class="dropdown-item" href="<?php echo e(url('faqs')); ?>">FAQs</a></li>
          
            
          </ul>
        </li>	
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('products')); ?>">Products & Solutions</a>
        </li>
        
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a class="dropdown-item" href="<?php echo e($c->seo_url); ?>"><?php echo e($c->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>			
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('contact-us')); ?>"  title="Contact us Page">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/layouts/header.blade.php ENDPATH**/ ?>