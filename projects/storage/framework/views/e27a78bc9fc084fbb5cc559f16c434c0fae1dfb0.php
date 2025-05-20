<header>
    <div class="main-header-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('about-us')); ?>">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo e(url('services')); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $__currentLoopData = App\Models\Service::orderBy("id","desc")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="dropdown-item" href="<?php echo e(url('services/'.$c->seo_url)); ?>"><?php echo e($c->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('case-studies')); ?>">Case Studies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('management-team')); ?>">Management Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-contact" href="<?php echo e(url('contact-us')); ?>">Contact Us <i class="fas fa-caret-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>