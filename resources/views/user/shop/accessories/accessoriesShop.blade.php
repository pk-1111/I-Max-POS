@extends('user.layouts.master')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-12 bg-[#fbfbfd]">
        <!-- Title Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-900 tracking-tight">Our Products</h2>
            <div class="h-1 w-20 bg-blue-600 mt-2"></div>
        </div>

        @if (count($products) > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @foreach ($products as $item)
                    <a href="{{ route('productDetails', $item->id) }}"
                        class="group bg-white rounded-3xl p-5 transition-all duration-500 hover:shadow-xl border border-gray-100 flex flex-col h-full">

                        <!-- Image Area -->
                        <div class="relative h-48 flex items-center justify-center mb-6 overflow-hidden">
                            <img src="{{ asset('product/' . $item->image) }}" alt="{{ $item->name }}"
                                class="max-h-full object-contain transition-transform duration-500 group-hover:scale-110">

                            @if ($item->rate > 0)
                                <span
                                    class="absolute top-0 right-0 bg-red-500 text-white text-[10px] font-bold px-2 py-1 rounded-full">
                                    -{{ $item->rate }}%
                                </span>
                            @endif
                        </div>

                        <!-- Content Area -->
                        <div class="flex flex-col flex-grow text-center">
                            <p
                                class="text-sm font-semibold text-gray-800 group-hover:text-blue-600 transition duration-300 line-clamp-2 min-h-[40px]">
                                {{ $item->name }}
                            </p>

                            <div class="mt-4">
                                @if ($item->rate > 0)
                                    @php
                                        $discountPrice = $item->price - $item->price * ($item->rate / 100);
                                    @endphp
                                    <p class="text-xs text-gray-400 line-through mb-1">
                                        {{ number_format($item->price) }} MMK
                                    </p>
                                    <p class="text-lg font-black text-red-600 leading-none">
                                        {{ number_format($discountPrice) }} <span class="text-[10px]">MMK</span>
                                    </p>
                                @else
                                    <p class="text-lg font-black text-gray-900 leading-none mt-4">
                                        {{ number_format($item->price) }} <span class="text-[10px]">MMK</span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Hover Action (Optional) -->
                        <div
                            class="mt-4 pt-4 border-t border-gray-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-blue-600 text-xs font-bold flex items-center justify-center">
                                View Details <i class="fa-solid fa-chevron-right ml-1 text-[8px]"></i>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20 bg-white rounded-3xl border border-dashed border-gray-300">
                <i class="fa-solid fa-box-open text-5xl text-gray-200 mb-4"></i>
                <p class="text-gray-500 font-medium">No products found.</p>
            </div>
        @endif
    </div>
@endsection
