@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid px-4">

        <!-- Header -->
        <div class="d-flex align-items-center py-3">
            <a href="{{ route('admin#orderList') }}" class="btn btn-outline-dark btn-sm shadow-sm rounded-pill">
                <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to List
            </a>
            <h4 class="h4 mb-0 text-gray-800 ml-3 font-weight-bold">Order Details</h4>
        </div>

        <div class="row mt-2">
            <!-- Left Card: Customer & Order Info -->
            <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white py-3 border-0">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user mr-2"></i>Customer Information
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Customer Name</div>
                            <div class="col-7 text-dark">{{ $payslipData->user_name }}</div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Phone</div>
                            <div class="col-7 text-dark">
                                @if ($payslipData->phone != $order[0]->user_phone)
                                    <span class="d-block">{{ $payslipData->phone }}</span>
                                @endif
                                <span class="badge badge-light border">{{ $order[0]->user_phone }}</span>
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Address</div>
                            <div class="col-7 text-dark text-muted small">{{ $payslipData->address }}</div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Order Code</div>
                            <div class="col-7 text-primary font-weight-bold" id="orderCode">{{ $payslipData->order_code }}
                            </div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Order Date</div>
                            <div class="col-7 text-dark">{{ $payslipData->created_at->format('j M Y') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-5 font-weight-bold">Grand Total</div>
                            <div class="col-7">
                                <h5 class="text-success font-weight-bold mb-0">{{ number_format($payslipData->total_amt) }}
                                    MMK</h5>
                                <small class="text-danger font-italic">* Includes Delivery Charges</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Card: Payment Info & Payslip -->
            <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white py-3 border-0">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-credit-card mr-2"></i>Payment
                            Verification</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Contact Phone</div>
                            <div class="col-7 text-dark">{{ $payslipData->phone }}</div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Payment Method</div>
                            <div class="col-7"><span
                                    class="badge badge-info px-3">{{ $payslipData->payment_method }}</span></div>
                        </div>
                        <div class="row mb-3 border-bottom pb-2">
                            <div class="col-5 font-weight-bold">Purchase Time</div>
                            <div class="col-7 text-muted small">{{ $payslipData->created_at->format('j M Y | h:i A') }}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="font-weight-bold d-block">Payslip Image:</label>
                                <a href="{{ asset('payslip/' . $payslipData->payslip_image) }}" target="_blank">
                                    <img src="{{ asset('payslip/' . $payslipData->payslip_image) }}"
                                        class="img-thumbnail shadow-sm" style="max-width: 180px; transition: 0.3s;"
                                        onmouseover="this.style.transform='scale(1.05)'"
                                        onmouseout="this.style.transform='scale(1)'">
                                </a>
                                <p class="small text-muted mt-2 font-italic">(Click image to enlarge)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Table Board -->
        <div class="card shadow border-0 mb-4">
            <div class="card-header py-3 bg-white border-0 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-box-open mr-2"></i>Items in this Order</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center" id="productTable">
                        <thead class="bg-light text-primary small font-weight-bold">
                            <tr>
                                <th class="border-0">Product Image</th>
                                <th class="border-0">Product Name</th>
                                <th class="border-0">Qty</th>
                                <th class="border-0">Stock Status</th>
                                <th class="border-0 text-right pr-4">Price (ea)</th>
                                <th class="border-0 text-right pr-4">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                <tr>
                                    <input type="hidden" class="productId" value="{{ $item->product_id }}">
                                    <input type="hidden" class="productOrderCount" value="{{ $item->order_count }}">

                                    <td class="align-middle">
                                        <img src="{{ asset('product/' . $item->product_image) }}"
                                            class="img-thumbnail shadow-sm"
                                            style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                    </td>
                                    <td class="align-middle font-weight-bold text-dark">{{ $item->product_name }}</td>
                                    <td class="align-middle">
                                        <span class="h6 mb-0">{{ $item->order_count }}</span>
                                        @if ($item->available_stock < $item->order_count)
                                            <br><small class="text-danger font-weight-bold">(Out of Stock)</small>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <span class="text-dark">{{ $item->available_stock }}</span>
                                        @if ($item['stock'] <= 3)
                                            <span class="badge badge-danger ml-2 p-1" style="font-size: 0.7rem;">Low
                                                Stock</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-right pr-4 text-muted">
                                        {{ number_format($item->product_price) }} MMK</td>
                                    <td class="align-middle text-right pr-4 font-weight-bold text-dark">
                                        {{ number_format($item->order_count * $item->product_price) }} MMK</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white py-3">
                <div class="d-flex justify-content-end">
                    <input type="button" id="btn-order-cancle" class="btn btn-outline-danger px-4 mr-2 shadow-sm"
                        value="Cancel Order">
                    <input type="button" @if (!$status) disabled @endif id="btn-order-confirm"
                        class="btn btn-success px-4 shadow-sm font-weight-bold" value="Confirm Order">
                </div>
            </div>
        </div>

    </div>
@endsection
