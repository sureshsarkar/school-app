<div class="col-lg-1 col-md-3 col-12">
    <div class="banner-social abt-social">
        <ul>

            <?php if($setting_data['instagram']): ?>
            <li><a href="<?php echo e($setting_data['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
            <?php endif; ?>
            <?php if($setting_data['facebook']): ?>
            <li><a href="<?php echo e($setting_data['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if($setting_data['twitter']): ?>
            <li><a href="<?php echo e($setting_data['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
            <?php endif; ?>
            <?php if($setting_data['linkedin']): ?>
                    <li><a href="<?php echo e($setting_data['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                <?php endif; ?>

        </ul>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/award/projects/resources/views/front/layouts/social-media.blade.php ENDPATH**/ ?>