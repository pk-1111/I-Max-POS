
@extends('user.layouts.master')


@section('content')
   <div class="max-w-6xl mx-auto p-6 bg-white">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

    <div>
      <div class="bg-gray-50 rounded-2xl p-8 flex justify-center items-center mb-4 relative">
        <img src="{{ asset('product/' .$product->image) }}" alt="iPhone 17 Pro Max" style="height: 500px" class=" object-contain">
        <button class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">❮</button>
        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">❯</button>
      </div>

      <div class="flex space-x-4 overflow-x-auto py-2">
        <div class="w-20 h-20 border-2 border-orange-500 rounded-lg p-2 cursor-pointer bg-gray-50">
          <img src="https://via.placeholder.com/80" class="object-contain">
        </div>
        <div class="w-20 h-20 border border-gray-200 rounded-lg p-2 cursor-pointer bg-gray-50">
          <img src="https://via.placeholder.com/80" class="object-contain">
        </div>
        </div>
    </div>

    <div class="space-y-6">
      <h1 class="text-3xl font-semibold text-gray-800">{{$product->name}}</h1>
      <p class="text-2xl font-bold text-blue-700">{{$product->price}} mmk</p>

    <form action="{{ route('addToCart') }}" method="post" >

        @csrf

     <input type="hidden" name="userId" value="{{Auth::user()->id}}">
      <input type="hidden" name="productId" value="{{$product->id}}">

    <div>

        <input type="hidden" name="capacity" id="input-capacity" value="256GB">


        <label class="text-sm font-medium text-gray-600">Capacity: <span id="display-capacity">256GB</span></label>
        <div class="flex gap-3 mt-2" id="capacity-container">

          <button  name="capacity"  type="button" onclick="selectOption('capacity','256GB',this)" class="  capacity-btn inactive-style  px-4 py-2 border-2 border-gray-800 rounded-md font-semibold bg-gray-800 text-white text-sm">256GB</button>
          <button name="capacity"  type="button" onclick="selectOption('capacity','512GB',this)" class="  capacity-btn inactive-style  px-4 py-2 border border-gray-300 rounded-md text-gray-400 text-sm">512GB</button>
          <button  name="capacity" type="button" onclick="selectOption('capacity','1TB',this)" class="  capacity-btn inactive-style  px-4 py-2 border border-gray-300 rounded-md text-gray-400 text-sm">1TB</button>
          <button name="capacity"  type="button" onclick="selectOption('capacity','2TB',this)" class="  capacity-btn inactive-style  px-4 py-2 border border-gray-300 rounded-md text-gray-400 text-sm">2TB</button>
        </div>
      </div>

      <div>
         <input type="hidden" name="color" id="input-color" value="Cosmic Orange">
        <label class="text-sm font-medium text-gray-600">Color: <span id="display-color">Cosmic Orange</span></label>
        <div class="flex gap-3 mt-2" id="color-container">
          <button type="button" onclick="selectOption('color','Cosmic Orange',this)"  class="  color-btn active-style   px-4 py-2 border-2 border-gray-800 rounded-md bg-gray-600 text-white text-sm">Cosmic Orange</button>
          <button type="button" onclick="selectOption('color','Deep Blue',this)"  class="  color-btn inactive-style   px-4 py-2 border border-gray-200 rounded-md text-gray-500 text-sm">Deep Blue</button>
          <button type="button" onclick="selectOption('color','Silver',this)"  class="  color-btn inactive-style   px-4 py-2 border border-gray-200 rounded-md text-gray-500 text-sm">Silver</button>
        </div>
      </div>

      <div class="mt-2 mb-2">
        <span><i class="fa-solid fa-eye"></i> {{count($view_count)}} </span>
      </div>

      <div class="space-y-3">
        <div class=" quantity-control flex items-center space-x-4 border border-gray-300 rounded-md w-max px-4 py-2">
            <button type="button" onclick="changeQty(-1)" class="text-xl">-</button>
            <input id="count" name="count" type="text" value="1" class="w-8 text-center outline-none">
            <button type="button" onclick="changeQty(1)" class="text-xl">+</button>
        </div>
        <button type="submit" class="w-full bg-gray-800 text-white py-4 rounded-md font-bold flex justify-center items-center gap-2">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
           ADD TO CART
        </button>
        <button class="w-full bg-gray-700 text-white py-4 rounded-md font-bold">Buy it now</button>
      </div>
    </form>

      <div class="grid grid-cols-2 gap-4 pt-6 border-t border-gray-100">
        <div class="bg-black text-white p-4 rounded-xl flex items-center space-x-3">
            <div class="text-green-400 text-2xl font-bold">∞</div>
            <div>
                <p class="text-xs font-bold leading-tight">mCare Ultra</p>
                <p class="text-[10px] text-gray-400">PROTECTION</p>
            </div>
        </div>
        <div class="border border-gray-200 p-4 rounded-xl text-center">
            <p class="text-xs font-bold">TRADE-IN CORNER</p>
        </div>
      </div>
    </div>

  </div>

  <div class="mt-16 border-t pt-8">
    <h3 class="font-bold text-gray-700 mb-4">DESCRIPTION</h3>
    <p class="text-gray-600 text-sm leading-relaxed">
      iPhone 17 Pro Max. The most powerful iPhone ever. Brilliant 6.9-inch display, aluminum unibody design, A19 Pro chip, all-new 48MP rear cameras, and best-ever battery life.
    </p>
  </div>
</div>
@endsection










