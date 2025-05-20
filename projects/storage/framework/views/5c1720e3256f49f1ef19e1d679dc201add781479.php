<style>

    .navbar form .input-group {
        background-color: #fff !important;
        padding: 2px 6px;
        border-radius: 50px;
    }
</style>
<header>

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
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/home')); ?>">Home</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>#about-tomi">About TOMI</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>#participate">Participate</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>#jury">Jury</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('galleries')); ?>">Event</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('award-ceremoney')); ?>">Award Ceremony</a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>#contact">Contact</a>
          </li>

          <?php if(\Illuminate\Support\Facades\Auth::guard('employee')->user()): ?>

              <li class="nav-item"><a class="nav-link" href="<?php echo e(route('user.profile')); ?>">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(route('user.logout')); ?>"><i class="far fa-user"></i>Logout</a></li>
          <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('company-login')); ?>">Login</a>
        </li>
          <?php endif; ?>



       

      </ul>
        <div class="footer-button pt-3">
            <ul>

                <?php if(!\Illuminate\Support\Facades\Auth::guard('voter')->user()): ?>
                    <li><a href="<?php echo e(url('vote-now')); ?>"><i class="far fa-user"></i>Vote Now</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('user.logout')); ?>"><i class="far fa-user"></i>Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    
    </div>
  </div>
        </nav>
	</div>
</header>
<?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/layouts/header.blade.php ENDPATH**/ ?>