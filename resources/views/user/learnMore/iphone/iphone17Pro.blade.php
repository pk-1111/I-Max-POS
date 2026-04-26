@extends('user.layouts.master')


@section('content')
    <main class="bg-black text-white font-sans">

  <section class="py-20 text-center">
    <h2 class="text-orange-500 text-2xl font-semibold mb-2 italic">iPhone 17</h2>
    <h1 class="text-6xl md:text-8xl font-bold tracking-tighter mb-10 text-transparent bg-clip-text bg-gradient-to-b from-orange-300 to-orange-600">
      PRO
    </h1>
    <div class="flex justify-center mb-8">
      <img src="{{ asset('user/image/iPhone17Pro.jpg') }}" alt="iPhone 17 Pro" class="w-full max-w-4xl px-4">
    </div>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full text-sm font-medium">
      Buy now
    </button>
  </section>

  <section class="max-w-7xl mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div class="bg-zinc-900 rounded-3xl p-8 overflow-hidden flex flex-col items-center text-center">
        <h3 class="text-xl font-semibold mb-4 text-zinc-300">Innovative design for exceptional performance.</h3>
        <img src="{{ asset('user/image/iPhone17ProBody.jpg') }}" alt="Design" class="mt-auto h-64 object-contain">
      </div>

      <div class="bg-zinc-900 rounded-3xl p-8 overflow-hidden flex flex-col items-center text-center">
        <h3 class="text-xl font-semibold mb-4 text-zinc-300">Hard-forged aluminium unibody.</h3>
        <img src="{{ asset('user/image/iPhone17ProBody.jpg') }}" alt="Material" class="mt-auto h-64 object-contain">
      </div>

      <div class="bg-zinc-900 rounded-3xl p-8 md:col-span-2 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2">
           <p class="text-orange-400 font-medium mb-2 leading-tight">The ultimate pro camera system.</p>
           <h3 class="text-3xl font-bold mb-4 leading-tight">48MP Telephoto camera. With 5x optical-quality zoom.</h3>
        </div>
        <img src="{{ asset('user/image/iPhone17ProCamera.jpg') }}" alt="Camera" class="md:w-1/2 rounded-2xl">
      </div>

    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-zinc-900 p-10 rounded-3xl text-center">
       <span class="text-zinc-500 block mb-2">Up to</span>
       <h4 class="text-5xl font-bold">2.5x</h4>
       <p class="text-zinc-400 mt-2">faster CPU performance</p>
    </div>
    <div class="bg-zinc-900 p-10 rounded-3xl text-center border border-green-900/30">
       <span class="text-zinc-500 block mb-2">Up to</span>
       <h4 class="text-5xl font-bold text-green-500">12 more</h4>
       <p class="text-zinc-400 mt-2 text-green-500">hours video playback</p>
    </div>
    <div class="bg-zinc-900 p-10 rounded-3xl text-center">
       <span class="text-zinc-500 block mb-2">48MP</span>
       <h4 class="text-5xl font-bold">Pro</h4>
       <p class="text-zinc-400 mt-2">camera system with ProMotion</p>
    </div>
  </section>

</main>
@endsection
