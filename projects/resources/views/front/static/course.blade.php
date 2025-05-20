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

    @include('front.layouts.banner')



    <!-- COURSE GRID SECTION START -->
            <div class="py-[120px] xl:py-[80px] md:py-[60px]">
                <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                    <div class="grid grid-cols-3 md:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/nursery.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Nursery Teacher Training
                                </a
                >
                            </h5>
                            <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/computer-training.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Computer Teacher Training
                                </a
                >
                                <p>Eligibility:- 10th, 12th | Duration:- One Year</p>
                            </h5>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                        <!-- single course card -->
                        <div class="ed-2-single-course mix personal-skill border border-[#e5e5e5] rounded-[10px] p-[20px] group">
                            <!-- course image  -->
                            <div class="relative overflow-hidden rounded-[10px] mb-[24px]">
                                <img src="https://eccawe.com/backend/themes/default/education/img/beautician.jpg" alt="Course Image" class="aspect-[330/223] w-full object-cover group-hover:scale-110">
                            </div>
                            <!-- course infos -->
                            <!-- course title -->
                            <h5 class="font-semibold text-[20px] text-edblue mb-[23px]">
                                <a href="course-details.html" class="hover:text-edpurple">Beautician
                                </a
                >
                                <p>Eligibility:- 10+2 | Duration:- One/Two Year</p>
                            </h5>
                            <!-- course stats -->
                            <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[10px]"></div>
                            <!-- course footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE GRID SECTION END -->

@stop
