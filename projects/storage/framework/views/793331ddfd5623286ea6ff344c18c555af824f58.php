<header>
  <div class="header-wrapper">
  <div class="container">
   <div class="header-main">
     <div class="header-nav">
      <a href="javascript:;" id="sidebar-link"><h4><i class="fas fa-bars"></i></h4></a>
      <div class="sidebar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('about-us')); ?>">About Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('contact-us')); ?>">Contact Us</a>
                </li>

               <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('commercial-loan-lead')); ?>">Commercial Loan Lead</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('debt-settlement')); ?>">Debt Settlement</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('direct-mail')); ?>">Direct Mail</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('email-marketing-campaign')); ?>">Email Marketing Campaign</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('ivr')); ?>">Ivr</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('lead-process')); ?>">Lead Process</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('live-call-transfer')); ?>">Live Call Transfer</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('mortage-direct-mail')); ?>">Mortage Direct Mail</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('mortage-lead')); ?>">Mortage Lead</a>
                </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('mortage-trigger-data')); ?>">Mortage Trigger Data</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('real-estate-leads')); ?>">Real Estate Leads</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('reverse-mortage-lead')); ?>">Reverse Mortage Lead</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('roi')); ?>">Roi</a>
              </li>


              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('sample-mortage-lead')); ?>">Sample Mortage Lead</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('seo-service')); ?>">Seo Service</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('services')); ?>">Services</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('smart-track')); ?>">Smart Track</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('what-we-offer')); ?>">What We Offer</a>
              </li>



            
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('blogs')); ?>">News & Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('terms-of-service')); ?>">Terms Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
     </div>
     <div class="logo-div">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>" title="Home Page"><img src="<?php echo asset($setting_data['header_logo'] ?? 'images/logo.png'); ?>"  alt="<?php echo $setting_data['website'] ?? ''; ?>" title="<?php echo $setting_data['website'] ?? ''; ?>"></a>
         <!-- <img src="<?php echo e(asset('front/images/smartleadz-logo.png')); ?>"> -->
     </div>
     <div class="search-div">


      <div class="navbar-right">

            <div class="right-navbar">

              <ul>

                <li>

                  <i class="fas fa-search search-tog"></i>

                  <div class="search-box" style="display: none;">

                    <form method="GET" action="http://localhost/smartlead/blogs">

                      <div class="form-group">

                        <input type="text" name="search" id="search-input" class="form-control" value="" placeholder="Search">

                        <button class="right-nav-button"><i class="fas fa-search"></i></button>

                      </div>

                    </form>

                  </div>

                </li>
              </ul>

            </div>

          </div>



     </div>
     </div>
   </div>
   </div>
</header><?php /**PATH E:\xampp\htdocs\smartlead\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>