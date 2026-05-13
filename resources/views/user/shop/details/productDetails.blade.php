@extends('user.layouts.master')

@section('content')
    <div class="max-w-6xl mx-auto p-4 md:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 bg-white shadow-sm rounded-3xl p-6">

            <!-- Left: Image Gallery -->
            <div class="space-y-4">
                <div class="bg-gray-50 rounded-3xl p-10 flex justify-center items-center relative aspect-square group">
                    <img src="{{ asset('product/' . $product->image) }}" alt="{{ $product->name }}"
                        class="max-h-80 object-contain transition-transform duration-300 group-hover:scale-105">

                    <button
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 rounded-full shadow-md flex items-center justify-center hover:bg-white transition">❮</button>
                    <button
                        class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 rounded-full shadow-md flex items-center justify-center hover:bg-white transition">❯</button>
                </div>

                <!-- Thumbnails -->
                <div class="flex gap-4 overflow-x-auto pb-2">
                    <div class="w-20 h-20 border-2 border-orange-500 rounded-xl p-1 shrink-0">
                        <img src="{{ asset('product/' . $product->image) }}" class="w-full h-full object-contain">
                    </div>
                    <div class="w-20 h-20 border-2 border-orange-500 rounded-xl p-1 shrink-0">
                        <img src="{{ asset('product/' . $product->image) }}" class="w-full h-full object-contain">
                    </div>
                </div>
            </div>

            <!-- Right: Product Details -->
            <div class="flex flex-col">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                    <p class="text-2xl font-black text-blue-600 tracking-tight">{{ number_format($product->price) }} MMK</p>

                    <div class="mt-2 text-gray-400 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-eye text-xs"></i>
                        <span>{{ count($view_count) }} views</span>
                    </div>
                </div>

                <form action="{{ route('addToCart') }}" method="post" class="space-y-8">
                    @csrf
                    <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="productId" value="{{ $product->id }}">

                    <!-- Capacity Selection -->
                    <div class="space-y-3">
                        <label class="text-sm font-bold uppercase tracking-wider text-gray-500">Capacity: <span
                                id="display-capacity" class="text-gray-900">256GB</span></label>
                        <input type="hidden" name="capacity" id="input-capacity" value="256GB">
                        <div class="flex flex-wrap gap-2">
                            @foreach (['256GB', '512GB', '1TB', '2TB'] as $cap)
                                <button type="button" onclick="selectOption('capacity','{{ $cap }}',this)"
                                    class="capacity-btn px-6 py-2 border rounded-xl text-sm font-medium transition-all
                            {{ $cap == '256GB' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white text-gray-700 border-gray-200 hover:border-gray-400' }}">
                                    {{ $cap }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Color Selection -->
                    <div class="space-y-3">
                        <label class="text-sm font-bold uppercase tracking-wider text-gray-500">Color: <span
                                id="display-color" class="text-gray-900">Cosmic Orange</span></label>
                        <input type="hidden" name="color" id="input-color" value="Cosmic Orange">
                        <div class="flex flex-wrap gap-2">
                            @foreach (['Cosmic Orange', 'Deep Blue', 'Silver'] as $clr)
                                <button type="button" onclick="selectOption('color','{{ $clr }}',this)"
                                    class="color-btn px-5 py-2 border rounded-xl text-sm font-medium transition-all
                            {{ $clr == 'Cosmic Orange' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white text-gray-700 border-gray-200 hover:border-gray-400' }}">
                                    {{ $clr }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Quantity & Actions -->
                    <div class="pt-4 space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center border border-gray-200 rounded-xl p-1 bg-gray-50">
                                <button type="button" onclick="changeQty(-1)"
                                    class="w-10 h-10 flex items-center justify-center text-xl font-bold hover:text-blue-600">－</button>
                                <input id="count" name="count" type="text" value="1" readonly
                                    class="w-12 text-center bg-transparent font-bold text-gray-900 outline-none">
                                <button type="button" onclick="changeQty(1)"
                                    class="w-10 h-10 flex items-center justify-center text-xl font-bold hover:text-blue-600">＋</button>
                            </div>

                            <button type="submit"
                                class="flex-1 bg-gray-900 text-white py-4 rounded-xl font-bold flex justify-center items-center gap-3 hover:bg-black transition-all transform active:scale-[0.98]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                ADD TO CART
                            </button>
                        </div>

                        <button type="submit"
                            class="w-full border-2 border-gray-900 text-gray-900 py-4 rounded-xl font-bold hover:bg-gray-50 transition-all">
                            BUY IT NOW
                        </button>
                    </div>
                </form>

                <!-- Protection Plan -->
                <div class="grid grid-cols-2 gap-3 mt-8 pt-8 border-t border-gray-100">
                    <a href="{{ route('protectionPage') }} class="bg-blue-50 p-4 rounded-2xl flex items-center gap-3 border
                        border-blue-100">
                        <div
                            class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-lg">
                            ∞</div>
                        <div>
                            <p class="text-xs font-bold text-blue-900">iMax Ultra</p>
                            <p class="text-[10px] text-blue-600 font-semibold">PROTECTION</p>
                        </div>
                    </a>
                    <a href="{{ route('tradeInPage') }}"
                        class="border border-gray-200 p-4 rounded-2xl flex items-center justify-center">
                        <p class="text-xs font-bold text-gray-600 uppercase tracking-tighter">Trade-in Corner</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
