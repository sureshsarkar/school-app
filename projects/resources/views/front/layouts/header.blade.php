   <div class="ed-overlay group">
       <div
           class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto">
       </div>
   </div>
   <!-- cart -->
   <div class="ed-cart-bar group">
       <div
           class="w-[420px] max-w-full fixed z-[100] right-0 top-0 h-full bg-white flex flex-col translate-x-[100%] duration-[400ms] group-[.active]:translate-x-0">
           <!-- heading -->
           <div class="flex items-center justify-between px-[25px] border-b border-edgray/20 pb-[23px] pt-[22px]">
               <h5 class="text-[20px]">My Cart List</h5>
               <h6>(03 Items)</h6>
           </div>
           <!-- cart items -->
           <div>
               <!-- single cart item -->
               <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                   <img src="{{ asset('front/images/cart-item-1.jpg') }}" alt="Cart Item Image"
                       class="rounded-[10px] shrink-0">
                   <div class="grow">
                       <h6 class="font-medium text-[18px] text-edblue">
                           <a href="course-details.html" class="hover:text-edpurple">Web Development
                           </a>
                       </h6>
                       <h6 class="font-medium text-edgray">$15.00</h6>
                   </div>
                   <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">
                       x
                   </button>
               </div>
               <!-- single cart item -->
               <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                   <img src="{{ asset('front/images/cart-item-2.jpg') }}" alt="Cart Item Image"
                       class="rounded-[10px] shrink-0">
                   <div class="grow">
                       <h6 class="font-medium text-[18px] text-edblue">
                           <a href="course-details.html" class="hover:text-edpurple">Digital Marketing
                           </a>
                       </h6>
                       <h6 class="font-medium text-edgray">$15.00</h6>
                   </div>
                   <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">
                       x
                   </button>
               </div>
               <!-- single cart item -->
               <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                   <img src="{{ asset('front/images/cart-item-3.jpg') }}" alt="Cart Item Image"
                       class="rounded-[10px] shrink-0">
                   <div class="grow">
                       <h6 class="font-medium text-[18px] text-edblue">
                           <a href="course-details.html" class="hover:text-edpurple">WordPress Development
                           </a>
                       </h6>
                       <h6 class="font-medium text-edgray">$15.00</h6>
                   </div>
                   <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">
                       x
                   </button>
               </div>
           </div>
           <!-- cart bottom -->
           <div class="mt-auto px-[25px] mb-[30px]">
               <div class="flex items-center justify-between font-medium text-[18px] text-edblue mb-[33px]">
                   <span>Total</span>
                   <span>$999</span>
               </div>
               <div class="space-y-[15px]">
                   <a href="#"
                       class="ed-btn w-full !rounded-[10px] !bg-transparent border border-edblue !text-edblue hover:!bg-edblue hover:!text-white">Proceed
                       to checkout
                   </a>
                   <a href="#" class="ed-btn w-full !rounded-[10px]">Proceed to checkout
                   </a>
               </div>
           </div>
       </div>
   </div>
   <!-- search -->
   <div class="ed-search group">
       <form action="#"
           class="bg-white fixed z-[100] top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] h-[100px] md:h-[70px] xxs:h-[50px] w-[1224px] max-w-[95%] flex gap-[10px] rounded-full overflow-hidden px-[40px] xxs:px-[20px] pointer-events-none opacity-0 group-[.active]:pointer-events-auto group-[.active]:opacity-100 duration-[400ms]">
           <input type="search" name="ed-search" placeholder="Search Here..."
               class="bg-transparent w-full focus:outline-none">
           <button class="text-[25px] md:text-[22px] xxs:text-[20px]">
               <i class="fa-solid fa-magnifying-glass"></i>
           </button>
       </form>
   </div>
   <!-- sidebar -->
   <div class="ed-sidebar">
       <div
           class="translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-white h-full z-[100] overflow-auto">
           <!-- heading -->
           <div class="ed-sidebar-heading p-[20px] lg:p-[20px] border-b border-edgray/20">
               <div class="logo flex justify-between items-center">
                   <a href="index.html">
                       <img src="{{ asset('front/images/logo.png') }}" alt="logo">
                   </a>
                   <button type="button"
                       class="ed-sidebar-close-btn border border-edgray/20 w-[45px] aspect-square shrink-0 text-black text-[22px] rounded-full hover:text-edpurple">
                       <i class="fa-solid fa-xmark"></i>
                   </button>
               </div>
           </div>
           <!-- mobile menu -->
           <div class="ed-header-nav-in-mobile"></div>
       </div>
   </div>

   <!-- HEADER SECTION START -->
   <header
       class="absolute z-[99] top-0 inset-x-[100px] xxl:inset-x-[30px] xl:inset-x-0 bg-white rounded-bl-[10px] rounded-br-[10px]">
       <!-- top header -->
       <div class="bg-edblue flex items-center justify-between lg:justify-center lg:gap-x-[20px]">
           <!-- contacts -->
           <div
               class="flex items-center gap-x-[32px] xl:gap-x-[15px] gap-y-[6px] py-[18px] pl-[30px] xl:pl-[10px] lg:pl-0 lg:order-2 sm:pt-0 sm:pb-[10px] xl:hidden">
               <!-- single contact -->
               <a href="mailto:info@example.com" class="flex items-center gap-x-[10px] font-light text-white/80">
                   <span class="icon shrink-0 xl:hidden">
                       <img src="{{ asset('front/images/icon/mail.svg') }}" alt="icon">
                   </span>
                   <span>info@example.com</span>
               </a>
               <!-- single contact -->
               <a href="tel:+20866660112" class="flex items-center gap-x-[10px] font-light text-white/80">
                   <span class="icon shrink-0 xl:hidden">
                       <img src="{{ asset('front/images//icon/phone.svg') }}" alt="icon">
                   </span>
                   <span>+208-6666-0112</span>
               </a>
           </div>
           <!-- notice -->
           <!-- actions -->
           <div class="shrink-0 flex items-center gap-x-[30px] xl:gap-x-[15px] text-white lg:order-3 sm:hidden">
               <div class="flex gap-x-[30px] xl:gap-x-[15px]">
                   <a href="{{ url('user-login') }}" class="flex items-center gap-x-[10px] font-light text-white/80">
                       <span class="icon shrink-0">
                           <img src="{{ asset('front/images/icon/avatar.svg') }}" alt="icon">
                       </span>
                       Login
                   </a>
               </div>
           </div>
       </div>
       <!-- bottom header -->
       <div class="px-[30px] xxl:px-[15px] lg:px-[20px] py-[28px] lg:py-[18px] flex justify-between to-be-fixed">
           <div class="logo xxs:max-w-[40%]">
               <a href="{{ url('') }}">
                   <img src="{{ asset($setting_data['header_logo'] ?? 'front/images/logo.png') }}" alt="logo"
                       class="logo">
               </a>
           </div>
           <div class="flex lg:items-center lg:gap-[60px] xxs:gap-[30px]">
               <div class="flex items-center gap-[100px] xl:gap-[30px] lg:gap-y-0">
                   <!-- nav -->
                   <div class="ed-header-nav-container">
                       <ul
                           class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                           <li>
                               <a href="{{ url('') }}">Home</a>
                           </li>
                           <li>
                               <a href="{{ url('about-us') }}">About us</a>
                           </li>
                           <li>
                               <a href="{{ url('courses') }}">Courses</a>
                           </li>
                           <li>
                               <a href="{{ url('gallery') }}">Gallery</a>
                           </li>
                           <li>
                               <a href="{{ url('franchise') }}">Franchise</a>
                           </li>
                           <li>
                               <a href="{{ url('contact-us') }}">Contact</a>
                           </li>
                       </ul>
                   </div>
                   <!-- right actions -->
                   <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                       <a href="#" class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]">Admission
                       </a>
                   </div>
                   <!-- right actions -->
                   @if (Auth::guard('employee')->user())
                     
                       <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                           <a href="{{ url('user/profile') }}"
                               class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]"><i class="fa fa-user"></i>
                           </a>
                       </div>
                         <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                           <a href="{{ url('user/logout') }}"
                               class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]"><i class="fa fa-sign-out"></i>
                           </a>
                       </div>
                   @endif
               </div>
               <!-- mobile menu button -->
               <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-edblue text-[18px]">
                   <i class="fa-solid fa-bars"></i>
               </button>
           </div>
       </div>
   </header>
   <!-- HEADER SECTION END -->
