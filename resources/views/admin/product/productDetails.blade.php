@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid px-4 py-5">
        <!-- Header Section -->
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('admin#productList') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3 shadow-sm">
                <i class="fa-solid fa-arrow-left me-2"></i> Back to List
            </a>
            <h4 class="mb-0 ms-3 fw-bold text-gray-800">Product Information</h4>
        </div>

        <div class="row">
            <!-- Product Image Card -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4 border-0 overflow-hidden">
                    <div class="card-body text-center p-4">
                        <div class="img-container mb-3">
                            <img class="img-fluid rounded shadow-sm border"
                                src="{{ asset('product/' . $productDetail->image) }}" alt="{{ $productDetail->name }}"
                                style="max-height: 350px; object-fit: cover; width: 100%;">
                        </div>
                        <h5 class="fw-bold text-primary">{{ $productDetail->name }}</h5>
                        <span class="badge bg-info text-dark rounded-pill">{{ $productDetail->category_name }}</span>
                    </div>
                </div>
            </div>

            <!-- Product Details Card -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4 border-0">
                    <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fa-solid fa-circle-info me-2"></i>Full
                            Specifications</h6>
                        <div class="dropdown">
                            <a href="{{ route('updateProductPage', $productDetail->id) }}"
                                class="btn btn-primary btn-sm rounded-pill shadow-sm">
                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit Product
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle">
                                <tbody>
                                    <tr class="border-bottom">
                                        <th class="text-muted fw-normal py-3" style="width: 30%;">Product Name</th>
                                        <td class="h6 fw-bold py-3 text-dark">{{ $productDetail->name }}</td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <th class="text-muted fw-normal py-3">Category</th>
                                        <td class="py-3">
                                            <span
                                                class="badge bg-light text-primary border border-primary px-3">{{ $productDetail->category_name }}</span>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <th class="text-muted fw-normal py-3">Inventory / Stock</th>
                                        <td class="py-3">
                                            @if ($productDetail->available_item <= 3)
                                                <span class="text-danger fw-bold"><i
                                                        class="fa-solid fa-triangle-exclamation me-1"></i>
                                                    {{ $productDetail->available_item }} (Low Stock)</span>
                                            @else
                                                <span class="text-success fw-bold"><i
                                                        class="fa-solid fa-check-circle me-1"></i>
                                                    {{ $productDetail->available_item }} In Stock</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <th class="text-muted fw-normal py-3">Pricing</th>
                                        <td class="h5 fw-bold text-primary py-3">
                                            {{ number_format($productDetail->price) }} <small class="text-muted">Ks</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted fw-normal py-3">Product Description</th>
                                        <td class="py-3 text-muted" style="line-height: 1.6;">
                                            {{ $productDetail->description ?? 'No description available for this product.' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
