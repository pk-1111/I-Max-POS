<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-Max Mobile </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>







{{-- nav css --}}

<link rel="stylesheet" href="{{ asset('user/css/nav.css') }}">

{{-- nav css --}}

<link rel="stylesheet" href="{{ asset('user/css/nav.css') }}">

{{-- footer css --}}

<link rel="stylesheet" href="{{ asset('user/css/footer.css') }}">

{{-- swiper css --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<link rel="stylesheet" href="{{ asset('user/css/swiper.css') }}">

{{-- dropdown css --}}

<link rel="stylesheet" href="{{ asset('user/css/dropdown.css') }}">

{{-- fontawsome cdn css --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <nav class="iMax_navbar top-0 sticky z-50">
        <div class="nav_left">

            <div class="logo_section">
                <div class="logo_main"><a href="{{ route('userHome') }}">i-Max</a></div>
                <div class="logo_divider"></div>
                <div class="logo_sub">
                    <img src="{{ asset('user/image/appleLogo.jpg') }}" alt="" class="apple_icon">
                    <span class="author_name">Authorized <br> Reseller</span>
                </div>
            </div>

            <div class="nav_icons">
                <div class="icon_item"><a href="{{ route('orderPage') }}"><i class="fa-solid fa-clipboard-list"></i></a>
                </div>
                <div class="icon_item"><a href="{{ route('cartShow') }}"><i class="fa-solid fa-bag-shopping"></a></i>
                </div>
                <div class="icon_item">
                    <h3 class="text-xl font-extralight">{{ Auth::user()->name }}</h3></a>
                </div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class=" text-gray-800 rounded p-2   hover:bg-gray-800 hover:text-white transition-colors duration-300">Logout</button>

                </form>
            </div>

        </div>





        <div class="nav_center">
            <div class="menu_item dropdown"><a href="{{ route('userShop') }}">Shop</a>
                <span><i class="fa-solid fa-angle-down"></i></span>
                <div class="dropdown_content">
                    <a href="{{ route('iphoneShop') }}">iPhone</a>
                    <a href="{{ route('ipadShop') }}">iPad</a>
                    <a href="{{ route('macbookShop') }}">MacBook</a>
                    <a href="{{ route('iWatchShop') }}">AppleWatch</a>
                    <a href="{{ route('airpodsShop') }}">AirPods</a>
                    <a href="{{ route('accessoriesShop') }}">Accessories</a>
                </div>
            </div>
            <div class="menu_item dropdown">Learn More</a> <span><i class="fa-solid fa-angle-down"></i></span>
                <div class="dropdown_content">
                    <a href="{{ route('iphone17Pro') }}">iPhone 17 pro</a>
                    <a href="{{ route('iphone17') }}">iPhone 17</a>
                    <a href="{{ route('macBookPro') }}">MacBook Pro</a>
                </div>
            </div>

            <div class="menu_item"><a href="{{ route('locationPage') }}">Our Locations</a> <span></span></div>
            <div class="menu_item"><a href="{{ route('aboutUsPage') }}">About Us</a> <span></span>
            </div>
            <div class="menu_item"><a href="{{ route('protectionPage') }}">mCare Ultra Protection</a> <span></span>
            </div>
            <div class="menu_item"><a href="{{ route('joinUsPage') }}">Join Us</a>
            </div>
            <div class="menu_item"><a href="{{ route('tradeInPage') }}">Trade-in</a> <span></span>
            </div>
        </div>
    </nav>



    @yield('content')

    @include('sweetalert::alert')

    <!-- Footer Start -->
    <div class="footer_wrapper">
        <div class="newsletter_section">
            <div class="newsletter_text">Be the first to get latest updates and offers!</div>
            <div class="newsletter_input_group">
                <input type="email" class="email_input" placeholder="Enter your email address">
                <div class="subscribe_btn">SUBSCRIBE NOW</div>
                <div class="newsletter_icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="footer_main_content">

            <div class="footer_col">
                <div class="col_title font-bold">Shop</div>
                <div class="col_title">iPhone</div>
                <div class="col_title">iPad</div>
                <div class="col_title">Mac</div>
                <div class="col_title">Apple Watch</div>
                <div class="col_title">AirPods</div>
                <div class="col_title">Accessories</div>
            </div>

            <div class="footer_col">
                <div class="col_title font-bold">Quick Links</div>
                <div class="col_title">About Us</div>
                <div class="col_title">Business</div>
                <div class="col_title">Our Location</div>
                <div class="col_title">Contact us</div>
                <div class="col_title">Career</div>
                <div class="col_title">Trade In</div>
            </div>

            <div class="footer_col">

                <div class="col_title font-bold">Legal</div>
                <div class="col_title">Privacy & Policy</div>
                <div class="col_title">Delivery Policy</div>

            </div>


            <div class="footer_col">
                <div class="col_title font-bold">Customer Care</div>
                <div class="col_title">Phone: +951 457800</div>
                <div class="col_title">Live Chat @ Messenger</div>
                <div class="col_title">Email: contat@imaxasia.com</div>

                <div class="col-title " style="margin-top: 20px;">Store Timing</div>
                <div class="col_title" style="margin-top: 5px;">Open Daily:9:00 AM to 6:30 PM</div>
            </div>






        </div>
    </div>

    <div class="footer_bottom_bar">
        <div class="copyright_text">@ 2026 iMax_navbarAsiaGroup Company Limited. All Rights Reserved.</div>
    </div>
    <!-- Footer End -->

    {{-- swiper js --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    {{-- storage js --}}

    <script src="{{ asset('user/js/storage.js') }}"></script>

    {{-- changeQty js --}}

    <script src="{{ asset('user/js/changeQty.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    {{-- totalQty js --}}

    <script src="{{ asset('user/js/totalQty.js') }}"></script>



    @yield('swiper')

</body>




</html>
