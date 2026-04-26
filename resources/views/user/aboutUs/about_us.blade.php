@extends('user.layouts.master')


@section('content')
    <section class="bg-gray-100 py-12 px-6 md:px-0 lg:px-0 font-sans">

        <div class="max-w-7xl mx-auto bg-white p-8 mb-16">
            <h1 class="text-4xl md:text-5xl font-medium text-gray-800 mb-8">About Us</h1>

            <div class="space-y-6 text-gray-600 leading-relaxed text-lg mb-10 ">
                <p>
                    mDrive is the leading Apple Authorized Reseller in Myanmar, providing a wide range of the latest Apple
                    products such as iPhone, iPad, Mac, Apple Watch, Apple TV and Accessories. We also offer a diverse
                    selection of branded and third-party accessories, giving our customers an unparalleled shopping
                    experience.
                </p>
                <p>
                    Our team of well-trained and passionate staff is dedicated to deliver exceptional support and services
                    to all our customers. We are committed to provide an outstanding Apple experience that exceeds our
                    customer's expectations.
                </p>
                <p>
                    We currently have multiple retail stores in Yangon and Mandalay. Our first retail store opened at
                    Junction Mawtin, followed by the second one at City Mall (St. John). Our largest store is located on
                    Kabar Aye Pagoda Road. We also deliver our products and services to customers all across Myanmar.
                </p>
                <p>
                    mDrive is a subsidiary of mCareAsia Group Company Limited, which provides us with access to a robust
                    network and extensive resources to offer our customers even better and more services.
                </p>
            </div>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 ">

                <div class="md:col-span-2">
                    <img src="{{ asset('user/image/iphoneshop.jpg') }}" alt="mDrive Store"
                        class="w-full h-80 object-cover rounded-sm shadow-sm">
                </div>
                <div class="md:col-span-1">
                    <img src="{{ asset('user/image/iphoneshop1.jpg') }}" alt="mDrive Store"
                        class="w-full h-80 object-cover rounded-sm shadow-sm">
                </div>

                <div class="md:col-span-1">
                    <img src="{{ asset('user/image/iphoneshop2.jpg') }}" alt="mDrive Interior"
                        class="w-full h-96 object-cover rounded-sm shadow-sm">
                </div>
                <div class="md:col-span-1">
                    <img src="{{ asset('user/image/iphoneshop1.jpg') }}" alt="mDrive Store Front"
                        class="w-full h-96 object-cover rounded-sm shadow-sm">
                </div>
                <div class="md:col-span-1">
                    <img src="{{ asset('user/image/iphoneshop2.jpg') }}" alt="mDrive Counter"
                        class="w-full h-96 object-cover rounded-sm shadow-sm">
                </div>

            </div>

        </div>


    </section>
@endsection
