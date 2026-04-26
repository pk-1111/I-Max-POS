@extends('user.layouts.master')


@section('content')
    <!-- Cart Page Start -->
        <div class="min-h-screen bg-gray-50 py-10 px-4 md:px-20 font-sans text-gray-800">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-normal text-center tracking-widest mb-12 uppercase">Shopping Cart</h1>

    <div class="hidden md:grid grid-cols-12 border-b border-gray-300 pb-4 text-xs font-semibold uppercase tracking-wider text-gray-500">
      <div class="col-span-6">Product</div>
      <div class="col-span-2 text-center">Price</div>
      <div class="col-span-2 text-center">Quantity</div>
      <div class="col-span-2 text-right">Total</div>
    </div>

 <table class="w-full border-collapse" id="productTable">
    <tbody>

        <input type="hidden" id="userId" value="{{Auth::user()->id}}"> <!--  for checkout btn -->

        @foreach ($cart as $item)
        <tr id="row-{{$item->cart_id}}" class="border-b border-gray-200 cart-table">

            <td class="py-8 px-4" style="width: 50%;">
                <div class="flex items-center gap-6">
                    <input type="hidden"  class="cartId" value="{{$item->cart_id}}">
                    <input type="hidden"  class="productId" value="{{$item->product_id}}">
                    <button class="text-gray-400 hover:text-red-500 transition btn-remove">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <img src="{{ asset('product/'.$item->image) }}" alt="iPhone 17 Pro Max" class="w-20 h-24 object-cover bg-orange-100">
                    <div>
                        <h2 class="text-sm font-medium">{{ $item->name }}</h2>
                        <p class="text-xs text-gray-500 mt-1">Capacity: {{ $item->capacity }}</p>
                        <p class="text-xs text-gray-500">Color: {{ $item->color }}</p>
                    </div>
                </div>
            </td>

            <td class="text-center text-sm font-medium py-8 px-4 price" style="width: 16.66%;">
                {{ $item->price }} MMK
            </td>

            <td class="py-8 px-4" style="width: 16.66%;">
                <div class="flex justify-center items-center space-x-4 border border-gray-300 rounded-md w-max px-4 py-2 mx-auto">
                    <button type="button" onclick="increase(this)" class="text-xl btn-plus">+</button>
                    <input type="text" value="{{ $item->qty }}" class="w-8 text-center outline-none qty">
                    <button type="button" onclick="decrease(this)" class="text-xl btn-minus">-</button>
                </div>
            </td>

            <td class="text-right text-sm font-medium py-8 px-4 total" style="width: 16.66%;">
                {{ $item->price * $item->qty }} MMK
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

    <div class="mt-8 flex flex-col md:flex-row justify-between gap-10">
      <div class="space-y-4">
        <a href="" class="flex items-center gap-2 text-xs uppercase tracking-widest hover:underline">
         <i class="fa-solid fa-share"></i>
          Continue Shopping
        </a>
        <button class="flex items-center gap-2 text-xs uppercase tracking-widest text-gray-500 hover:text-black transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
          Clear Shopping Cart
        </button>
      </div>

      <div class="flex-1 max-w-sm">
        <label class="block text-xs font-semibold uppercase tracking-widest mb-2">Note</label>
        <textarea placeholder="Add special instructions for your order..." class="w-full border border-gray-300 p-3 text-xs focus:outline-none focus:border-black" rows="3"></textarea>
      </div>

      <div class="w-full md:w-80 text-right space-y-4">
        <div class="flex justify-between items-center text-xs font-semibold uppercase tracking-widest">
          <span>Subtotal</span>
          <span id="subTotal">{{$total}} MMK</span>
        </div>
        <div class="flex justify-between items-center text-xs font-semibold uppercase tracking-widest">
          <span>Shop 10Year's Discount</span>
          <span> 50000 MMK  </span>

        </div>
        <div class="flex justify-between items-center text-xs font-semibold uppercase tracking-widest" >
              <span>(Only iphone,ipad,macbook & i-watch)</span>
        </div>
        <div class="flex justify-between items-center border-t border-gray-300 pt-4">
          <span class="text-xs font-semibold uppercase tracking-widest">Grand Total</span>
          <span class="text-xl font-bold" id="finalTotal">{{$total - 50000}} MMK</span>
        </div>
         {{-- <a href="{{route('paymentPage')}}">Checkout</a> --}}
        <button @if (count($cart) == 0 ) disabled @endif id="btn-checkout" class="w-full bg-[#333333] text-white py-4 text-xs font-bold uppercase tracking-widest hover:bg-black transition">
          Proceed to Checkout
        </button>
      </div>
    </div>
  </div>
</div>
    <!-- Cart Page End -->


@endsection
