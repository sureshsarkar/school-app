
<script src="{{ asset('front/assets/jquery/jquery.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>

<script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/owl/owl.carousel.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/vendor/fancybox/jquery.fancybox.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/bootstrap/js/bootstrap.bundle.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script> 
<script src="{{ asset('front/js/script.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/js/wow.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/js/main.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/vendor/fslightbox/fslightbox.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>


<script src="{{ asset('toastr/toastr.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script>
$(document).ready(function(){
    @if(Session::has("success"))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has("danger"))
        toastr.error("{{ Session::get('danger') }}");
    @endif
  } );


   $(document).on("submit",".newsletter-data",function(e){
      e.preventDefault();
       $("#gaurav-loader").show();
      data=$(this).serialize();
      url=$(this).attr("action");
      $.post(url,data,function(data){
        if(data.status==200){
            $(".newsletter-data")[0].reset();
            toastr.success(data.message);
             $("#gaurav-loader").hide();
        }else{
          toastr.error(data.message);
           $("#gaurav-loader").hide();
        }
      });
    });
</script>

@yield("js")
