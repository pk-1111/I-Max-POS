@extends('user.layouts.master')


@section('content')
    <div class="swiper mySwiper w-full  bg-[#f5f5f7]  py-16">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex flex-col md:flex-row  items-center  bg-black  text-center">
                <div class="z-10 flex flex-col items-center">

                    <h1 class="text-6xl font-bold mt-2 flex items-center justify-center ">

                        <div class="flex items-center">

                            <i class="fa-brands fa-apple"></i>

                            <span class="promax">
                                17ProMax</span>
                        </div>

                    </h1>


                          <form action="{{route('productDetails',1)}}" method="get">
                        @csrf
                           <button type="submit"
                        class="mt-10 border border-white text-white px-8 py-2 rounded-full hover:bg-white hover:text-black transition">Available
                        Now</button>
                    </form>


                    <div class="flex items-start justify-center gap-12 mt-5 text-center">

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-white mb-3">mCare Offers Included</span>

                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center">
                                    <div class="text-[#22c55e] text-4xl mb-1">
                                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M7 17S5 17 5 15c0-3.866 3.134-7 7-7s7 3.134 7 7c0 2-2 2-2 2" />
                                            <path d="M17 9l-5 5-5-5" />
                                        </svg>
                                    </div>
                                    <div class="leading-tight">
                                        <span class="block text-[#22c55e] font-bold text-xl uppercase">iMaxCare</span>
                                        <span
                                            class="block text-[#22c55e] font-bold text-xl uppercase tracking-tighter">Ultra</span>
                                        <span
                                            class="block text-[#22c55e] text-[10px] font-semibold uppercase tracking-widest border-t border-[#22c55e] mt-1">Protection</span>
                                    </div>
                                </div>

                                <div class="h-16 w-[1px] bg-gray-300"></div>

                                <div class="border-2 border-[#22c55e] px-1 py-1 p-2 text-center leading-none">
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400 py-1">Apple Limited Warranty</span>
                                    <span class="block text-[#22c55e] text-lg font-bold">+</span>
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400">iMaxCare Extended Warranty</span>
                                </div>
                            </div>
                        </div>

                        <div class="h-32 w-[1px] bg-gray-400 self-center"></div>

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-white mb-3">Trade-in Service</span>

                            <div class="flex flex-col items-center mt-2">
                                <span
                                    class="text-2xl font-black text-gray-200 tracking-tighter leading-none uppercase">Trade-In</span>
                                <div class="flex items-center gap-2">
                                    <span class="text-2xl font-black text-gray-500 tracking-tighter uppercase">Corner</span>
                                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="slideImage">
                    <img src="{{ asset('user/image/17promax-bg.jpg') }}" alt="iPhone17ProMax">
                </div>


            </div>
            <div class="swiper-slide flex flex-col md:flex-row  items-center  bg-black  text-center">
                <div class="z-10 flex flex-col  items-center">
                    <h2 class="text-xl slide-content font-medium text-gray-900">The thinnest iPhone ever.</h2>
                    <h1 class="text-6xl font-bold mt-2 flex items-center justify-center">
                        <i class="fa-brands logo_main fa-apple"></i>
                        <span class="promax ">MacbookPro</span>


                    </h1>
                    <p class="text-3xl mt-5">Outrageou Speed.Brilliant display.</p>
                    <p class="text-3xl">Pro without equal.</p>

                     <form action="{{route('productDetails',3)}}" method="get">
                        @csrf
                          <button
                        class="mt-10 border border-white text-white px-8 py-2 rounded-full hover:bg-white hover:text-black transition">Available
                        Now</button>
                    </form>

                    {{-- <div class="flex items-start bg-amber-50 justify-center gap-12 mt-5 text-center">

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-white mb-3">mCare Offers Included</span>

                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center">
                                    <div class="text-[#22c55e] text-4xl mb-1">
                                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M7 17S5 17 5 15c0-3.866 3.134-7 7-7s7 3.134 7 7c0 2-2 2-2 2" />
                                            <path d="M17 9l-5 5-5-5" />
                                        </svg>
                                    </div>
                                    <div class="leading-tight">
                                        <span class="block text-[#22c55e] font-bold text-xl uppercase">iMaxCare</span>
                                        <span
                                            class="block text-[#22c55e] font-bold text-xl uppercase tracking-tighter">Ultra</span>
                                        <span
                                            class="block text-[#22c55e] text-[10px] font-semibold uppercase tracking-widest border-t border-[#22c55e] mt-1">Protection</span>
                                    </div>
                                </div>

                                <div class="h-16 w-[1px] bg-gray-300"></div>

                                <div class="border-2 border-[#22c55e] px-1 py-1 p-2 text-center leading-none">
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400 py-1">Apple Limited Warranty</span>
                                    <span class="block text-[#22c55e] text-lg font-bold">+</span>
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400">iMaxCare Extended Warranty</span>
                                </div>
                            </div>
                        </div>

                        <div class="h-32 w-[1px] bg-gray-400 self-center"></div>

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-white mb-3">Trade-in Service</span>

                            <div class="flex flex-col items-center mt-2">
                                <span
                                    class="text-2xl font-black text-gray-200 tracking-tighter leading-none uppercase">Trade-In</span>
                                <div class="flex items-center gap-2">
                                    <span class="text-2xl font-black text-gray-500 tracking-tighter uppercase">Corner</span>
                                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>


                <div class="slideImage">
                    <img src="{{ asset('user/image/macbookPro.jpg') }}" class="z-10" alt="iPhone17ProMax">
                </div>


            </div>
            <div class="swiper-slide flex flex-col md:flex-row  items-center  bg-white  text-center">
                <div class="z-10 flex flex-col items-center">

                    <h1 class="text-6xl font-bold mt-2 flex items-center justify-center ">




                        <div class="flex items-center">


                            <i class="fa-brands fa-apple apple_icon"></i>

                            <span class="promax">
                                iPhone17</span>
                        </div>

                    </h1>
                    <button
                        class="mt-10 border border-black text-black px-8 py-2 rounded-full hover:bg-white hover:text-black transition">Available
                        Now</button>
                    <div class="flex items-start justify-center gap-12 mt-5 text-center">

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-black mb-3">mCare Offers Included</span>

                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center">
                                    <div class="text-[#22c55e] text-4xl mb-1">
                                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M7 17S5 17 5 15c0-3.866 3.134-7 7-7s7 3.134 7 7c0 2-2 2-2 2" />
                                            <path d="M17 9l-5 5-5-5" />
                                        </svg>
                                    </div>
                                    <div class="leading-tight">
                                        <span class="block text-black font-bold text-xl uppercase">iMaxCare</span>
                                        <span
                                            class="block text-black font-bold text-xl uppercase tracking-tighter">Ultra</span>
                                        <span
                                            class="block text-black text-[10px] font-semibold uppercase tracking-widest border-t border-[#22c55e] mt-1">Protection</span>
                                    </div>
                                </div>

                                <div class="h-16 w-[1px] bg-gray-300"></div>

                                <div class="border-2 border-[#22c55e] px-1 py-1 p-2 text-center leading-none">
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400 py-1">Apple Limited Warranty</span>
                                    <span class="block text-[#22c55e] text-lg font-bold">+</span>
                                    <span class="block text-[10px] font-bold uppercase">1 Year</span>
                                    <span class="block text-[8px] text-gray-400">iMaxCare Extended Warranty</span>
                                </div>
                            </div>
                        </div>

                        <div class="h-32 w-[1px] bg-gray-400 self-center"></div>

                        <div class="flex flex-col items-center">
                            <span class="text-[14px] text-black mb-3">Trade-in Service</span>

                            <div class="flex flex-col items-center mr-4 mt-2">
                                <span
                                    class="text-2xl font-black text-gray-200 tracking-tighter leading-none uppercase">Trade-In</span>
                                <div class="flex items-center gap-2">
                                    <span class="text-2xl font-black text-gray-500 tracking-tighter uppercase">Corner</span>
                                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="slideImage1">
                    <img src="{{ asset('user/image/iphone17.jpg') }}" alt="iPhone17ProMax">
                </div>


            </div>
        </div>

        <div class="swiper-button-next text-gray-400 after!text-2xl"></div>
        <div class="swiper-button-prev text-gray-400 after!text-2xl"></div>

        <div class="swiper-pagination"></div>
    </div>

    <div class="bg-gray-50 min-h-screen p-8 font-sans text-gray-800">

        <div class="grid grid-cols-2 md:grid-cols-6 gap-6 text-center mb-16">
            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/iphone16pxomax.jpg') }}" alt="iPhone" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPhone</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/ipad.jpg') }}" alt="iPad" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPad</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/applewatch.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">Apple Watch</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/promacbook.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">Macbook Pro</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/airpod.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">AirPods</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-32 flex items-center mb-2">
                    <img src="{{ asset('user/image/airtag.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">Accessories</p>
            </div>

        </div>

        <hr class="border-gray-300 my-10">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 mb-6 px-6">

            <div
                class="bg-gray-100 rounded-3xl group p-8 flex flex-col items-center text-center shadow-sm border border-gray-50 h-full">
                <h3 class="text-gray-800 font-semibold text-lg mb-8">We Accept Credit/Debit Card</h3>

                <div class="flex-grow flex items-center justify-center mb-8">
                    <img src="{{ asset('user/image/bank_card.jpg') }}"
                        class="w-full max-w-[240px] transition-transform duratio-500 group-hover:scale-110 h-auto object-contain"
                        alt="Credit Card">
                </div>

                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-2">Now Pay with Credit/Debit Card in Our Outlet</p>
                    <a href="#"
                        class="text-blue-500 text-sm font-medium hover:underline flex items-center justify-center">
                        Learn More <span class="ml-1">></span>
                    </a>
                </div>
            </div>

            <div
                class="bg-gray-100 rounded-3xl p-8 flex flex-col items-center text-center shadow-sm border border-gray-50 h-full">
                <h3 class="text-gray-800 font-semibold text-lg mb-8">Authorised Service Provider</h3>

                <div class="flex-grow flex flex-col items-center justify-center mb-8">
                    <h1 class="text-6xl font-bold text-gray-800 tracking-tight">iMaxCare</h1>
                    <div class="flex items-center mt-3  text-gray-600">
                        <i class="fab fa-apple text-black text-xl mr-2"></i>
                        <span class="text-xs font-medium uppercase tracking-wider">Authorised Service Provider</span>
                    </div>
                </div>

                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-2">Fixed your device with Authorised Service Provider</p>
                    <a href="#"
                        class="text-blue-500 text-sm font-medium hover:underline flex items-center justify-center">
                        Learn More <span class="ml-1">></span>
                    </a>
                </div>
            </div>

            <div
                class="bg-gray-100 rounded-3xl group p-8 flex flex-col items-center text-center shadow-sm border border-gray-50 h-full">
                <h3 class="text-gray-800 font-semibold text-lg mb-8">Apple Products For Business</h3>

                <div class="flex-grow flex items-center justify-center mb-8">
                    <img src="{{ asset('user/image/ipadair.jpg') }}"
                        class="w-full transition-transform duratio-500 group-hover:scale-110 max-w-[200px] h-auto object-contain"
                        alt="Business">
                </div>

                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-2">Grow your business with Apple Products</p>
                    <a href="#"
                        class="text-blue-500 text-sm font-medium hover:underline flex items-center justify-center">
                        Learn More <span class="ml-1">></span>
                    </a>
                </div>
            </div>

        </div>

        <section
            class="max-w-7xl mx-auto px-20 py-12 flex flex-col  bg-black rounded-sm  md:flex-row items-center justify-between gap-12">

            <div class="flex-1  space-y-6 text-center  md:text-left">
                <h1 class="text-3xl  md:text-5xl font-bold  text-white leading-tight">
                    iMax Wallet App
                </h1>
                <p class="text-lg text-white max-w-lg">
                    Get Up to 20% CashBack of your Spending at any mDrive outlet in Myanmar. Redeem your CashBack Instantly.
                </p>

                <button class="text-gray-400 font-medium hover:underline block pt-2">
                    Register iMax Wallet
                </button>

                <div class="pt-4">
                    <a href="#"
                        class="inline-block bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold px-8 py-4 rounded-full transition-all shadow-md">
                        Download From App Store
                    </a>
                </div>


            </div>

            <div class="flex-1 flex justify-center items-center">
                <div class="relative max-w-[320px]">
                    <img src="{{ asset('user/image/wallet.jpg') }}" alt="mDrive App Screenshot"
                        class="w-full h-auto drop-shadow-2xl" />
                </div>
            </div>

        </section>

       <form action="{{route('all_ProductsPage')}}" method="get">
         <h1 class="mt-3 text-black text-3xl">Trending Products</h1>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center mb-5 mt-15">

           @foreach ($trendingProducts as $item)
               <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-60 flex items-center mb-2">
                    <img src="{{ asset('product/' .$item->image) }}" alt="iPhone" class="max-h-full group-hover:hidden">
                    <img src="https://mdriveasia.com/cdn/shop/files/iPad_Cellular_Family_Screen_1267929a-6f40-42c2-926c-c3b7657be440_372x.png?v=1720000509" alt="iPhone" class="max-h-full hidden group-hover:block">

                </div>
                <p class="font-medium group-hover:text-blue-600">{{$item->name}}</p>
                <p class="text-xl">{{$item->price}} MMK</p>

            </div>
           @endforeach


              <div class="col-span-full flex justify-center ">
                <button class="mt-10  border borderd-gray-800 rounded-sm text-gray-800 px-10 py-2 text-sm font-medium hover:bg-gray-800 hover:text-white transition-colors duration-300">VIEW
                    ALL</button></div>
             </div>
       </form>


        {{-- <div class="grid grid-cols-6 gap-4">
              <div class="col-span-2 col-start-2 col-end-2 ">
                <button class="mt-10  border borderd-gray-800 rounded-sm text-gray-800 px-10 py-2 text-sm font-medium hover:bg-gray-800 hover:text-white transition-colors duration-300">VIEW
                    ALL</button></div>

        </div> --}}

            </div>
    </div>
