@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Payment Methods</h1>
        </div>

        <div class="row">
            <!-- Left Side: Create Payment Form -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow border-0 mb-4">
                    <div class="card-header bg-white py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add New Account</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('paymentMethodCreate') }}" method="post">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="small mb-1 text-dark font-weight-bold">Account Number</label>
                                <input type="text"
                                    class="form-control shadow-sm @error('accountNumber') is-invalid @enderror"
                                    value="{{ old('accountNumber') }}" name="accountNumber"
                                    placeholder="Enter  Account No...">
                                @error('accountNumber')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="small mb-1 text-dark font-weight-bold">Account Name</label>
                                <input type="text"
                                    class="form-control shadow-sm @error('accountName') is-invalid @enderror"
                                    value="{{ old('accountName') }}" name="accountName" placeholder="Enter Account Name...">
                                @error('accountName')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label class="small mb-1 text-dark font-weight-bold">Account Type</label>
                                <input type="text"
                                    class="form-control shadow-sm @error('accountType') is-invalid @enderror"
                                    value="{{ old('accountType') }}" name="accountType" placeholder="Enter AccountType...">
                                @error('accountType')
                                    <small class="invalid-feedback font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block shadow-sm">
                                <i class="fas fa-plus-circle mr-1"></i> Create Payment
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Side: Payment List Table -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 text-center">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th class="border-0">ID</th>
                                        <th class="border-0 text-left pl-4">Account Details</th>
                                        <th class="border-0">Type</th>
                                        <th class="border-0">Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($payments) > 0)
                                        @foreach ($payments as $item)
                                            <tr>
                                                <td class="align-middle">{{ $item->id }}</td>
                                                <td class="align-middle text-left pl-4">
                                                    <div class="font-weight-bold text-dark">{{ $item->account_name }}</div>
                                                    <div class="small text-muted">{{ $item->account_number }}</div>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="badge badge-info px-3 py-2 shadow-sm">{{ $item->type }}</span>
                                                </td>
                                                <td class="align-middle text-muted small">
                                                    {{ $item->created_at->format('j M Y') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="py-5 text-muted">
                                                No payment methods found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Pagination can be added here if needed -->
                {{-- <div class="mt-3">
                    {{ $payments->links() }}
                </div> --}}
            </div>
        </div>
    </div>
@endsection
