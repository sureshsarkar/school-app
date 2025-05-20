<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(url('about-us')); ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('career')); ?>">Careers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('teams')); ?>">Teams</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('faqs')); ?>">FAQ's</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('contact-us')); ?>">Contact Us</a>
                </li>

            </ul>
            <?php if(\Illuminate\Support\Facades\Auth::guard('employee')->check()): ?>
            <div class="nav-right">

                <a href="<?php echo e(url('employee/logout')); ?>">Logout</a>
            </div>
            <?php else: ?>
                <div class="nav-right">
                    <a href="<?php echo e(url('customer-login')); ?>">Sign in</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>




-->



<header>
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="top-left">
						<p><?php echo $setting_data['other-thing-on-head']  ?? ''; ?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="top-right">
						<ul>
							<li><a href="#"><i class="far fa-user"></i>Login</a></li>
							<li><a href="#">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header-wrappers">
		<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jury</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Participate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Social Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <div class="input-group">
		  <span class="input-group-text"><i class="fas fa-search"></i></span>
		  <input type="text" class="form-control" name="search" >
		</div>
      </form>
    </div>
  </div>
	</div>
</header><?php /**PATH /home/mobbindtechnolog/public_html/admin.mobbindtechnology.co.in/projects/resources/views/front/layouts/header.blade.php ENDPATH**/ ?>