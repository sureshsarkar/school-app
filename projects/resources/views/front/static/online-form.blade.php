@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("logo",$data->image)
@section("header-section")
    {!! $data->header_section !!}
@stop
<?php
    error_reporting(0);
    ?>
@section("footer-section")
    {!! $data->footer_section !!}
@stop

@section("container")

    @php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

{{--
    <section class="banner-wrapper">

        <div class="container">
            <div class="row">
                @include('front.layouts.slider')
                <div class="col-lg-1 col-md-1 col-12">
                    <div class="banner-social">
                        <ul>
                            <li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape">
            <img src="{{asset('front/images/banner-shape.png')}}">
        </div>
    </section>
--}}


    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4>COMPANY lOGIN</h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="contact-form-tab">
                            <div class="contact-tab-btn">
                                <div class="contact-tab-btn-inn">
{{--
                                    <h4><span>LOGIN</span><br> ONLINE</h4>
--}}
{{--
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                                        </li>
                                      --}}
{{--  <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Register</button>
                                        </li>--}}{{--

                                    </ul>
--}}
                                </div>
{{--
                                <img src="{{asset('front/images/contact.png')}}">
--}}

                            </div>

                            <div class="tab-back-con">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="contact-reg">
                                            <h5>Company Login</h5>
                                            <form method="post" action="{{route('user.login')}}"  id="formbanner" >
                                              @csrf
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
                                            <form method="post" enctype="multipart/form-data" action="{{route('front.user.register')}}"  id="registration"  >
                                                @csrf
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
{{--
                                                <div class="form-group check-form-div">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="checkbox_agree" id="flexCheckDefault" required>
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            I agree
                                                        </label>
                                                    </div>
                                                    <button id="create" class="btn btn-sub-online" type="submit">Submit</button>
                                                </div>
--}}
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    {{--<div class="col-lg-2 col-md-2 col-12">
                        <div class="guide-img">
                            <img src="{{asset('front/images/logo.png')}}" alt="logo">
                            <img src="{{asset($data->image)}}" alt="online-form">
                        </div>
                    </div>--}}
                </div>
            </div>

        </div>
    </section>





   {{-- <section class="sponser-wrapp mt-0 mb-5">
        <div class="container">
            <div class="row">
                @foreach(\App\Models\OurClient::orderBy('id','asc')->limit(4)->get() as $c)
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="spons-head">
                            <h3>{{ucwords($c->title)}}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>--}}

@stop
@section('js')

  {{--  <script>
        function pwdcheck1(){
          //  alert('ggg')
            var password = document.getElementsByName("password")[0].value

            var passwordCapital=/[A-Z]/.test(password)
            if(passwordCapital == true){
                var passwordSmall = /[a-z]/.test(password)
                if(passwordSmall == true){
                    var passwordNumber = /[0-9]/.test(password)
                    if(passwordNumber == true){
                        var passwordlength=password.length
                        if( passwordlength >=8 ){
                            var confirmPassword = document.getElementsByName("confirmpassword")[0].value
                            if(password == confirmPassword){
                                var pass="OK"
                            }
                            else{
                                var pass="NO"
                            }
                        }
                        else{
                            var pass="NO"
                        }
                    }
                    else{
                        var pass="NO"
                    }
                }
                else{
                    var pass="NO"
                }
            }
            else{
                var pass="NO"
            }


            if(pass=="OK"){
                return true
            }
            else{
              //  confirmPassword.setCustomValidity("Passwords Don't Match");
                alert('not match')
                return false
            }
        }
    </script>--}}
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
@endsection
