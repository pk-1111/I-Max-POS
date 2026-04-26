@extends('user.layouts.master')


@section('content')
    <div class="container mx-auto p-4 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="{{ route('iphoneShop') }}">
                <div class="relative overflow-hidden rounded-xl bg-white-100 group">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 z-10">
                        <span
                            class="bg-white/80 rounded  flex items-center justify-center  transition-all duration-300 hover:bg-black hover:text-white cursor-pointer text-black backdroop-blur-sm px-6 py-2 roundend-md shadow-sm font-medium">iPhone</span>
                    </div>
                    <img class="w-full h-auto transition-transform duration-500 group-hover:scale-105"
                        src="{{ asset('user/image/16promax.jpg') }}" alt="iPhone">
                </div>
            </a>

            <a href="{{ route('ipadShop') }}">
                <div class="relative overflow-hidden rounded-xl bg-white-100 group">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 z-20">
                        <span
                            class="bg-white/80 flex items-center justify-center  transition-all duration-300 hover:bg-black hover:text-white cursor-pointer text-black backdroop-blur-sm px-6 py-2 roundend shadow-sm font-medium">iPad</span>
                    </div>
                    <img class="w-full h-auto transition-transform duration-500 group-hover:scale-105"
                        src="{{ asset('user/image/ipad.jpg') }}" alt="iPhone">
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <a href="{{ route('macbookShop') }}">
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-white w-full aspect-4/3 flex items-center justify-center">
                        <img src="{{ asset('user/image/macbook.jpg') }}"
                            class="w-4/4 h-auto transition-transform duration-500 group-hover:scale-110" alt="">
                    </div>
                    <span
                        class="bg-white/80 rounded  flex items-center justify-center  transition-all duration-300 hover:bg-black hover:text-white cursor-pointer text-black backdroop-blur-sm px-6 py-2 roundend-md  font-medium">Mac</span>

                </div>
            </a>

            <a href="{{ route('iWatchShop') }}">
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-white w-full aspect-4/3 flex items-center justify-center">
                        <img src="{{ asset('user/image/applewatch.jpg') }}"
                            class="w-4/4 h-auto transition-transform duration-500 group-hover:scale-110" alt="">
                    </div>
                    <span
                        class="bg-white/80 rounded  flex items-center justify-center  transition-all duration-300 hover:bg-black hover:text-white cursor-pointer text-black backdroop-blur-sm px-6 py-2 roundend-md  font-medium">Watch</span>

                </div>
            </a>
            <a href="{{ route('airpodsShop') }}">
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-white w-full aspect-4/3 flex items-center justify-center">
                        <img src="{{ asset('user/image/airpod.jpg') }}"
                            class="w-4/4 h-auto transition-transform duration-500 group-hover:scale-110" alt="">
                    </div>
                    <span
                        class="bg-white/80 rounded  flex items-center justify-center  transition-all duration-300 hover:bg-black hover:text-white cursor-pointer text-black backdroop-blur-sm px-6 py-2 roundend-md  font-medium">Airpods</span>

                </div>
            </a>


        </div>
    </div>
@endsection
