@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4 mt-4">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow-sm border-0 mb-4">
                    <!-- Card Header -->
                    <div class="card-header bg-white py-3 border-bottom-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user-edit mr-2"></i>Edit Admin Profile
                            </h6>
                            <span class="badge badge-danger px-3 py-2">
                                {{ Auth::user()->role }} Role
                            </span>
                        </div>
                    </div>

                    <form action="{{ route('adminProfileUpdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-4">
                            <div class="row">
                                <!-- Left Column: Profile Picture Upload -->
                                <div class="col-md-4 text-center border-right">
                                    <div class="mb-4">
                                        <label class="d-block font-weight-bold text-muted small mb-3 text-uppercase">Profile
                                            Image</label>
                                        <div class="position-relative d-inline-block">
                                            <img class="img-profile rounded-circle shadow-sm border p-1 mb-3" id="output"
                                                style="width: 180px; height: 180px; object-fit: cover;"
                                                src="{{ asset(Auth::user()->profile != null ? 'profile/' . Auth::user()->profile : 'admin/img/undraw_profile.svg') }}">
                                        </div>

                                        <div class="custom-file text-left">
                                            <input type="file" name="image"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                id="profileImage" onchange="loadFile(event)">
                                            <label class="custom-file-label small" for="profileImage">Choose new
                                                photo...</label>
                                            @error('image')
                                                <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <p class="text-muted mt-2 small italic text-left">
                                            <i class="fas fa-info-circle mr-1"></i> Recommended: Square image (JPG, PNG)
                                        </p>
                                    </div>
                                </div>

                                <!-- Right Column: Personal Details Form -->
                                <div class="col-md-8 px-lg-5">
                                    <h5 class="text-dark font-weight-bold mb-4">Personal Details</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="small mb-1 font-weight-bold text-dark">Full Name</label>
                                            <input type="text" name="name"
                                                class="form-control shadow-sm @error('name') is-invalid @enderror"
                                                value="{{ old('name', Auth::user()->name ?: Auth::user()->nickname) }}"
                                                placeholder="Enter full name">
                                            @error('name')
                                                <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="small mb-1 font-weight-bold text-dark">Email Address</label>
                                            <input type="email" name="email"
                                                class="form-control shadow-sm @error('email') is-invalid @enderror"
                                                value="{{ old('email', Auth::user()->email) }}"
                                                placeholder="name@example.com">
                                            @error('email')
                                                <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6 mb-3">
                                            <label class="small mb-1 font-weight-bold text-dark">Phone Number</label>
                                            <input type="text" name="phone"
                                                class="form-control shadow-sm @error('phone') is-invalid @enderror"
                                                value="{{ old('phone', Auth::user()->phone) }}" placeholder="09xxxxxxxxx">
                                            @error('phone')
                                                <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="small mb-1 font-weight-bold text-dark">Address</label>
                                            <input type="text" name="address"
                                                class="form-control shadow-sm @error('address') is-invalid @enderror"
                                                value="{{ old('address', Auth::user()->address) }}"
                                                placeholder="Street, City, Country">
                                            @error('address')
                                                <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-4 border-top pt-4">
                                        <button type="submit" class="btn btn-primary px-5 shadow-sm font-weight-bold">
                                            <i class="fas fa-save mr-2"></i> Save Changes
                                        </button>
                                        <a href="{{ route('adminProfile') }}" class="btn btn-light px-4 ml-2">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
