
@extends('user.layouts.master')

@section('content')

 @foreach ($order as $item)

<div class="min-h-screen bg-gray-100 py-12 px-4">
    <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden" id="productTable-1">


            {{-- Header: Status Section --}}
            <div class="bg-indigo-600 p-8 text-center">
                <div  class="inline-flex items-center justify-center bg-white w-16 h-16 rounded-full mb-4">
                    @if ($item[0]['status'] == 0)
                     <i class="fa-regular fa-clock text-3xl "></i>
                    @elseif ($item[0]['status'] == 1)
                    <i class="fa-solid fa-check  text-3xl"></i>
                    @else
                    <i class="fa-regular fa-circle-xmark text-3xl "></i>
                     @endif
                </div>

               <div class="block">
                 @if ($item[0]['status'] == 0)
                    <h1 class="text-3xl font-bold text-amber-300">Pending...</h1>
                @elseif ($item[0]['status'] == 1)
                    <h1 class="text-3xl font-bold text-white">Accepted</h1>
                @else
                    <h1 class="text-3xl font-bold text-red-700">Rejected...</h1>
                @endif
               </div>
                <p class="mt-2 opacity-90">Thank you for your purchase. We've received your order.</p>
            </div>

            <div class="p-8">
                {{-- Order Meta: Number & Date --}}
                <div class="flex flex-col md:flex-row justify-between mb-8 pb-6 border-b border-gray-100 gap-4">
                    <div>
                        <p class="text-sm text-gray-500 uppercase font-semibold">Order Number</p>
                        <p class="text-lg font-bold text-gray-800">{{ $item[0]['order_code'] }}</p>
                    </div>
                    <div class="md:text-right">
                        <p class="text-sm text-gray-500 uppercase font-semibold">Date</p>
                        <p class="text-lg font-bold text-gray-800">{{ $item[0]['created_at']->format('j F Y') }}</p>
                    </div>
                </div>

                {{-- Product List Section (ဒီနေရာမှာ တစ်ခုချင်းစီ အောက်ဆင်းအောင် ပြင်ထားပါတယ်) --}}
                <div class="space-y-6 mb-8">
                    @foreach ($item as $product)
                    <div class="flex items-center justify-between border-b border-gray-50 pb-4">
                        <div class="flex items-center ">
                            <div class="w-20 h-20 bg-gray-50 rounded-lg flex-shrink-0 flex items-center justify-center p-2">
                                <img src="{{ asset('product/'.$product['product_image']) }}" alt="Product" class="object-contain max-h-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-lg text-gray-800">{{ $product['product_name'] }}</p>
                                <p class="text-gray-500">Qty: {{ $product['count'] }}</p>

                            </div>

                            {{-- <div class="ml-6">
                                <p class="font-bold text-sm text-gray-800">Capcity : {{ $cart[0]['capacity'] }}</p>
                            </div>

                             <div class="ml-4">
                                <p class="font-bold text-sm text-gray-800">Color : {{ $cart[0]['color'] }}</p>
                            </div> --}}

                        </div>
                        <div class="text-right font-bold text-gray-800 text-lg">
                            {{ number_format($item[0]['product_price'] * $product['count']) }} MMK
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Totals --}}
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex justify-between items-center text-xl font-black text-gray-900">
                        <span>Grand Total</span>
                        <span class="text-indigo-600 text-2xl" id="finalTotal-1">
                            {{ number_format($item[0]['total_amount']) }} MMK
                        </span>
                    </div>
                </div>

                {{-- Buttons (Print မှာ မပေါ်အောင် print:hidden ထည့်ထားပါတယ်) --}}
                <div class="mt-10 flex flex-col gap-3 print:hidden">
                    <button onclick="window.print()" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-xl transition-all shadow-lg">
                        Print Invoice
                    </button>
                    <a href="{{route('userShop')}}" class="w-full text-center text-gray-500 hover:text-gray-800 font-medium py-2">
                        Back to Shopping
                    </a>
                </div>
            </div>


    </div>
</div>

  @endforeach

{{-- Footer ကို wrapper အပြင်ထုတ်ထားတာ သေချာပါစေ --}}

@endsection
