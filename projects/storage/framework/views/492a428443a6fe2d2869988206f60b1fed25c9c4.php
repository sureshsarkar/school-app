
<script src="<?php echo e(asset('front/assets/jquery/jquery.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('front/assets/bootstrap/js/bootstrap.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/assets/owl/owl.carousel.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/assets/vendor/fancybox/jquery.fancybox.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/assets/bootstrap/js/bootstrap.bundle.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/js/script.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/js/wow.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>


<script src="<?php echo e(asset('toastr/toastr.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script>
$(document).ready(function(){
    <?php if(Session::has("success")): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>");
    <?php endif; ?>
    <?php if(Session::has("danger")): ?>
        toastr.error("<?php echo e(Session::get('danger')); ?>");
    <?php endif; ?>
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

<?php echo $__env->yieldContent("js"); ?><?php /**PATH E:\xampp\htdocs\subsidy-pro\projects\resources\views/front/layouts/js.blade.php ENDPATH**/ ?>