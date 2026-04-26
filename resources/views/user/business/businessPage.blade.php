@extends('user.layouts.master')


@section('content')
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center mb-16">
        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/iphone16pxomax.jpg') }}" alt="iPhone" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">iPhone</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/ipad.jpg') }}" alt="iPad" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">iPad</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/applewatch.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">Apple Watch</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/promacbook.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">Macbook Pro</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/airpod.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">AirPods</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/airtag.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">Accessories</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/airtag.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">Accessories</p>
        </div>

        <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('user/image/airtag.jpg') }}" alt="Apple Watch" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">Accessories</p>
        </div>

    </div>
@endsection
