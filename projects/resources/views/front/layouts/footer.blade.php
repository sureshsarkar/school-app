 <!-- FOOTER SECTION START -->
 <footer
     class="bg-edblue relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('../https://eccawe.com/backend/themes/default/education/img/footer-bg.jpg')] before:opacity-[7%] before:bg-no-repeat before:bg-cover before:bg-center text-white">
     <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
         <!-- footer top -->
         <div class="flex flex-wrap justify-between gap-[35px] pt-[100px] pb-[58px] border-b border-white/20">
             <!-- footer about -->
             <div class="max-w-[370px] xxs:max-w-full">
                 <a href="{{ url('') }}" class="inline-block mb-[23px]">
                     <img src="https://eccawe.com/backend/themes/default/education/img/logo-light.png" alt="logo">
                 </a>
                 <p class="text-[#D9D9D9] mb-[19px]">
                   {{ $setting_data['about'] }}
                 </p>
                 <ul class="space-y-[17px]">
                     <li class="flex items-center gap-[8px]">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/call-icon-yellow.svg"
                                 alt="icon">
                         </span>
                         <a href="tel:{{ $setting_data['mobile'] ?? ''}}" class="hover:text-edyellow">{{ $setting_data['mobile'] ?? ''}}
                         </a>
                     </li>
                     <li class="flex items-center gap-[8px]">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/message-yellow.svg"
                                 alt="icon">
                         </span>
                         <a href="mailto:{{ $setting_data['email'] ?? '' }}" class="hover:text-edyellow">{{ $setting_data['email'] ?? '' }}
                         </a>
                     </li>
                 </ul>
             </div>
             <!-- footer widget -->
             <div>
                 <h6
                     class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">
                     Quick Links
                 </h6>
                 <div class="space-y-[18px]">
                     <a href="{{ url('about-us') }}"
                         class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Edutics About
                     </a>
                     <a href="{{ url('contact-us') }}"
                         class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Contact Us
                     </a>
                     <a href="{{ url('blogs') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Blog & News
                     </a>
                     <a href="{{ url('faqs') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         FAQ’S
                     </a>
                     <a href="{{ url('login') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Login / Register
                     </a>
                 </div>
             </div>
             <!-- footer widget -->
             <div>
                 <h6
                     class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">
                     Main Navigation
                 </h6>
                 <div class="space-y-[18px]">
                     <a href="{{ url('#') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Admission
                     </a>
                     <a href="{{ url('#') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Research
                     </a>
                     <a href="{{ url('#') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Academics
                     </a>
                     <a href="{{ url('#') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Student Life
                     </a>
                     <a href="{{ url('#') }}" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow">
                         <span class="icon">
                             <img src="https://eccawe.com/backend/themes/default/education/img/double-arrow.svg"
                                 alt="icon">
                         </span>
                         Conferences
                     </a>
                 </div>
             </div>
             <!-- footer widget -->
             <div class="max-w-[300px]">
                 <h6
                     class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">
                     Newsletter
                 </h6>
                 <div>
                     <p class="text-[#d9d9d9]/80 mb-[21px]">
                         Sign up to seargin weekly newsletter to get the latest updates.
                     </p>
                     <!-- newsltr form -->
                     <form class="border border-white/20 rounded-full flex h-[56px] p-[4px]">
                         <input type="email" name="email" placeholder="Enter Email Address"
                             class="text-[14px] bg-transparent w-full rounded-full focus:outline-none px-[20px]">
                         <button
                             class="bg-edyellow rounded-full aspect-square flex items-center justify-center hover:bg-edpurple">
                             <img src="https://eccawe.com/backend/themes/default/education/img/icon/submit-icon.svg"
                                 alt="icon">
                         </button>
                     </form>
                     <!-- social links -->
                     <div class="flex gap-[20px] mt-[30px]">
                         <span
                             class="pl-[30px] font-medium text-[#d9d9d9] relative before:absolute before:left-0 before:top-[50%] before:-translate-y-[50%] before:h-[1px] before:w-[20px] before:bg-[#d9d9d9]">Follow
                             on
                         </span>
                         <span class="inline-flex gap-[16px] text-[#d9d9d9]">
                             <a href="{{ $setting_data['facebook'] ?? '' }}" class="hover:text-edyellow">
                                 <i class="fa-brands fa-facebook-f">
                                 </i>
                             </a>
                             <a href="{{ $setting_data['twitter'] ?? '' }}" class="hover:text-edyellow">
                                 <i class="fa-brands fa-x-twitter">
                                 </i>
                             </a>
                             <a href="{{ $setting_data['linkedin'] ?? '' }}" class="hover:text-edyellow">
                                 <i class="fa-brands fa-linkedin-in">
                                 </i>
                             </a>
                             <a href="{{ $setting_data['youtube'] ?? '' }}" class="hover:text-edyellow">
                                 <i class="fa-brands fa-youtube">
                                 </i>
                             </a>
                         </span>
                     </div>
                 </div>
             </div>
         </div>
         <!-- footer bottom -->
         <div class="flex flex-wrap items-center justify-between gap-[15px] pt-[20px] pb-[50px] text-[#d9d9d9]">
             {!! $setting_data['copyright'] ?? '' !!}
             <div class="flex flex-wrap gap-[40px] xxs:gap-[15px]">
                 <a href="{{ url('#') }}" class="hover:text-edyellow">Terms & Conditions</a>
                 <a href="{{ url('#') }}" class="hover:text-edyellow">Privacy Policy</a>
             </div>
         </div>
     </div>
 </footer>
 <!-- FOOTER SECTION END -->

 @include('front.layouts.js')

 @yield('js')
