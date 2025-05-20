<?php

$list=App\Models\Slider::where(["publish"=>"published"])->orderBy("ordering","asc")->get();

?>


<?php if(count($list)>0): ?>

  <!-- BANNER SECTION START -->
        <section>
            <div class="ed-banner-slider swiper relative">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="slider-bg education-bg">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full text-left"
                                    style="margin-top: 100px">
                                    <h6 class="font-medium uppercase tracking-[3px] mb-[16px]">
                                        Welcome to School in
                                        <span class="text-edyellow"> ECCAWE</span>
                                    </h6>
                                    <h2 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]"
                                        style="font-size: 48px; line-height: 60px">
                                        We provide professional computer training.
                                    </h2>
                                    <p class="leading-[1.75] mb-[41px]">
                                        We provide professional computer training with expert
                                        instructors, hands-on practice, updated curriculum, and
                                        industry-focused skills for career growth
                                    </p>
                                    <div class="flex items-center gap-[20px]">
                                        <a href="https://eccawe.com/online-admission" class="ed-btn">Apply now
                                        </a>
                                        <a href="https://eccawe.com/page/about-us"
                                            class="ed-btn !bg-transparent border border-white hover:!bg-white hover:text-edpurple">About
                                            us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="slider-bg computer-bg">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full text-left"
                                    style="margin-top: 100px">
                                    <h6 class="font-medium uppercase tracking-[3px] mb-[16px]">
                                        Welcome to School in
                                        <span class="text-edyellow"> ECCAWE</span>
                                    </h6>
                                    <h2 class="font-bold text-[clamp(35px,4.57vw,80px)] leading-[1.13] mb-[15px]"
                                        style="font-size: 48px; line-height: 60px">
                                        The Best School in Your Town
                                    </h2>
                                    <p class="leading-[1.75] mb-[41px]">
                                        The best school in your town offers top-quality education,
                                        expert teachers, modern facilities, and a focus on
                                        all-round development
                                    </p>
                                    <div class="flex items-center gap-[20px]">
                                        <a href="https://eccawe.com/online-admission" class="ed-btn">Apply now
                                        </a>
                                        <a href="https://eccawe.com/page/about-us"
                                            class="ed-btn !bg-transparent border border-white hover:!bg-white hover:text-edpurple">About
                                            us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nav -->
                <div
                    class="ed-banner-slider-nav absolute z-[1] top-[50%] xs:top-[80%] right-[130px] md:right-[60px] sm:right-[40px] xs:hidden flex flex-col gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-white/20 *:text-white *:text-[18px]">
                    <button class="prev hover:bg-edyellow hover:border-edyellow hover:text-black">
                        <i class="fa-solid fa-angle-up"></i>
                    </button>
                    <button class="next leading-[43px] hover:bg-edyellow hover:border-edyellow hover:text-black">
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                </div>
            </div>
        </section>
        <!-- BANNER SECTION END -->

        




    



<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/layouts/slider.blade.php ENDPATH**/ ?>