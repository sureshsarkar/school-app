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
    @php $name=$data->name; @endphp


    <main>
        <style>
            .slider-bg {
                position: relative;
                background-size: cover;
                /* Ensures the image covers the entire section */
                background-position: center;
                /* Centers the image */
                background-repeat: no-repeat;
                /* Prevents image repetition */
                width: 100%;
                /* Full width */
                height: 800px;
                /* Adjust the height as needed */
                display: flex;
                /* Enables content alignment */
                align-items: center;
                /* Centers content vertically */
                justify-content: center;
                /* Centers content horizontally */
                color: white;
                /* Sets text color */
                text-align: center;
                overflow: hidden;
                /* Ensures the overlay stays within the container */
            }

            .slider-bg::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgb(36, 20, 66);
                /* Overlay color */
                opacity: 0.7;
                /* Adjust transparency */
                z-index: 0;
                /* Ensure it stays below the content */
            }

            .slider-bg>* {
                position: relative;
                z-index: 1;
                /* Ensures text/content is above the overlay */
            }

            .education-bg {
                background-image: url("https://eccawe.com/backend/themes/default/education/img/teacher-training.jpg");
            }

            .computer-bg {
                background-image: url("https://eccawe.com/backend/themes/default/education/img/compter-training.jpg");
            }
        </style>

        {{-- Slider section start   --}}
        @include('front.layouts.slider')
        {{-- Slider section end   --}}


        <!-- FEATURES SECTION START -->
        <section class="-mt-[70px] relative z-[2]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-[30px]">
                    <!-- single feature -->
                    <div
                        class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../https://eccawe.com/backend/themes/default/education/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="https://eccawe.com/backend/themes/default/education/img/feature-1.svg" alt="feature"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-edblue">
                            <a href="#" class="hover:text-edpurple">Nursery Teacher Training
                            </a>
                        </h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">
                            Eligibility:- 10+2 | Duration:- One/Two Year
                        </p>
                        <a href="#" class="text-edblue hover:text-edpurple">
                            <span class="text-[14px]">
                                <i class="fa-solid fa-angle-right">
                                </i>
                            </span>
                            View More
                        </a>
                    </div>
                    <!-- single feature -->
                    <div
                        class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../https://eccawe.com/backend/themes/default/education/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="https://eccawe.com/backend/themes/default/education/img/feature-2.svg" alt="feature"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-edblue">
                            <a href="#" class="hover:text-edpurple">
                                Computer Teacher Training
                            </a>
                        </h4>
                        <p class="text-black group-hover:text-black mb-[18px]">
                            Eligibility:- 10th, 12th | Duration:- One Year
                        </p>
                        <a href="#" class="text-edblue hover:text-edpurple">
                            <span class="text-[14px]">
                                <i class="fa-solid fa-angle-right">
                                </i>
                            </span>
                            View More
                        </a>
                    </div>
                    <!-- single feature -->
                    <div
                        class="bg-[#FAF9F6] hover:bg-edyellow border-t-[7px] border-edyellow hover:border-edpurple duration-[400ms] p-[30px] sm:p-[25px] group relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-[url('../https://eccawe.com/backend/themes/default/education/img/faeture-bg.jpg')] before:mix-blend-hard-light before:opacity-0 before:duration-[400ms] hover:before:opacity-15">
                        <span class="icon">
                            <img src="https://eccawe.com/backend/themes/default/education/img/feature-3.svg" alt="feature"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[24px] xl:text-[22px] mb-[3px] text-edblue">
                            <a href="#" class="hover:text-edpurple">Beautician</a>
                        </h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">
                            Eligibility:- 10+2 | Duration:- One/Two Year
                        </p>
                        <a href="#" class="text-edblue hover:text-edpurple">
                            <span class="text-[14px]">
                                <i class="fa-solid fa-angle-right">
                                </i>
                            </span>
                            View More
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURES SECTION END -->
        {{-- Card section start  --}}
        <section class="card-section my-4">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Syllabus
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('user/syllabus') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Gallery
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('gallery') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                          
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Login
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('user-login') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 

                </div>
                <div class="row mt-4"> 
                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Result
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('result') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Final Exam
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('final-exam?type=final-exam') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                          
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                Admission
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="{{ url('adminssion?type=adminssion') }}"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Click Here
                            </a>
                        </div>
                    </div> 

                </div>
            </div>

        </section>
        {{-- Card section end --}}

        <!-- ABOUT SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col justify-between items-center gap-x-[60px] xl:gap-x-[40px] gap-y-[40px]">
                    <!-- img -->
                    <div class="max-w-[50%] md:max-w-full grow relative">
                        <img src="https://eccawe.com/backend/themes/default/education/img/students.jpg" alt="about image">
                        <img src="https://eccawe.com/backend/themes/default/education/img/about-img-vector.svg"
                            alt="vector" class="absolute -top-[25px] left-[25px] -z-[1] w-[90%] max-w-[100%]">
                    </div>
                    <!-- txt -->
                    <div class="max-w-[50%] md:max-w-full shrink-0 grow">
                        <h6 class="ed-section-sub-title">about us</h6>
                        <h2 class="ed-section-title mb-[9px]">
                            Welcome to Early Childhood Care & Women Education
                        </h2>
                        <p class="text-edgray">
                            Early Childhood Care & Women Education is registered under ruls
                            and regulation Of Govt Of India act XXI, 1860 by a group of
                            quite devoted highly qualified, experienced and Educational
                            expert student.
                        </p>
                        <!-- infos -->
                        <div
                            class="flex xs:flex-col gap-y-[15px] gap-x-[30px] xxl:gap-x-[20px] mt-[16px] xxs:mb-[30px] pb-[30px] border-b border-[#dbdbdb] mb-[26px]">
                            <!-- single info -->
                            <div
                                class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div
                                    class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="https://eccawe.com/backend/themes/default/education/img/icon/target.svg"
                                        alt="icon">
                                </div>
                                <!-- txt -->
                                <div>
                                    <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">
                                        Our Mission
                                    </h6>
                                    <p class="text-[16px] text-edgray">
                                        Aliquam erat volutpat nullam imperdiet
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex items-center lg:flex-col lg:items-start md:flex-row md:items-center gap-[20px] xl:gap-[15px]">
                                <div
                                    class="shrink-0 bg-edpurple h-[80px] xl:h-[70px] aspect-square rounded-[6px] flex items-center justify-center">
                                    <img src="https://eccawe.com/backend/themes/default/education/img/icon/book-light.svg"
                                        alt="icon">
                                </div>
                                <!-- txt -->
                                <div>
                                    <h6 class="font-semibold text-[18px] text-edblue mb-[5px]">
                                        Our Vision
                                    </h6>
                                    <p class="text-[16px] text-edgray">
                                        Ut vehiculadictumst maecenas ante.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-[24px] gap-y-[20px]"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->
        <!-- ADMISSION PROCESS SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-[#FAF9F6] relative z-[1]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex flex-col gap-x-[85px] items-start relative">
                    <!-- heading -->
                    <div
                        class="relative w-full before:absolute before:bottom-0 before:mb-[8%] before:left-0 before:bg-[url('../https://eccawe.com/backend/themes/default/education/img/admission-title-vector.svg')] before:bg-no-repeat before:bg-[length:100%_100%] before:w-[100%] before:h-[88px] before:pointer-events-none lg:before:hidden">
                        <div class="shrink-0 max-w-[290px]">
                            <h6 class="ed-section-sub-title">Admission</h6>
                            <h2 class="ed-section-title !text-[30px] pb-[42px] lg:pb-0 mb-[40px] lg:mb-[20px]">
                                Admission Process
                            </h2>
                            <a href="https://eccawe.com/online-admission" class="ed-btn">Admission Now
                            </a>
                        </div>
                    </div>
                    <!-- cards -->
                    <div
                        class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[24px] -mt-[140px] lg:mt-[25px] w-[66%] ml-auto lg:w-[100%]">
                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/admission-process-icon.svg"
                                    alt="admission process" class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                <a href="https://eccawe.com/online-admission" class="hover:text-edpurple">Request Info
                                </a>
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="https://eccawe.com/online-admission"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More
                            </a>
                        </div>
                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/admission-process-icon.svg"
                                    alt="admission process" class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                <a href="https://eccawe.com/online-admission" class="hover:text-edpurple">Apply Online
                                </a>
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="https://eccawe.com/online-admission"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More
                            </a>
                        </div>
                        <!-- single process -->
                        <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                            <span class="icon block mb-[13px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/admission-process-icon.svg"
                                    alt="admission process" class="mb-[11px]">
                            </span>
                            <h4 class="font-semibold text-[18px] mb-[5px] text-edblue">
                                <a href="#" class="hover:text-edpurple">Submit Form</a>
                            </h4>
                            <p class="text-edgray2 group-hover:text-black mb-[18px]">
                                Penatibus Et Magnis Dis Parturient.
                            </p>
                            <a href="https://eccawe.com/online-admission"
                                class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                                More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- vectors -->
            <div>
                <img src="https://eccawe.com/backend/themes/default/education/img/admission-vector-1.svg" alt="vector"
                    class="absolute -z-[1] top-[156px] left-0">
                <img src="https://eccawe.com/backend/themes/default/education/img/admission-vector-2.svg" alt="vector"
                    class="absolute -z-[1] bottom-[130px] right-[80px]">
            </div>
        </section>
        <!-- ADMISSION PROCESS SECTION END -->
        <!-- CTA SECTION START -->
        <section class="bg-edpurple relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col items-center gap-[60px] lg:gap-[40px] md:gap-y-[20px]">
                    <div class="grow md:pt-[60px]">
                        <h6 class="ed-section-sub-title ed-section-sub-title--white">
                            Excited to join? Hurry, admissions are closing fast!
                        </h6>
                        <h2 class="ed-section-title !text-white mb-[36px]">
                            The world keeps teaching, so never stop learning.
                            <span
                                class="font-normal text-[40px] xxl:text-[35px] xl:text-[30px] xs:text-[28px] xxs:text-[25px]">Student’s
                                & Mentors
                            </span>
                        </h2>
                        <div class="flex flex-wrap gap-[16px]">
                            <a href="https://eccawe.com/online-admission"
                                class="ed-btn !bg-edyellow !text-black hover:!bg-edblue hover:!text-white">Admission Open
                            </a>
                        </div>
                    </div>
                    <!-- image -->
                    <div class="shrink-0 relative z-[1] pr-[40px] lg:pr-0">
                        <img src="https://eccawe.com/backend/themes/default/education/img/offer.png" alt="image">
                        <img src="https://eccawe.com/backend/themes/default/education/img/cta-img-vector.svg"
                            alt="vector" class="absolute right-[0] lg:right-[-40px] top-[20px] -z-[1] max-w-[460px]">
                    </div>
                </div>
            </div>
            <!-- vector -->
            <div>
                <img src="https://eccawe.com/backend/themes/default/education/img/cta-vector-1.png" alt="vector"
                    class="absolute -z-[1] bottom-0 left-0 pointer-events-none">
                <img src="https://eccawe.com/backend/themes/default/education/img/cta-vector-2.png" alt="vector"
                    class="absolute -z-[1] top-0 right-0 pointer-events-none">
            </div>
        </section>
        <!-- CTA SECTION END -->
        <!-- PROGRAMS SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="flex flex-wrap items-center justify-between gap-x-[30px] gap-y-[15px] mb-[40px] xxs:mb-[30px]">
                    <div class="left">
                        <h6 class="ed-section-sub-title">programs</h6>
                        <h2 class="ed-section-title">Our Toppers</h2>
                    </div>
                    <!-- nav -->
                    <div
                        class="ed-program-slider-nav flex gap-[15px] *:w-[56px] *:h-[56px] *:rounded-full *:border *:border-[#808080]/20 *:text-black *:text-[18px]">
                        <button class="prev hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button class="next hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
                <!-- slider -->
                <div class="ed-program-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com//backend/themes/default/education/img/toper1.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com//backend/themes/default/education/img/toper2.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com//backend/themes/default/education/img/toper3.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com//backend/themes/default/education/img/toper5.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com//backend/themes/default/education/img/toper6.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/toper7.png"
                                    alt="image">
                            </div>
                        </div>
                        <!-- single program -->
                        <div class="swiper-slide">
                            <!-- img -->
                            <div class="mb-[30px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/toper8.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PROGRAMS SECTION END -->
    </main>


@stop
