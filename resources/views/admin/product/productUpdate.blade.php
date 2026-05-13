@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid px-4 py-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <!-- Back Button -->
                <a href="{{ route('productList') }}" class="btn btn-sm btn-outline-secondary mb-3 rounded-pill">
                    <i class="fa-solid fa-arrow-left me-1"></i> Back to List
                </a>

                <div class="card shadow border-0 rounded-lg">
                    <div class="card-header bg-white py-3 border-bottom-0">
                        <h5 class="m-0 font-weight-bold text-primary text-center">
                            <i class="fa-solid fa-pen-to-square me-2"></i>Edit Product Details
                        </h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('updateProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="oldPhoto" value="{{ $product->image }}">
                            <input type="hidden" name="productId" value="{{ $product->id }}">

                            <!-- Image Upload Section -->
                            <div class="text-center mb-4">
                                <div class="mb-3">
                                    <img class="img-thumbnail shadow-sm" id="output"
                                        src="{{ asset('product/' . $product->image) }}"
                                        style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
                                    <p class="text-muted small mt-2">Current Product Image</p>
                                </div>
                                <div class="custom-file text-start">
                                    <label class="form-label fw-bold">Replace Product Image</label>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror"
                                        onchange="loadFile(event)">
                                    @error('image')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="row g-3">
                                <!-- Product Name -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Product Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i
                                                class="fa-solid fa-tag text-muted"></i></span>
                                        <input type="text" name="name" value="{{ old('name', $product->name) }}"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter product name">
                                        @error('name')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Category</label>
                                    <select name="categoryId" class="form-select @error('categoryId') is-invalid @enderror">
                                        <option value="">Choose Category...</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->category_id }}"
                                                @if (old('categoryId', $product->category_id) == $item->category_id) selected @endif>
                                                {{ $item->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categoryId')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Price -->
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Price (Ks)</label>
                                    <input type="number" name="price" value="{{ old('price', $product->price) }}"
                                        class="form-control @error('price') is-invalid @enderror" placeholder="0.00">
                                    @error('price')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Stock -->
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Stock Qty</label>
                                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                                        class="form-control @error('stock') is-invalid @enderror" placeholder="0">
                                    @error('stock')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Discount Rate -->
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Discount (%)</label>
                                    <input type="number" name="rate" value="{{ old('rate', $product->rate) }}"
                                        class="form-control" placeholder="0%">
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label class="form-label fw-bold">Description</label>
                                    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                                        placeholder="Enter product details...">{{ old('description', $product->description) }}</textarea>
                                    @error('description')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="mt-5 d-flex gap-2">
                                <a href="{{ route('productList') }}"
                                    class="btn btn-light w-50 py-2 fw-bold border">Cancel</a>
                                <button type="submit" class="btn btn-primary w-50 py-2 fw-bold shadow-sm">
                                    <i class="fa-solid fa-floppy-disk me-1"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
