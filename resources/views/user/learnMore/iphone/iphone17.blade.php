@extends('user.layouts.master')


@section('content')
    <main class="bg-white text-zinc-900 font-sans">

        <section class="max-w-7xl mx-auto px-4 py-20 text-center">
            <p class="text-zinc-500 font-medium mb-2">iPhone 17</p>
            <h1 class="text-6xl md:text-7xl font-bold tracking-tighter mb-4">
                Magic<span class="text-purple-600">chromatic.</span><br>
                might.
            </h1>
            <p class="text-lg text-zinc-600 max-w-2xl mx-auto mb-8">
                Powerful new 5G chip. Striking new colors. All-day. All-day battery life.
            </p>
            <div class="flex justify-center space-x-4 mb-16">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full text-base font-medium">
                    Buy now
                </button>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full text-base font-medium">
                    See features
                </button>
                <a href="#" class="text-blue-600 hover:text-blue-700 px-6 py-3 text-base font-medium">
                    Learn more <span aria-hidden="true">&gt;</span>
                </a>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('user/image/iPhone17Details.jpg') }}" alt="Magicchromatic iPhones"
                    class="w-full max-w-4xl rounded-2xl shadow-xl">
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 py-20">
            <p class="text-zinc-500 font-medium mb-2">iPhone 17</p>
            <h2 class="text-4xl font-bold mb-8">Striking all-screen design.</h2>
            <p class="text-lg text-zinc-600 max-w-2xl mb-12">
                From a new dynamic island, to super durable ceramic shield front, iPhone 17 is built to perform and to last.
            </p>
            <div class="flex justify-center mb-8">
                <img src="{{ asset('user/image/iPhone17Screen.jpg') }}" alt="iPhone 17 All-Screen Design"
                    class="w-full max-w-5xl rounded-2xl shadow-xl">
            </div>
            <div class="flex justify-center space-x-3 mb-16">
                <span
                    class="w-4 h-4 rounded-full bg-pink-500 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
                <span
                    class="w-4 h-4 rounded-full bg-green-400 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
                <span
                    class="w-4 h-4 rounded-full bg-blue-400 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
                <span
                    class="w-4 h-4 rounded-full bg-purple-400 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
                <span
                    class="w-4 h-4 rounded-full bg-orange-400 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
                <span
                    class="w-4 h-4 rounded-full bg-red-400 cursor-pointer border-2 border-transparent hover:border-blue-500"></span>
            </div>
        </section>

    </main>
@endsection