@endsection

@section('swiper')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            autoplay: {
                delay: 40000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                nextEl: ".swiper-button-prev",

            },
        });
    </script>
@endsection













  {{-- <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-60 flex items-center mb-2">
                    <img src="{{ asset('user/image/ipad.jpg') }}" alt="iPad" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPhone 17Pro</p>
                <p class="text-xl">5,619,000 MMK</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-60 flex items-center mb-2">
                    <img src="{{ asset('user/image/applewatch.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPhone 17Pro</p>
                <p class="text-xl">5,619,000 MMK</p>


                <button
                    class="mt-10  border borderd-gray-800 rounded-sm text-gray-800 px-10 py-2 text-sm font-medium hover:bg-gray-800 hover:text-white transition-colors duration-300">VIEW
                    ALL</button>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-60 flex items-center mb-2">
                    <img src="{{ asset('user/image/macbookpro.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPhone 17Pro</p>
                <p class="text-xl">5,619,000 MMK</p>
            </div>

            <div class="flex flex-col items-center group cursor-pointer">
                <div class="h-60 flex items-center mb-2">
                    <img src="{{ asset('user/image/airpod.jpg') }}" alt="Apple Watch" class="max-h-full">
                </div>
                <p class="font-medium group-hover:text-blue-600">iPhone 17Pro</p>
                <p class="text-xl">5,619,000 MMK</p>
            </div> --}}

