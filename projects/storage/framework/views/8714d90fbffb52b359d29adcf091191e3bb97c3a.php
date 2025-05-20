<!DOCTYPE html>
<html lang="en">
	<head>
    <?php echo $__env->make("front.layouts.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent("header-section"); ?>
        <?php echo $setting_data['google-analytics']  ?? ''; ?>

        <?php echo $setting_data['google-tag-master']  ?? ''; ?>

        <?php echo $setting_data['facebook-pixel-code']  ?? ''; ?>

       

    	<?php echo $setting_data['common-header-data']   ?? ''; ?>

	</head>
<body >
 <?php echo $setting_data['other-thing-on-head']  ?? ''; ?> 
    

    	<?php echo $setting_data['after-body-open-tag']  ?? ''; ?>

	  <?php echo $__env->make("front.layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	  <?php echo $__env->yieldContent('container'); ?>

	<?php echo $__env->make("front.layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	

<?php echo $__env->yieldContent("footer-section"); ?>
    	<?php echo $setting_data['chat-bot']  ?? ''; ?>

    	<?php echo $setting_data['common-footer-data']  ?? ''; ?>

</body>
</html><?php /**PATH /home3/demo1pro/lighthouse.demo1.projectdigitalhubsolution.com/projects/resources/views/front/layouts/master.blade.php ENDPATH**/ ?>