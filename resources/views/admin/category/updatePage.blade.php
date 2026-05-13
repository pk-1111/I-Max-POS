@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid px-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Category Update</h1>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">

                <!-- Back Button -->
                <div class="mb-3">
                    <a href="{{ route('categoryListPage') }}" class="btn btn-sm btn-link text-decoration-none text-muted p-0">
                        <i class="fas fa-arrow-left mr-1"></i> Back to Category List
                    </a>
                </div>

                <!-- Update Card -->
                <div class="card shadow border-0 rounded-lg">
                    <div class="card-header bg-white py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Category Details</h6>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('updateCategory', $categoryUpdate->category_id) }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="small mb-1 text-dark font-weight-bold">Category Name</label>
                                <input type="text"
                                    class="form-control shadow-sm py-4 @error('categoryName') is-invalid @enderror"
                                    value="{{ old('categoryName', $categoryUpdate->title) }}" name="categoryName"
                                    placeholder="Enter category name...">

                                @error('categoryName')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-primary px-4 shadow-sm">
                                    <i class="fas fa-save mr-1"></i> Save Changes
                                </button>
                                <small class="text-muted">ID: #{{ $categoryUpdate->category_id }}</small>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Information Note -->
                <div class="mt-3 text-center">
                    <small class="text-muted italic">Last updated:
                        {{ $categoryUpdate->updated_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
    </div>
@endsection
