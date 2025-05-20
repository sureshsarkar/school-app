@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)
@section('logo', $data->image)
@section('header-section')
    {!! $data->header_section !!}
@stop
<?php
error_reporting(0);
?>
@section('footer-section')
    {!! $data->footer_section !!}
@stop
@section('container')
    @php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp
    <!-- start banner sec -->
    @include('front.layouts.banner')
    <!-- end banner sec -->

    <!--======================================contact detail sec start======================================-->
    
    <!-- CONTACT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
                <!-- left side contact infos -->
                <div class="rounded-[16px] overflow-hidden">
                    <div class="bg-edpurple p-[40px] sm:p-[30px] xxs:p-[20px] space-y-[24px] text-[16px]">
                        <!-- single contact info -->
                        <div
                            class="flex flex-wrap xxs:flex-col items-center xxs:items-start gap-[20px] gap-y-[10px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                            <span
                                class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                                <img src="https://eccawe.com/backend/themes/default/education/img/icon/call-msg.svg"
                                    alt="icon">
                            </span>
                            <div class="txt">
                                <span class="font-normal">Call Us 7/24</span>
                                <h4 class="font-medium text-[24px] xxs:text-[22px]">
                                    <a href="tel:+208-555-0112">+91 870 858 8893</a>
                                </h4>
                            </div>
                        </div>
                        <!-- single contact info -->
                        <div
                            class="flex flex-wrap xxs:flex-col items-center xxs:items-start gap-[20px] gap-y-[10px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                            <span
                                class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                                <img src="https://eccawe.com/backend/themes/default/education/img/icon/mail-at.svg"
                                    alt="icon">
                            </span>
                            <div class="txt">
                                <span class="font-normal">Any Quiery Send me a mail</span>
                                <h4 class="font-medium text-[24px] xxs:text-[22px]">
                                    <a href="mailto:amritantt@gmail.com">
                                        amritantt@gmail.com
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- video cover -->
                    <div class="relative">
                        <img src="https://eccawe.com/backend/themes/default/education/img/contact-eccawe.jpg"
                            alt="video cover" class="w-full brightness-[80%]">
                    </div>
                </div>
                <!-- right side contact form -->
                <div>
                    <h2
                        class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-semibold text-edblue mb-[7px]">
                        Ready to Get Started?
                    </h2>
                    <form action="#" class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                        <div>
                            <label for="ed-contact-name" class="font-lato font-semibold text-edblue block mb-[12px]">Your
                                Name*
                            </label>
                            <input type="text" name="name" id="ed-contact-name" placeholder="Your Name"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>
                        <div>
                            <label for="ed-contact-email" class="font-lato font-semibold text-edblue block mb-[12px]">Your
                                Email*
                            </label>
                            <input type="email" name="email" id="ed-contact-email" placeholder="Your Email"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>
                        <div class="col-span-2 xxs:col-span-1">
                            <label for="ed-contact-message" class="font-lato font-semibold text-edblue block mb-[12px]">Your
                                Message*
                            </label>
                            <textarea name="message" id="ed-contact-message" placeholder="Your Message"
                                class="border border-[#ECECEC] h-[145px] p-[20px] rounded-[4px] w-full focus:outline-none"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue">
                                Send Message
                                <span class="icon pl-[10px]">
                                    <i class="fa-solid fa-arrow-right-long">
                                    </i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
    <!--======================================contact detail sec end======================================-->



@stop
