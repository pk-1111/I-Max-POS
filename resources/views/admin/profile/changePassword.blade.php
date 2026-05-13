@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-center mb-4 mt-5">
            <h1 class="h4 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-key mr-2 text-primary"></i> Change Account Password
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="card shadow border-0 rounded-lg">
                    <div class="card-header bg-white py-3 border-0">
                        <p class="text-muted small mb-0 text-center">Please enter your current password to authorize the
                            change.</p>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <form action="{{ route('changePassword') }}" method="post">
                            @csrf

                            <!-- Old Password -->
                            <div class="form-group mb-3">
                                <label class="small mb-1 font-weight-bold text-dark">Old Password</label>
                                <div class="input-group">
                                    <input type="password" name="oldPassword"
                                        class="form-control shadow-sm @error('oldPassword') is-invalid @enderror"
                                        placeholder="Current Password">
                                    @error('oldPassword')
                                        <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- New Password -->
                            <div class="form-group mb-3">
                                <label class="small mb-1 font-weight-bold text-dark">New Password</label>
                                <input type="password" name="newPassword"
                                    class="form-control shadow-sm @error('newPassword') is-invalid @enderror"
                                    placeholder="Enter New Password">
                                @error('newPassword')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group mb-4">
                                <label class="small mb-1 font-weight-bold text-dark">Confirm New Password</label>
                                <input type="password" name="confirmPassword"
                                    class="form-control shadow-sm @error('confirmPassword') is-invalid @enderror"
                                    placeholder="Repeat New Password">
                                @error('confirmPassword')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block shadow-sm font-weight-bold py-2">
                                    <i class="fas fa-save mr-1"></i> Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light border-0 text-center py-3">
                        <small class="text-muted">Stay secure by using a strong password.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
