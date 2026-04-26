@extends('user.layouts.master')


@section('content')
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center mb-16">
        @if (count($products) > 0)


        @foreach ($products  as $item)

         <a href="{{route('productDetails',$item->id)}}">
            <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('product/' .$item->image) }}" alt="iPhone" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">{{ $item['name'] }}</p>
            <p class="text-xl">
                 @if($item->rate > 0)

                                 <span style="text-decoration: line-through; color: gray;">
                                   {{ number_format($item->price) }} Ks
                                   </span><br>

                                     @php
                                      $discountPrice = $item->price - ($item->price * ($item->rate / 100));
                                     @endphp

                                     <b class="text-danger">{{ number_format($discountPrice) }} Ks</b>
                                   <span class="badge bg-danger">{{ $item->rate }}% OFF</span>
                                    @else

                                <b>{{ number_format($item->price) }} Ks</b>
                                 @endif
            </p>
        </div>

         </a>
        @endforeach

        @endif

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
@extends('user.layouts.master')


@section('content')
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center mb-16">
        @if (count($products) > 0)


        @foreach ($products  as $item)

         <a href="{{route('productDetails',$item->id)}}">
            <div class="flex flex-col items-center group cursor-pointer">
            <div class="h-32 flex items-center mb-2">
                <img src="{{ asset('product/' .$item->image) }}" alt="iPhone" class="max-h-full">
            </div>
            <p class="font-medium group-hover:text-blue-600">{{ $item['name'] }}</p>
            <p class="text-xl">
                 @if($item->rate > 0)

                                 <span style="text-decoration: line-through; color: gray;">
                                   {{ number_format($item->price) }} Ks
                                   </span><br>

                                     @php
                                      $discountPrice = $item->price - ($item->price * ($item->rate / 100));
                                     @endphp

                                     <b class="text-danger">{{ number_format($discountPrice) }} Ks</b>
                                   <span class="badge bg-danger">{{ $item->rate }}% OFF</span>
                                    @else

                                <b>{{ number_format($item->price) }} Ks</b>
                                 @endif
            </p>
        </div>

         </a>
        @endforeach

        @endif

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
