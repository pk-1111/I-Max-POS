@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Category Management</h1>
        </div>

        <div class="row">
            <!-- Left Side: Create Form -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow border-0 mb-4">
                    <div class="card-header bg-white py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create New Category</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('createCategory') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1 text-dark">Category Name</label>
                                <input type="text"
                                    class="form-control shadow-sm @error('categoryName') is-invalid @enderror"
                                    value="{{ old('categoryName') }}" name="categoryName" placeholder="Enter name...">

                                @error('categoryName')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block shadow-sm mt-3">
                                <i class="fas fa-plus mr-1"></i> Create Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Side: Category List Table -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 text-center">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th class="border-0">ID</th>
                                        <th class="border-0 text-left pl-4">Category Name</th>
                                        <th class="border-0">Created At</th>
                                        <th class="border-0">Updated At</th>
                                        <th class="border-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $item)
                                            <tr>
                                                <td class="align-middle">{{ $item->category_id }}</td>
                                                <td class="align-middle text-left pl-4 font-weight-bold">{{ $item->title }}
                                                </td>
                                                <td class="align-middle text-muted small">
                                                    {{ $item->created_at->format('j M Y') }}</td>
                                                <td class="align-middle text-muted small">
                                                    {{ $item->updated_at->format('j M Y') }}</td>
                                                <td class="align-middle">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('updateCategoryPage', $item->category_id) }}"
                                                            class="btn btn-sm btn-outline-primary mr-2 shadow-sm"
                                                            title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('deleteCategory', $item->category_id) }}"
                                                            class="btn btn-sm btn-outline-danger shadow-sm" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="py-5">
                                                <img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png"
                                                    width="50" class="mb-3 opacity-50">
                                                <p class="text-muted">No categories found in the database.</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="mt-4 d-flex justify-content-end">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
