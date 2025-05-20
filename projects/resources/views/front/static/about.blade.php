@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)
@section('logo', $data->image)
@section('header-section')
    {!! $data->header_section !!}
@stop
@section('footer-section')
    {!! $data->footer_section !!}
@stop
@section('container')

    @php
        $name = $data->name;
        $bannerImage = asset('front/images/inner-banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp

@include("front.layouts.banner")

    <!-- ABOUT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex sm:flex-col items-start justify-between gap-[15px]">
                <h2 class="ed-section-title">About the Eccawe</h2>
                <div class="max-w-[50%] sm:max-w-full mb-[60px]">
                    <p class="text-edgray2 mb-[25px]">
                        Since the inception of Vedant in 2004, we have gained immense trust and acceptance from parents
                        seeking the best early education for their children. With a well-structured preschool curriculum,
                        state-of-the-art infrastructure, and a seamless admission process, we rapidly expanded, establishing
                        over 100 preschools within the first three years.
                    </p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="md:w-[10%] xxs:w-[5%]">
                    <img src="https://eccawe.com/backend/themes/default/education/img/about-img1.jpg" alt="About image"
                        class="w-[633px] max-w-[633px] sm:max-w-[308px] aspect-[633/431px]">
                </div>
                <div class="md:w-[90%] xxs:w-[95%]">
                    <div
                        class="bg-white p-[50px] lg:p-[30px] xxs:p-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] -ml-[92px] xl:-ml-[134px] lg:-ml-[278px] md:ml-0">
                        <h6
                            class="font-semibold uppercase text-edpurple relative z-[1] pl-[40px] mb-[10px] before:absolute before:left-0 before:top-[50%] before:-translate-y-[50%] before:h-[1px] before:w-[30px] before:bg-edpurple">
                            About Eccawe
                        </h6>
                        <h4 class="font-semibold text-[30px] md:text-[26px] xs:text-[22px] leading-[1.2] mb-[26px]">
                            Operating on a franchise model
                        </h4>
                        <ul
                            class="ed-inner-about-list font-medium text-[16px] text-edgray grid grid-cols-[repeat(2,max-content)] xs:grid-cols-1 gap-x-[30px] xxs:gap-x-[15px] gap-y-[9px] mb-[37px] *:pl-[25px] *:relative *:before:absolute *:before:left-0 *:before:top-[4px] *:before:w-[15px] *:before:aspect-square *:before:bg-[url(../assets/img/icon/checkmark.svg)] *:before:bg-no-repeat *:before:bg-[length:15px_13px] *:before:bg-center">
                            <li>Shaping future of early education</li>
                            <li>Trusted preschool education</li>
                            <li>Opportunities for aspiring entrepreneurs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->
    <section class="bg-[#FAF9F6] relative z-[1] overflow-hidden">
        <div
            class="flex lg:flex-col items-end gap-[130px] xxxl:gap-[100px] xxl:gap-[60px] lg:gap-y-0 ml-[19.5%] xxxl:ml-[14.71%] xxl:ml-[9.71%] xl:ml-[5.71%] lg:mx-[5.71%] md:mx-[12px]">
            <!-- left / text -->
            <div class="py-[120px] xl:py-[80px] md:py-[60px]">
                <h6 class="ed-section-sub-title">employability</h6>
                <h2 class="ed-section-title mb-[28px]">Angel Vedant: Redefining Early Childhood Education</h2>
                <p class="text-edgray mb-[11px]">Eccawe offers quality early education through 1200+ preschools, empowering
                    educators and entrepreneurs with a proven, trusted franchise model.</p>
                <ul
                    class="ed-inner-about-list font-medium text-[16px] text-black grid grid-cols-2 xxs:grid-cols-1 gap-x-[30px] xxs:gap-x-[15px] gap-y-[9px] mb-[46px] *:pl-[25px] *:relative *:before:absolute *:before:left-0 *:before:top-[4px] *:before:w-[15px] *:before:aspect-square *:before:bg-[url(../assets/img/icon/checkmark.svg)] *:before:bg-no-repeat *:before:bg-[length:15px_13px] *:before:bg-center">
                    <li>Trusted by parents since 2004</li>
                    <li>1200+ preschools across India and Nepal</li>
                    <li>Expert mentors</li>
                    <li>60% women-led preschool leadership</li>
                </ul>
                <a href="contact.html"
                    class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">Apply
                    Now</a>
            </div>
            <!-- right / img / form -->
            <div class="relative shrink-0 xxxl:max-w-[55%] lg:max-w-full py-[120px] xl:py-[80px] md:py-[60px]">
                <img src="https://eccawe.com/backend/themes/default/education/img/computer-training1.jpg" alt="image"
                    class="min-h-[280px]">
                <div
                    class="absolute bottom-0 text-white p-[40px] xs:p-[20px] bg-white/5 backdrop-blur-[13.5914px] w-full shadow-[0_12px_16px_-4px_rgba(30,41,59,0.04),0_4px_6px_-2px_rgba(30,41,59,0.1)]">
                    <h4 class="font-semibold text-[30px] xs:text-[26px] xxs:text-[22px] mb-[12px]">Find A career that suits
                        you</h4>
                </div>
            </div>
        </div>
        <!-- vector -->
        <img src="front/images/employability-vector.svg" alt="vector"
            class="absolute -z-[1] bottom-[186px] left-[37px] pointer-events-none">
    </section>
    <!-- PROGRAMS SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <!-- heading -->
            <div class="flex flex-wrap items-center justify-between gap-x-[30px] gap-y-[15px] mb-[40px] xxs:mb-[30px]">
                <div class="left">
                    <h6 class="ed-section-sub-title">programs</h6>
                    <h2 class="ed-section-title">Course Programs</h2>
                </div>
                <!-- nav -->
            </div>
            <!-- slider -->
            <div class="py-[80px] xl:py-[80px] md:py-[60px]">
                <div class="grid grid-cols-3 md:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                    <!-- single course card -->
                    <div
                        class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                        <!-- course image  -->
                        <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                            <img src="https://eccawe.com/backend/themes/default/education/img/nursery.jpg"
                                alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                        </div>
                        <!-- course infos -->
                        <!-- course title -->
                        <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                            <a href="course-details.html" class="hover:text-edpurple">
                                Nursery Teacher Training
                            </a>
                        </h5>
                        <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                        <!-- course stats -->
                        <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                        <!-- course footer -->
                    </div>
                    <!-- single course card -->
                    <div
                        class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                        <!-- course image  -->
                        <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                            <img src="https://eccawe.com/backend/themes/default/education/img/computer-training.jpg"
                                alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                        </div>
                        <!-- course infos -->
                        <!-- course title -->
                        <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                            <a href="course-details.html" class="hover:text-edpurple">
                                Computer Teacher Training
                            </a>
                            <p>Eligibility:- 10th, 12th | Duration:- One Year</p>
                        </h5>
                        <!-- course stats -->
                        <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                        <!-- course footer -->
                    </div>
                    <!-- single course card -->
                    <div
                        class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                        <!-- course image  -->
                        <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                            <img src="https://eccawe.com/backend/themes/default/education/img/beautician.jpg"
                                alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                        </div>
                        <!-- course infos -->
                        <!-- course title -->
                        <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                            <a href="course-details.html" class="hover:text-edpurple">
                                Beautician
                            </a>
                            <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                        </h5>
                        <!-- course stats -->
                        <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                        <!-- course footer -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- PROGRAMS SECTION END -->




@stop
