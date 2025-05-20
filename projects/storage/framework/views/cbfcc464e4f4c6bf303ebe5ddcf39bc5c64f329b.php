 <!-- BREADCRUMB SECTION START -->
 <section
     class="pt-[327px] xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] pb-[158px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] text-center bg-no-repeat bg-cover bg-center relative z-[1] overflow-hidden before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none"
     style="background: url(<?php echo e(asset($bannerImage)); ?>) 0px 100px;">
     <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
         <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">
             <?php echo e($name); ?>

         </h1>
         <ul class="flex items-center justify-center gap-[10px] text-white">
             <li>
                 <a href="<?php echo e(url('')); ?>" class="text-edyellow">Home</a>
             </li>
             <li>
                 <span class="text-[12px]">
                     <i class="fa-solid fa-angle-double-right">
                     </i>
                 </span>
             </li>
             <li><?php echo e($name); ?></li>
         </ul>
     </div>
 </section>
 <!-- BREADCRUMB SECTION END -->


 
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/layouts/banner.blade.php ENDPATH**/ ?>