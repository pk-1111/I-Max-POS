@extends('user.layouts.master')


@section('content')
    <main class="bg-black text-white font-sans">

        <section class="max-w-7xl mx-auto px-4 py-20 text-center">
            <p class="text-zinc-500 font-medium mb-2">MacBook Pro</p>
            <h1
                class="text-6xl md:text-7xl font-bold tracking-tighter mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Pro anywhere.
            </h1>
            <p class="text-lg text-zinc-400 max-w-2xl mx-auto mb-8">
                Unleash the ultimate power for professionals.
                Available with M2 and M2 Pro.
            </p>
            <div class="flex justify-center mb-16">
                <img src="{{ asset('user/image/macbookPro.jpg') }}" alt="MacBook Pro"
                    class="w-full max-w-5xl rounded-2xl shadow-xl">
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 py-20 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-zinc-900 rounded-2xl p-8">
                <h3 class="text-3xl font-bold mb-4">Performance</h3>
                <p class="text-zinc-400 mb-6">Level up.</p>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('user/mac_image/M2chip.jpg') }}" alt="M2 Chip" class="w-100 h-100">
                    <div>
                        <p class="text-3xl font-bold">M2</p>
                        <p class="text-zinc-400">chip</p>
                    </div>
                    <div class="ml-auto text-right">
                        <p class="text-xl font-bold">1.4x</p>
                        <p class="text-zinc-400 text-sm">faster</p>
                        <p class="text-xl font-bold">6x</p>
                        <p class="text-zinc-400 text-sm">faster</p>
                    </div>
                </div>
            </div>
            <div class="bg-zinc-900 rounded-2xl p-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-3xl font-bold mb-4">See the big picture.</h3>
                    <ul class="list-disc list-inside text-zinc-400 space-y-2 mb-6">
                        <li>1600 nits peak brightness</li>
                        <li>P3 Wide Color</li>
                        <li>True Tone</li>
                    </ul>
                </div>
                <img src="{{ asset('user/mac_image/macbookTone.jpg') }}" alt="MacBook Display" class="mt-auto rounded-xl">
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 py-20 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-zinc-900 rounded-2xl p-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-3xl font-bold mb-4">Just your type.</h3>
                    <p class="text-zinc-400 mb-6">
                        Magic Keyboard provides a comfortable and quiet typing experience.
                    </p>
                </div>
                <img src="macbook-keyboard.png" alt="MacBook Keyboard" class="mt-auto rounded-xl">
            </div>
            <div class="bg-zinc-900 rounded-2xl p-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-3xl font-bold mb-4">Make connections. Make magic.</h3>
                    <ul class="list-disc list-inside text-zinc-400 space-y-2 mb-6">
                        <li>Thunderbolt 4 ports</li>
                        <li>HDMI port</li>
                        <li>SDXC card slot</li>
                        <li>MagSafe 3 port</li>
                    </ul>
                </div>
                <img src="macbook-ports.png" alt="MacBook Ports" class="mt-auto rounded-xl">
            </div>
        </section>

    </main>
@endsection
