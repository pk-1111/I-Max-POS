@extends('user.layouts.master')

@section('content')

    <div class="min-h-screen bg-gray-100 py-12 px-4">
        <div class="max-w-3xl mx-auto space-y-12">

            {{-- PENDING SECTION  --}}
            @php $hasPending = false; @endphp
            @foreach ($order as $item)
                @if ($item[0]['status'] == 0)
                    @php $hasPending = true; @endphp
                @endif
            @endforeach

            @if ($hasPending)
                <div class="border-l-8 border-amber-400 pl-4">
                    <h2 class="text-2xl font-black text-gray-800 uppercase tracking-wider">Ongoing Orders (Pending)</h2>
                    <p class="text-gray-500 text-sm">Your orders are still being processed.</p>
                </div>

                @foreach ($order as $item)
                    @if ($item[0]['status'] == 0)
                        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-200">
                            <div class="bg-indigo-600 p-8 text-center">
                                <div class="inline-flex items-center justify-center bg-white w-16 h-16 rounded-full mb-4">
                                    <i class="fa-regular fa-clock text-3xl text-indigo-600"></i>
                                </div>
                                <h1 class="text-3xl font-bold text-amber-300">Pending...</h1>
                                <p class="mt-2 text-white opacity-90 font-light">We've received your order.</p>
                            </div>

                            <div class="p-8">
                                <div class="flex justify-between mb-8 pb-6 border-b border-gray-100">
                                    <div>
                                        <p class="text-sm text-gray-400 uppercase">Order Number</p>
                                        <p class="text-lg font-bold">{{ $item[0]['order_code'] }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm text-gray-400 uppercase">Date</p>
                                        <p class="text-lg font-bold">{{ $item[0]['created_at']->format('j F Y') }}</p>
                                    </div>
                                </div>

                                <div class="space-y-6 mb-8">
                                    @foreach ($item as $product)
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="{{ asset('product/' . $product['product_image']) }}"
                                                    class="w-16 h-16 object-contain bg-gray-50 rounded-lg p-1">
                                                <div class="ml-4">
                                                    <p class="font-bold text-gray-800">{{ $product['product_name'] }}</p>
                                                    <p class="text-sm text-gray-500">Qty: {{ $product['count'] }}</p>
                                                </div>
                                            </div>
                                            <p class="font-bold text-gray-800">
                                                {{ number_format($item[0]['product_price'] * $product['count']) }} MMK</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="bg-gray-50 rounded-2xl p-6 flex justify-between items-center">
                                    <span class="font-bold text-gray-600">Grand Total</span>
                                    <span
                                        class="text-2xl font-black text-indigo-600">{{ number_format($item[0]['total_amount']) }}
                                        MMK</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif


            {{--  HISTORY SECTION --}}
            @php $hasHistory = false; @endphp
            @foreach ($order as $item)
                @if ($item[0]['status'] != 0)
                    @php $hasHistory = true; @endphp
                @endif
            @endforeach

            @if ($hasHistory)
                <div class="border-l-8 border-indigo-500 pl-4 mt-16">
                    <h2 class="text-2xl font-black text-gray-800 uppercase tracking-wider">Order History</h2>
                    <p class="text-gray-500 text-sm">You can check your order history here.</p>
                </div>

                @foreach ($order as $item)
                    @if ($item[0]['status'] != 0)
                        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-200">

                            <div class="{{ $item[0]['status'] == 1 ? 'bg-green-600' : 'bg-red-600' }} p-8 text-center">
                                <div class="inline-flex items-center justify-center bg-white w-16 h-16 rounded-full mb-4">
                                    @if ($item[0]['status'] == 1)
                                        <i class="fa-solid fa-check text-3xl text-green-600"></i>
                                    @else
                                        <i class="fa-solid fa-xmark text-3xl text-red-600"></i>
                                    @endif
                                </div>
                                <h1 class="text-3xl font-bold text-white">
                                    {{ $item[0]['status'] == 1 ? 'Accepted' : 'Rejected' }}
                                </h1>
                                <p class="mt-2 text-white opacity-90 font-light">
                                    {{ $item[0]['status'] == 1 ? 'Your order has been confirmed.' : 'This order has been cancelled.' }}
                                </p>
                            </div>

                            <div class="p-8">
                                {{-- Order Meta --}}
                                <div class="flex justify-between mb-8 pb-6 border-b border-gray-100">
                                    <div>
                                        <p class="text-sm text-gray-400 uppercase">Order Number</p>
                                        <p class="text-lg font-bold">{{ $item[0]['order_code'] }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm text-gray-400 uppercase">Date</p>
                                        <p class="text-lg font-bold">{{ $item[0]['created_at']->format('j F Y') }}</p>
                                    </div>
                                </div>

                                {{-- Product List (Invoice Style) --}}
                                <div class="space-y-6 mb-8">
                                    @foreach ($item as $product)
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="{{ asset('product/' . $product['product_image']) }}"
                                                    class="w-16 h-16 object-contain bg-gray-50 rounded-lg p-1">
                                                <div class="ml-4">
                                                    <p class="font-bold text-gray-800">{{ $product['product_name'] }}</p>
                                                    <p class="text-sm text-gray-500">Qty: {{ $product['count'] }}</p>
                                                </div>
                                            </div>
                                            <p class="font-bold text-gray-800">
                                                {{ number_format($item[0]['product_price'] * $product['count']) }} MMK</p>
                                        </div>
                                    @endforeach
                                </div>

                                {{-- Grand Total --}}
                                <div class="bg-gray-50 rounded-2xl p-6 flex justify-between items-center">
                                    <span class="font-bold text-gray-600">Grand Total</span>
                                    <span
                                        class="text-2xl font-black {{ $item[0]['status'] == 1 ? 'text-green-600' : 'text-red-600' }}">
                                        {{ number_format($item[0]['total_amount']) }} MMK
                                    </span>
                                </div>

                                <div class="mt-8 flex gap-3 print:hidden">
                                    <button onclick="window.print()"
                                        class="flex-1 bg-gray-800 text-white font-bold py-3 rounded-xl hover:bg-black transition">
                                        Print Invoice
                                    </button>
                                    <a href="{{ route('userShop') }}"
                                        class="flex-1 text-center border border-gray-300 text-gray-600 font-bold py-3 rounded-xl hover:bg-gray-50">
                                        Shop Again
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

        </div>
    </div>

@endsection
