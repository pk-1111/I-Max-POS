<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POS Admin Dashboard">
    <meta name="author" content="iMax Studio">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>POS Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .sidebar {
            background: #1a1a1a !important;
        }

        /* Deep dark background */
        .sidebar-brand {
            background: #000 !important;
        }

        .nav-item .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .img-profile {
            object-fit: cover;
            border: 2px solid #e3e6f0;
        }

        .logo_main {
            font-size: 1.5rem;
            color: #fff;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion shadow-sm" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center py-4"
                href="{{ route('admin#productList') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-brands logo_main fa-apple"></i>
                </div>
                <div class="sidebar-brand-text mx-3 uppercase font-weight-bold">iMax Studio</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <div class="sidebar-heading mt-2">Management</div>

            <li class="nav-item {{ request()->routeIs('categoryListPage') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categoryListPage') }}">
                    <i class="fa-solid fa-tags"></i>
                    <span>Category</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('productCreatePage') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('productCreatePage') }}">
                    <i class="fa-solid fa-plus-circle"></i>
                    <span>Add Products</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin#productList') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin#productList') }}">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span>Product List</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin#orderList') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin#orderList') }}">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Order Board</span>
                </a>
            </li>

            @if (Auth::user()->role == 'superadmin')
                <div class="sidebar-heading mt-2">Admin Tools</div>
                <li class="nav-item {{ request()->routeIs('paymentMethodPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('paymentMethodPage') }}">
                        <i class="fa-solid fa-credit-card"></i>
                        <span>Payment Methods</span>
                    </a>
                </li>
            @endif

            <li class="nav-item {{ request()->routeIs('admin#customer_contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin#customer_contact') }}">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <span>Customer Contact</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('changePasswordPage') }}">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Security</span>
                </a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                    <a class="nav-link" href="javascript:void(0)"
                        onclick="document.getElementById('logoutForm').submit();">
                        <i class="fa-solid fa-power-off text-danger"></i>
                        <span class="text-danger font-weight-bold">Logout</span>
                    </a>
                </form>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-light">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">
                    <ul class="navbar-nav ml-auto">
                        <!-- User Info -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-3 d-none d-lg-inline text-gray-700 font-weight-bold small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle shadow-sm"
                                    src="{{ asset(Auth::user()->profile != null ? 'profile/' . Auth::user()->profile : 'admin/img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in border-0">
                                <a class="dropdown-item" href="{{ route('adminProfile') }}">
                                    <i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i> My Profile
                                </a>
                                @if (Auth::user()->role == 'superadmin')
                                    <a class="dropdown-item" href="{{ route('addNewAdminPage') }}">
                                        <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i> Create Admin
                                    </a>

                                    <a class="dropdown-item" href="{{ route('adminListPage') }}">
                                        <i class="fas fa-users-cog fa-sm fa-fw mr-2 text-gray-400"></i> Admin Management
                                    </a>

                                    <a class="dropdown-item" href="{{ route('userListPage') }}">
                                        <i class="fas fa-users-cog fa-sm fa-fw mr-2 text-gray-400"></i> User List
                                    </a>
                                @endif

                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Page Content -->
                <div class="pb-5">
                    @yield('content')
                </div>

            </div>

            @include('sweetalert::alert')

            <!-- Scripts -->
            <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
            <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
            <script src="{{ asset('admin/js/imageUpload.js') }}"></script>
            <script src="{{ asset('admin/js/orderStatus.js') }}"></script>
        </div>
    </div>
</body>

</html>
