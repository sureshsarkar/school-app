<footer class="my-footer">
	<div class="container" >
	<div class="main-footer text-white" id="contact">
		<h3>Contact Us</h3>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-6">
				<div class="f-logo">
					<img src="{!! asset($setting_data['footer_logo'] ?? 'images/footer-logo.png') !!}">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-6">
				<div class="f-links">
				    {!!$setting_data['address']!!}
				<!--	<p>Barranco Beatriz 6*<br>
Ash Sharqiyah South Governorate<br>
Oman, OM (OMN)<br>
Western Asia<br>
Asia<br>
Lat/Lon<br>
21.5230262,<br>
59.19073020927925<br>
PBX: --> {{$setting_data['mobile']}}</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-6">
				<div class="f-link">
					<ul>
						<!--<li><a href="{{ url('/') }}#contact">Contact</a></li>-->
						{{--<li><a href="{{ url('/') }}#socialmedia">Social</a></li>--}}
						<!--<li><a href="{{url('feedback')}}">Feedback</a></li>
						<li><a href="{{url('privacy-policy')}}">Support resources</a></li>
						<li><a href="{{url('quick-links')}}">Quick links</a></li>
						<li><a href="{{url('privacy-policy')}}">Privacy</a></li>-->
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-6">
				<div class="banner-social footer-social">
  	 			<ul>

                    @if($setting_data['instagram'])
  	 				<li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                    @if($setting_data['facebook'])
  	 				<li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if($setting_data['twitter'])
  	 				<li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if($setting_data['linkedin'])
                            <li><a href="{{ $setting_data['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
                        @endif

  	 			</ul>
  	 		</div>
			</div>
		</div><br>
		<div class="footer-bottom-link">
      <ul >
      
	<!--<li><a class="nav-link" href="{{ url('/home') }}">Home</a></li>-->
		<li><a class="nav-link" href="{{ url('/') }}#about-tomi">About TOMI</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ url('/') }}#participate" style="color: #8bc53f!important;">Participate</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ url('/') }}#jury" style="color: #ec0972!important;">Jury</a></li>
		<li class="nav-item"><a  style="color: #0c9cd8!important;" href="{{ url('galleries') }}">Event</a></li>
		<li class="nav-item"><a  style="color: #fff!important;" href="{{ url('/') }}#contact">Contact Us</a></li>
	<li  style="color: #8bc53f!important;" class="nav-item"><a  style="color: #8bc53f!important;" href="{{url('feedback')}}">Feedback</a></li>
         <li class="nav-item"><a  style="color: #ec0972!important;" href="{{url('support-resources')}}">Support resources</a></li>
               <li class="nav-item"><a  style="color: #0c9cd8!important;" href="{{url('quick-links')}}">Quick links</a></li>
              <li class="nav-item"><a  style="color: #fff!important;" href="{{url('privacy-policy')}}">Privacy</a></li>
			</ul>
		</div>
	 
		<div class="copyright">
		    {!! $setting_data['copyright'] !!}
<!--			<p>Developed for - All right reserved.<br>2024</p>
-->		</div>
	</div>
	</div>
</footer>

@include("front.layouts.js")

@yield("js")


