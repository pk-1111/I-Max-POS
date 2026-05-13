@extends('user.layouts.master')

@section('content')
    <!-- Cart Page Start -->
    <div class="min-h-screen bg-gray-50 py-10 px-4 md:px-20 font-sans text-gray-800">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-light text-center tracking-widest mb-12 uppercase">Shopping Cart</h1>

            <!-- Desktop Header -->
            <div
                class="hidden md:grid grid-cols-12 border-b border-gray-300 pb-4 text-xs font-semibold uppercase tracking-wider text-gray-500">
                <div class="col-span-6">Product</div>
                <div class="col-span-2 text-center">Price</div>
                <div class="col-span-2 text-center">Quantity</div>
                <div class="col-span-2 text-right">Total</div>
            </div>

            <table class="w-full border-collapse" id="productTable">
                <tbody>
                    <input type="hidden" id="userId" value="{{ Auth::user()->id }}">

                    @foreach ($cart as $item)
                        <tr id="row-{{ $item->cart_id }}"
                            class="border-b border-gray-200 cart-table hover:bg-white transition-colors">
                            <!-- Product Info -->
                            <td class="py-8 px-4" style="width: 50%;">
                                <div class="flex items-center gap-6">
                                    <input type="hidden" class="cartId" value="{{ $item->cart_id }}">
                                    <input type="hidden" class="productId" value="{{ $item->product_id }}">

                                    <button class="text-gray-400 hover:text-red-500 transition btn-remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>

                                    <img src="{{ asset('product/' . $item->image) }}"
                                        class="w-20 h-24 object-cover bg-gray-100 rounded shadow-sm">

                                    <div>
                                        <h2 class="text-sm font-semibold">{{ $item->name }}</h2>
                                        <p class="text-[11px] text-gray-500 mt-1 uppercase tracking-tighter">Capacity:
                                            {{ $item->capacity }}</p>
                                        <p class="text-[11px] text-gray-500 uppercase tracking-tighter">Color:
                                            {{ $item->color }}</p>
                                    </div>
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="text-center text-sm font-medium py-8 px-4 price" style="width: 16.66%;">
                                {{ $item->price }} MMK
                            </td>

                            <!-- Quantity Control -->
                            <td class="py-8 px-4" style="width: 16.66%;">
                                <div
                                    class="flex justify-center items-center space-x-3 border border-gray-300 rounded-md w-max px-3 py-1.5 mx-auto bg-white">

                                    <button type="button" onclick="decrease(this)"
                                        class="text-xl font-light hover:text-orange-500 transition btn-minus px-2">-</button>
                                    <input type="text" value="{{ $item->qty }}"
                                        class="w-8 text-center outline-none qty font-semibold bg-transparent" readonly>
                                    <button type="button" onclick="increase(this)"
                                        class="text-xl font-light hover:text-orange-500 transition btn-plus px-2">+</button>
                                </div>
                            </td>

                            <!-- Total -->
                            <td class="text-right text-sm font-bold py-8 px-4 total" style="width: 16.66%;">
                                {{ $item->price * $item->qty }} MMK
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Footer Section -->
            <div class="mt-12 flex flex-col md:flex-row justify-between gap-10">


                <div class="flex-1 max-w-sm">
                    <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-2 ml-1">Order
                        Note</label>
                    <textarea placeholder="Add special instructions for your order..."
                        class="w-full border border-gray-300 p-4 text-xs focus:outline-none focus:border-black rounded-sm bg-white"
                        rows="3"></textarea>
                </div>

                <div class="w-full md:w-80 text-right space-y-4">
                    <div class="flex justify-between items-center text-xs font-semibold uppercase tracking-widest">
                        <span class="text-gray-500">Subtotal</span>
                        <span id="subTotal" class="font-bold">{{ $total }} MMK</span>
                    </div>

                    <div class="space-y-1">
                        <div
                            class="flex justify-between items-center text-xs font-semibold uppercase tracking-widest text-emerald-600">
                            <span>Shop Discount</span>
                            <span>- 50000 MMK</span>
                        </div>
                        <p class="text-[9px] text-gray-400 italic font-medium lowercase">(Only iPhone, iPad, MacBook &
                            iWatch)</p>
                    </div>

                    <div class="flex justify-between items-center border-t border-gray-300 pt-6 mt-4">
                        <span class="text-xs font-bold uppercase tracking-widest">Grand Total</span>
                        <span class="text-xl font-black" id="finalTotal">{{ $total - 50000 }} MMK</span>
                    </div>

                    <button @if (count($cart) == 0) disabled @endif id="btn-checkout"
                        class="w-full bg-gray-900 text-white py-4 text-[11px] font-bold uppercase tracking-[0.2em] hover:bg-black transition shadow-lg active:scale-[0.98]">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
@endsection
