<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>

<?php $__env->startSection("container"); ?>





<section class="thank-you-page">
    <div class="container">
        <div class="thankyou-content">
            <h2>THANK YOU FOR VOTING!</h2>
        </div>
    </div>
</section>

    <section class="banner-wrappers" style="background-color: #fff !important;">

        <div class="container" style="background-color: #fff !important;">
            <div class="row" id="Wrap" style="background-color: #fff !important;">
                <div class="home-slider" >

<!-- 
                    <h2 class="text-center" style="margin-top: 175px; background-color: #fff">THANK YOU FOR VOTING! </h2> -->
                    
<!-- <h3>Oman's First-Ever Marketing Excellence Awards<br>Doesn't Oman deserve its own marketing awards? -->



                </div>
                

                
            </div>
        </div>
        
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- <script>
        window.setTimeout(function(){
            window.location.href = "<?php echo e(url('category')); ?>";

        }, 2000);

    </script> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mobbindtechnolog/public_html/tomi.mobbindtechnology.co.in/projects/resources/views/front/static/success.blade.php ENDPATH**/ ?>