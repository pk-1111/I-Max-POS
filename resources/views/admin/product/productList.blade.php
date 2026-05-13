@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid px-4 py-4">
        <!-- Header Section -->
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h3 class="fw-bold text-dark m-0">Product Management</h3>
                <p class="text-muted small">Total Products: {{ count($products) }}</p>
            </div>
            <div class="col-md-6 text-end">
                <form action="{{ route('admin#productList') }}" method="get" class="d-inline-block">
                    @csrf
                    <div class="input-group shadow-sm">
                        <input type="text" name="searchKey" value="{{ request('searchKey') }}"
                            class="form-control border-0 px-3" placeholder="Search products..." style="width: 250px;">
                        <button type="submit" class="btn btn-dark px-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-center">
                    <thead class="bg-light text-secondary small text-uppercase">
                        <tr>
                            <th class="py-3">ID</th>
                            <th class="py-3">Preview</th>
                            <th class="py-3 text-start">Product Details</th>
                            <th class="py-3">Price Status</th>
                            <th class="py-3">Inventory</th>
                            <th class="py-3">Category</th>
                            <th class="py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td class="fw-bold text-muted small">{{ $item->id }}</td>
                                <td>
                                    <img src="{{ asset('product/' . $item->image) }}" class="rounded-3 shadow-sm border"
                                        style="width: 60px; height: 60px; object-fit: cover;" alt="">
                                </td>
                                <td class="text-start">
                                    <div class="fw-bold text-dark">{{ $item->name }}</div>
                                </td>
                                <td>
                                    @if ($item->rate > 0)
                                        <div class="small text-decoration-line-through text-muted">
                                            {{ number_format($item->price) }} Ks
                                        </div>
                                        @php
                                            $discountPrice = $item->price - $item->price * ($item->rate / 100);
                                        @endphp
                                        <div class="fw-bold text-danger">{{ number_format($discountPrice) }} Ks</div>
                                        <span class="badge bg-danger-subtle text-danger rounded-pill small"
                                            style="font-size: 10px;">
                                            -{{ $item->rate }}% OFF
                                        </span>
                                    @else
                                        <div class="fw-bold text-dark">{{ number_format($item->price) }} Ks</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->stock <= 3)
                                        <div class="badge bg-danger px-3 py-2 rounded-pill shadow-sm">
                                            {{ $item->stock }} <span class="ms-1 small text-white-50">Low Stock</span>
                                        </div>
                                    @else
                                        <div class="badge bg-secondary-subtle text-dark px-3 py-2 rounded-pill border">
                                            {{ $item->stock }} Units
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-2">
                                        {{ $item->category_name }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group shadow-sm rounded">
                                        <a href="{{ route('adminProductDetails', $item->id) }}"
                                            class="btn btn-sm btn-white text-primary border" title="View">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('updateProductPage', $item->id) }}"
                                            class="btn btn-sm btn-white text-secondary border" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('deleteProduct', $item->id) }}"
                                            class="btn btn-sm btn-white text-danger border" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        /* UI Enhancement Styles */
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
            transition: 0.2s;
        }

        .btn-white {
            background: white;
        }

        .btn-white:hover {
            background: #f1f1f1;
        }

        .bg-info-subtle {
            background-color: #e0f7fa !important;
        }

        .bg-danger-subtle {
            background-color: #fdeaea !important;
        }

        .bg-secondary-subtle {
            background-color: #f4f4f4 !important;
        }
    </style>
@endsection
