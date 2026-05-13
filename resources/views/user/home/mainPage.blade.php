@extends('user.layouts.master')

@section('content')
    <div class="swiper mySwiper w-full bg-[#f5f5f7] py-10 md:py-16">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex flex-col md:flex-row items-center bg-black text-center overflow-hidden">
                <div class="z-10 flex flex-col items-center flex-1 px-6 py-10 md:py-0">
                    <h1
                        class="text-5xl md:text-7xl font-bold mt-2 flex items-center justify-center text-white tracking-tight">
                        <div class="flex items-center">
                            <i class="fa-brands fa-apple mr-3"></i>
                            <span class="promax">17ProMax</span>
                        </div>
                    </h1>

                    <form action="{{ route('productDetails', 1) }}" method="get">
                        @csrf
                        <button type="submit"
                            class="mt-8 border-2 border-white text-white px-10 py-2.5 hover:scale-105 transition-all duration-300 rounded-full hover:bg-white hover:text-black font-semibold uppercase text-sm tracking-widest">
                            Available Now
                        </button>
                    </form>

                    <div class="flex items-start justify-center gap-8 md:gap-12 mt-10 text-center">
                        <div class="flex flex-col items-center">
                            <span class="text-[12px] text-gray-400 mb-4 uppercase tracking-widest font-medium">mCare Offers
                                Included</span>
                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center text-[#22c55e]">
                                    <svg class="w-12 h-12 mb-1" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <path d="M7 17S5 17 5 15c0-3.866 3.134-7 7-7s7 3.134 7 7c0 2-2 2-2 2" />
                                        <path d="M17 9l-5 5-5-5" />
                                    </svg>
                                    <div class="leading-tight">
                                        <span class="block font-black text-xl uppercase tracking-tighter">iMaxCare</span>
                                        <span class="block font-black text-xl uppercase tracking-tighter">Ultra</span>
                                        <span
                                            class="block text-[9px] font-bold uppercase tracking-[0.2em] border-t border-[#22c55e]/30 mt-1 pt-1">Protection</span>
                                    </div>
                                </div>
                                <div class="h-16 w-[1px] bg-white/20"></div>
                                <div class="border-2 border-[#22c55e] px-3 py-2 text-center rounded-sm">
                                    <span class="block text-[10px] font-bold uppercase text-white italic">1 Year</span>
                                    <span class="block text-[8px] text-gray-400 py-1 leading-none italic">Apple
                                        Warranty</span>
                                    <span class="block text-[#22c55e] text-lg font-bold leading-none">+</span>
                                    <span class="block text-[10px] font-bold uppercase text-white italic">1 Year</span>
                                    <span class="block text-[8px] text-gray-400 leading-none italic">Extended
                                        Warranty</span>
                                </div>
                            </div>
                        </div>

                        <div class="h-32 w-[1px] bg-white/20 self-center hidden md:block"></div>

                        <div class="flex flex-col items-center">
                            <span class="text-[12px] text-gray-400 mb-4 uppercase tracking-widest font-medium">Trade-in
                                Service</span>
                            <div class="flex flex-col items-center mt-2 group cursor-pointer italic">
                                <span
                                    class="text-2xl font-black text-white tracking-tighter leading-none uppercase italic">Trade-In</span>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-2xl font-black text-gray-500 tracking-tighter uppercase italic">Corner</span>
                                    <svg class="w-6 h-6 text-gray-400 group-hover:text-white transition" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideImage flex-1 w-full h-full">
                    <img src="{{ asset('user/image/17promax-bg.jpg') }}" alt="iPhone17ProMax"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div class="swiper-slide flex flex-col md:flex-row items-center bg-black text-center overflow-hidden">
                <div class="z-10 flex flex-col items-center flex-1 px-6 py-10 md:py-0">
                    <h2 class="text-lg font-medium text-gray-400 tracking-wide">The thinnest iPhone ever.</h2>
                    <h1
                        class="text-5xl md:text-7xl font-bold mt-2 flex items-center justify-center text-white tracking-tight">
                        <i class="fa-brands fa-apple mr-3"></i>
                        <span class="promax">MacbookPro</span>
                    </h1>
                    <p class="text-2xl md:text-3xl mt-5 text-gray-300 font-light">Outrageous Speed. Brilliant display.</p>
                    <p class="text-xl md:text-2xl text-gray-400">Pro without equal.</p>

                    <form action="{{ route('productDetails', 5) }}" method="get">
                        @csrf
                        <button
                            class="mt-10 border-2 border-white text-white px-10 py-2.5 hover:scale-105 transition-all duration-300 rounded-full hover:bg-white hover:text-black font-semibold uppercase text-sm tracking-widest">
                            Available Now
                        </button>
                    </form>
                </div>
                <div class="slideImage flex-1 w-full h-full">
                    <img src="{{ asset('user/image/macbookPro.jpg') }}" class="w-full h-full object-cover" alt="MacbookPro">
                </div>
            </div>

            <div class="swiper-slide flex flex-col md:flex-row items-center bg-white text-center overflow-hidden">
                <div class="z-10 flex flex-col items-center flex-1 px-6 py-10 md:py-0">
                    <h1
                        class="text-5xl md:text-7xl font-bold mt-2 flex items-center justify-center text-black tracking-tight">
                        <div class="flex items-center">
                            <i class="fa-brands fa-apple mr-3"></i>
                            <span class="promax">iPhone17</span>
                        </div>
                    </h1>

                    <form action="{{ route('productDetails', 9) }}" method="get">
                        @csrf
                        <button
                            class="mt-10 border-2 border-gray text-black px-10 py-2.5 hover:scale-105 transition-all duration-300 rounded-full hover:bg-white hover:text-black font-semibold uppercase text-sm tracking-widest">
                            Available Now
                        </button>
                    </form>

                    <div class="flex items-start justify-center gap-8 md:gap-12 mt-10 text-center">
                        <div class="flex flex-col items-center">
                            <span class="text-[12px] text-gray-500 mb-4 uppercase tracking-widest font-medium">mCare Offers
                                Included</span>
                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center text-[#22c55e]">
                                    <svg class="w-12 h-12 mb-1" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <path d="M7 17S5 17 5 15c0-3.866 3.134-7 7-7s7 3.134 7 7c0 2-2 2-2 2" />
                                        <path d="M17 9l-5 5-5-5" />
                                    </svg>
                                    <div class="leading-tight">
                                        <span
                                            class="block text-black font-black text-xl uppercase tracking-tighter">iMaxCare</span>
                                        <span
                                            class="block text-black font-black text-xl uppercase tracking-tighter">Ultra</span>
                                        <span
                                            class="block text-black text-[9px] font-bold uppercase tracking-[0.2em] border-t border-[#22c55e] mt-1 pt-1">Protection</span>
                                    </div>
                                </div>
                                <div class="h-16 w-[1px] bg-gray-200"></div>
                                <div class="border-2 border-[#22c55e] px-3 py-2 text-center rounded-sm">
                                    <span class="block text-[10px] font-bold uppercase text-black italic">1 Year</span>
                                    <span class="block text-[8px] text-gray-500 py-1 leading-none italic">Apple
                                        Warranty</span>
                                    <span class="block text-[#22c55e] text-lg font-bold leading-none">+</span>
                                    <span class="block text-[10px] font-bold uppercase text-black italic">1 Year</span>
                                    <span class="block text-[8px] text-gray-500 leading-none italic">Extended
                                        Warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-32 w-[1px] bg-gray-200 self-center hidden md:block"></div>
                        <div class="flex flex-col items-center">
                            <span class="text-[12px] text-gray-500 mb-4 uppercase tracking-widest font-medium">Trade-in
                                Service</span>
                            <div class="flex flex-col items-center mt-2 italic">
                                <span
                                    class="text-2xl font-black text-black tracking-tighter leading-none uppercase italic">Trade-In</span>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-2xl font-black text-gray-400 tracking-tighter uppercase italic">Corner</span>
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideImage flex-1 w-full h-full">
                    <img src="{{ asset('user/image/iphone17.jpg') }}" alt="iPhone17" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="swiper-button-prev !text-white md:!text-gray-400 hover:!text-white after:!text-xl"></div>
        <div class="swiper-button-next !text-white md:!text-gray-400 hover:!text-white after:!text-xl"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="bg-[#fbfbfd] min-h-screen p-4  md:p-8 font-sans">
        <div class="grid grid-cols-2 md:grid-cols-6 gap-6   text-center mb-16 max-w-7xl mx-auto">
            @php
                $categories = [
                    ['img' => 'iphone16pxomax.jpg', 'name' => 'iPhone', 'route' => 'iphoneShop'],
                    ['img' => 'ipad.jpg', 'name' => 'iPad', 'route' => 'ipadShop'],
                    ['img' => 'applewatch.jpg', 'name' => 'Apple Watch', 'route' => 'iWatchShop'],
                    ['img' => 'promacbook.jpg', 'name' => 'Macbook Pro', 'route' => 'macbookShop'],
                    ['img' => 'airpod.jpg', 'name' => 'AirPods', 'route' => 'airpodsShop'],
                    ['img' => 'airtag.jpg', 'name' => 'Accessories', 'route' => 'accessoriesShop'],
                ];
            @endphp
            @foreach ($categories as $cat)
                <a href="{{ route($cat['route']) }}">
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div
                            class="h-24 md:h-32 flex items-center mb-4 transition-transform duration-500 group-hover:scale-110">
                            <img src="{{ asset('user/image/' . $cat['img']) }}" alt="{{ $cat['name'] }}"
                                class="max-h-full object-contain">
                        </div>
                        <p class="text-sm font-semibold text-gray-600 group-hover:text-blue-600 transition">
                            {{ $cat['name'] }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>

        <hr class="border-gray-200 max-w-7xl mx-auto my-10">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 mb-20 px-4 max-w-7xl mx-auto">
            <div
                class="bg-white rounded-[2rem] group p-10 flex flex-col items-center text-center shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                <h3 class="text-gray-900 font-bold text-xl mb-8">We Accept <br>Credit/Debit Card</h3>
                <div class="flex-grow flex items-center justify-center mb-8">
                    <img src="{{ asset('user/image/bank_card.jpg') }}"
                        class="w-full max-w-[200px] transition-transform duration-700 group-hover:scale-110 h-auto object-contain"
                        alt="Credit Card">
                </div>
                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-4">Pay securely with any major card at our outlets</p>
                    <a href="#"
                        class="text-blue-600 text-sm font-bold hover:underline flex items-center justify-center">Learn More
                        <i class="fa-solid fa-chevron-right ml-1.5 text-[10px]"></i></a>
                </div>
            </div>

            <div
                class="bg-white rounded-[2rem] p-10 flex flex-col items-center text-center shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                <h3 class="text-gray-900 font-bold text-xl mb-8">Authorised <br>Service Provider</h3>
                <div class="flex-grow flex flex-col items-center justify-center mb-8">
                    <h1 class="text-5xl font-black text-gray-900 tracking-tighter leading-none">iMaxCare</h1>
                    <div
                        class="flex items-center mt-4 text-gray-500 bg-gray-50 px-4 py-1 rounded-full border border-gray-100">
                        <i class="fab fa-apple text-black mr-2"></i>
                        <span class="text-[10px] font-bold uppercase tracking-widest">Authorised Support</span>
                    </div>
                </div>
                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-4">Official Apple repairs and genuine parts</p>
                    <a href="#"
                        class="text-blue-600 text-sm font-bold hover:underline flex items-center justify-center">Learn More
                        <i class="fa-solid fa-chevron-right ml-1.5 text-[10px]"></i></a>
                </div>
            </div>

            <div
                class="bg-white rounded-[2rem] group p-10 flex flex-col items-center text-center shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                <h3 class="text-gray-900 font-bold text-xl mb-8">Apple Products <br>For Business</h3>
                <div class="flex-grow flex items-center justify-center mb-8">
                    <img src="{{ asset('user/image/ipadair.jpg') }}"
                        class="w-full transition-transform duration-700 group-hover:scale-110 max-w-[180px] h-auto object-contain"
                        alt="Business">
                </div>
                <div class="mt-auto">
                    <p class="text-gray-500 text-sm mb-4">Boost your productivity with the Apple ecosystem</p>
                    <a href="#"
                        class="text-blue-600 text-sm font-bold hover:underline flex items-center justify-center">Learn More
                        <i class="fa-solid fa-chevron-right ml-1.5 text-[10px]"></i></a>
                </div>
            </div>
        </div>

        <section
            class="max-w-7xl mx-auto px-6 md:px-20 py-16 flex flex-col bg-black rounded-[2.5rem] md:flex-row items-center justify-between gap-12 overflow-hidden shadow-2xl mb-20">
            <div class="flex-1 space-y-6 text-center md:text-left z-10">
                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight">iMax Wallet App</h1>
                <p class="text-lg text-gray-300 max-w-lg">Get Up to <span class="text-white font-bold text-2xl">20%
                        CashBack</span> at any mDrive outlet in Myanmar. Redeem instantly.</p>
                <div class="pt-4 flex flex-col md:flex-row gap-4 items-center">
                    <a href="#"
                        class="border-2 border-white text-white px-10 py-3 hover:scale-105 transition-all rounded-full hover:bg-white hover:text-black font-bold text-sm tracking-widest uppercase">Download
                        Store</a>
                    <button
                        class="text-gray-400 font-medium hover:text-white transition underline underline-offset-4 text-sm">Register
                        iMax Wallet</button>
                </div>
            </div>
            <div class="flex-1 flex justify-center items-center group">
                <img src="{{ asset('user/image/wallet.jpg') }}" alt="Wallet"
                    class="w-full max-w-[320px] drop-shadow-2xl transition duration-700 group-hover:scale-105" />
            </div>
        </section>

        <div class="max-w-7xl mx-auto mb-20">
            <h1 class="text-gray-900 text-3xl font-bold mb-10 flex items-center gap-3">
                Trending Products <div class="h-[2px] flex-1 bg-gray-100"></div>
            </h1>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                @foreach ($trendingProducts as $item)
                    <a href="{{ route('productDetails', $item->id) }}" class="group">
                        <div
                            class="bg-white rounded-3xl p-6 flex flex-col items-center transition-all duration-500 hover:shadow-2xl border border-gray-50 h-full">
                            <div class="h-56 flex items-center mb-6 relative">
                                <img src="{{ asset('product/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="max-h-full object-contain group-hover:opacity-0 transition-opacity duration-500">
                                <img src="{{ asset('user/image/17promax-front.webp') }}" alt="Preview"
                                    class="max-h-full object-contain absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 scale-90 group-hover:scale-100">
                            </div>
                            <p
                                class="font-bold text-gray-800 text-center group-hover:text-blue-600 transition truncate w-full">
                                {{ $item->name }}</p>
                            <p class="text-lg font-black text-blue-600 mt-2">{{ number_format($item->price) }} <span
                                    class="text-[10px] font-bold">MMK</span></p>
                        </div>
                    </a>
                @endforeach
            </div>
            <form action="{{ route('all_ProductsPage') }}" method="get" class="flex justify-center mt-12">
                <button
                    class="hover:scale-105 transition-all duration-300 border-2 border-gray-900 rounded-full text-gray-900 px-14 py-3 text-sm font-bold tracking-widest uppercase hover:bg-gray-900 hover:text-white">VIEW
                    ALL PRODUCTS</button>
            </form>
        </div>
    </div>
@endsection

@section('swiper')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
