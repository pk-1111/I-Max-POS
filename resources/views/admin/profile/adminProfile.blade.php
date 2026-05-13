@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4 mt-4">

        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <!-- Profile Card -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom-0">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-user-shield mr-2"></i>Account Information
                            <span class="badge badge-danger-soft text-danger ml-2"
                                style="background-color: #ffe5e5; padding: 5px 10px; border-radius: 5px;">
                                {{ ucfirst(Auth::user()->role) }} Role
                            </span>
                        </h6>
                    </div>

                    <div class="card-body p-4">
                        <div class="row">
                            <!-- Left Side: Profile Image -->
                            <div class="col-md-4 text-center border-right">
                                <div class="position-relative d-inline-block mb-3">
                                    <img class="img-profile rounded-circle shadow border p-1" id="output"
                                        style="width: 180px; height: 180px; object-fit: cover;"
                                        src="{{ asset(Auth::user()->profile != null ? 'profile/' . Auth::user()->profile : 'admin/img/undraw_profile.svg') }}">
                                </div>
                                <h5 class="font-weight-bold text-dark mb-1">
                                    {{ Auth::user()->name ?: Auth::user()->nickname }}</h5>
                                <p class="text-muted small">{{ Auth::user()->email }}</p>
                            </div>

                            <!-- Right Side: Details Information -->
                            <div class="col-md-8 px-lg-5">
                                <div class="row mb-3 align-items-center py-2 border-bottom">
                                    <div class="col-sm-4 text-muted font-weight-bold">Full Name</div>
                                    <div class="col-sm-8 text-dark font-weight-bold">
                                        {{ Auth::user()->name ?: Auth::user()->nickname }}
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center py-2 border-bottom">
                                    <div class="col-sm-4 text-muted font-weight-bold">Email Address</div>
                                    <div class="col-sm-8 text-dark">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="row mb-3 align-items-center py-2 border-bottom">
                                    <div class="col-sm-4 text-muted font-weight-bold">Phone Number</div>
                                    <div class="col-sm-8 text-dark">
                                        {{ Auth::user()->phone ?: 'Not provided' }}
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center py-2 border-bottom">
                                    <div class="col-sm-4 text-muted font-weight-bold">Home Address</div>
                                    <div class="col-sm-8 text-dark small">
                                        {{ Auth::user()->address ?: 'No address specified' }}
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center py-2">
                                    <div class="col-sm-4 text-muted font-weight-bold">Account Role</div>
                                    <div class="col-sm-8">
                                        <span
                                            class="badge badge-danger px-3 py-2 shadow-sm">{{ strtoupper(Auth::user()->role) }}</span>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="mt-4 pt-2">
                                    <a href="{{ route('adminProfileEdit') }}" class="btn btn-primary px-4 shadow-sm mr-2">
                                        <i class="fas fa-edit mr-1"></i> Edit Profile
                                    </a>
                                    <a href="{{ route('changePasswordPage') }}"
                                        class="btn btn-outline-dark px-4 shadow-sm">
                                        <i class="fas fa-key mr-1"></i> Change Password
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
