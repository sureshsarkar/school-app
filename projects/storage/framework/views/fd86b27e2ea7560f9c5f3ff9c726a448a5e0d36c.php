<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("logo",$data->image); ?>
<?php $__env->startSection("header-section"); ?>
    <?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php
    error_reporting(0);
    ?>
<?php $__env->startSection("footer-section"); ?>
    <?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("container"); ?>

    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>




    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4>ONLINE FORM</h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="contact-form-tab">
                            <div class="contact-tab-btn">
                                <div class="contact-tab-btn-inn">

                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                                        </li>
                                      
                                    </ul>
                                </div>


                            </div>

                            <div class="tab-back-con">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="contact-reg">
                                            <h5>FILL THE FORM</h5>
                                            <form method="post" action="<?php echo e(route('user.login')); ?>"  id="formbanner" >
                                              <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                                                </div>

                                                <div class="form-group check-form-div">
                                                    <button class="btn btn-sub-online" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="contact-reg">
                                            <h5>FILL THE FORM</h5>
                                            <form method="post" enctype="multipart/form-data" action="<?php echo e(route('front.user.register')); ?>"  id="registration"  >
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Full name" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Email"  class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="address" placeholder="Address" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="city" placeholder="City/Town" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="country" placeholder="Country" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="username" placeholder="User Name" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" placeholder="Password" id="password" class="form-control" minlength="4" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" minlength="4" name="confirmpassword" onkeyup="validate_password()" placeholder="Re-type Password" id="confirmpassword" class="form-control" required>
                                                    <span id="wrong_pass_alert"></span>
                                                </div>
                                                <div class="form-group check-form-div">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="checkbox_agree" id="flexCheckDefault" required>
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            I agree
                                                        </label>
                                                    </div>
                                                    <button id="create" class="btn btn-sub-online" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>

        </div>
    </section>





   

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

  
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                 //   alert('fff')
                  /*  var password = document.getElementsByName("password")[0].value
                    var confirmPassword = document.getElementsByName("confirmpassword")[0].value
                    if(password == confirmPassword){
                      //  alert('fffgh')
                      //  var pass="OK"
                    }else{
                        alert('ttt')
                        document.getElementsByName("confirmpassword")[0].value='';
                        document.getElementById('errorpass').innerHTML='Password Not match';
                    }*/

                    form.classList.add('was-validated')
                }, false)
            })
        })()

    </script>

  <script>
      function validate_password() {

          let pass = document.getElementById('password').value;
          let confirm_pass = document.getElementById('confirmpassword').value;
          if (pass != confirm_pass) {
              document.getElementById('wrong_pass_alert').style.color = 'red';
              document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Use same password';
              document.getElementById('create').disabled = true;
              document.getElementById('create').style.opacity = (0.4);
          } else {
              document.getElementById('wrong_pass_alert').style.color = 'green';
              document.getElementById('wrong_pass_alert').innerHTML =
                  '🗹 Password Matched';
              document.getElementById('create').disabled = false;
              document.getElementById('create').style.opacity = (1);
          }
      }

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/static/online-form.blade.php ENDPATH**/ ?>