@extends('user.layouts.master')


@section('content')
    {{-- <section class="bg-gray-50 py-16 px-8 md:px-20 min-h-500px flex items-center">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <div class="space-y-6  w-2xl">
                <h3 class="text-2xl md:text-4xl font-semibold text-gray-800 leading-tight">
                    What is mCare Ultra Protection Plan?
                </h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    mCare Ultra Protection Plan (MUPP) provides coverage for accidental damage
                    and liquid damage incidents for one year from the date of purchase or
                    activation (whichever is earlier), as these are not included in the standard 1-year
                    Apple Warranty. Additionally, battery issues are covered for up to two years.
                </p>

            </div>

            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('user/image/16promax.jpg') }}" alt="iPhone mCare Protection"
                    class="w-full max-w-md object-contain">
            </div>

        </div>
    </section>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-blue-500 mb-6 text-center">Only for </h1>
        <h1 class="text-5xl font-bold text-black mb-6 text-center">iPhone</h1>
        <!-- Image Grid Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 bg-gray-50 gap-4">
            <!-- Image Card 1 -->
            <div class="overflow-hidden rounded-lg  shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 1"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <!-- Image Card 2 -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 2"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <!-- Image Card 3 -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 3"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <!-- Image Card 4 -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 4"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <!-- Image Card 5 -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 5"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <!-- Image Card 6 -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="https://picsum.photos" alt="Nature image 6"
                    class="w-full h-48 object-cover transition duration-500 ease-in-out transform hover:scale-105">
            </div>
        </div>
    </div> --}}

    <header class="bg-black text-white p-4">
        <div class="container mx-auto flex justify-between items-center text-sm">
            <div class="flex items-center space-x-6">
                <h1 class="text-2xl font-bold italic">mCare</h1>
                <nav class="hidden md:flex space-x-4 uppercase text-[10px] tracking-widest">
                    <a href="#" class="hover:text-gray-400">Home</a>
                    <a href="#" class="hover:text-gray-400">About Us</a>
                    <a href="#" class="hover:text-gray-400">Service Pricing</a>
                    <a href="#" class="hover:text-gray-400">Appointment</a>
                </nav>
            </div>
            <div class="text-red-500 text-xs">Myanmar</div>
        </div>
    </header>

    <section class="container mx-auto px-6 py-16 flex flex-col md:flex-row bg-gray-100 items-center">
        <div class="md:w-1/2">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800">What is mCare Ultra Protection Plan?</h2>
            <p class="text-gray-600 leading-relaxed text-sm">
                mCare Ultra Protection Plan (MUPP) provides coverage for accidental damage
                and liquid damage incidents for one year from the date of purchase or
                activation (whichever is earlier), as these are not included in the standard 1-year
                Apple Warranty. Additionally, battery issues are covered for up to two years.
            </p>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
            <img src="{{ asset('user/image/16promax.jpg') }}" alt="iPhone" class="w-full max-w-sm">
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="container mx-auto px-6 text-center">
            <span class="text-blue-500 font-bold text-xl uppercase">Only For</span>
            <h1 class="text-5xl font-bold mb-12">iPhone</h1>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-10 rounded-lg flex flex-col items-center">
                    <div class="w-32 h-32 bg-black rounded-full flex items-center justify-center mb-6">
                        <span class="text-green-500 text-center font-bold text-xs">mCare <br> ULTRA</span>
                    </div>
                    <h3 class="font-bold mb-2">Accidental or liquid damage coverage</h3>
                    <p class="text-xs text-gray-500">Enjoy Unlimited screen replacements, Unlimited back glass...</p>
                </div>
                <div class="bg-gray-100 p-10 rounded-lg flex flex-col items-center">
                    <div class="w-32 h-32 flex items-center justify-center mb-6">
                        <svg class="w-20 h-20 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold mb-2">Accidental screen crack repair/replacement</h3>
                    <p class="text-xs text-gray-500">Repair or replacement screen crack coverage from Apple Authorized...
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-8">mCare Ultra Protection Plan</h2>
            <p class="text-center text-gray-500 mb-6">Service fees for accidental damage</p>

            <div class="border border-gray-200 bg-white rounded overflow-hidden">
                <table class="w-full text-left text-sm">
                    <tr class="border-b">
                        <td class="p-4 text-gray-500">Display (Unlimited within one year)</td>
                        <td class="p-4 text-right">99,000 Kyats</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-4 text-gray-500">Back Glass (Unlimited within one year)</td>
                        <td class="p-4 text-right">99,000 Kyats</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-4 text-gray-500">Whole Unit Replacement</td>
                        <td class="p-4 text-right">999,000 Kyats</td>
                    </tr>
                    <tr>
                        <td class="p-4 text-gray-500 font-bold">Battery Replacement</td>
                        <td class="p-4 text-right text-green-600 font-bold">Free</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="py-16 container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-bold mb-8">We would like to clarify more</h2>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 border-b flex justify-between items-center cursor-pointer">
                <span class="text-sm font-medium">How to Buy mCare Ultra Protection Plan?</span>
                <span class="text-xs text-gray-400">See details ⌄</span>
            </div>
            <div class="bg-gray-50 p-4 border-b flex justify-between items-center cursor-pointer">
                <span class="text-sm font-medium">Terms and Conditions</span>
                <span class="text-xs text-gray-400">See details ⌄</span>
            </div>
        </div>
    </section>
@endsection
