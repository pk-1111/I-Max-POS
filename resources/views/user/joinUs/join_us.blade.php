@extends('user.layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4 bg-gray-900">
    <div class="w-full max-w-5xl flex flex-col md:flex-row shadow-2xl rounded-[20px] overflow-hidden border border-white/10"
         style="background: rgba(17, 24, 39, 0.7); backdrop-filter: blur(20px);">

        <div class="w-full md:w-5/12 p-8 lg:p-12 text-white"
             style="background: rgba(75, 26, 209, 0.25);">
            <h2 class="text-3xl font-bold mb-8 border-b border-white/20 pb-4">Contact Me</h2>

            <div class="space-y-6">
                <div>
                    <label class="text-blue-400 text-xs font-bold uppercase tracking-wider block mb-1">Office Manager</label>
                    <p class="text-xl">U Mg Mg</p>
                </div>

                <div>
                    <label class="text-blue-400 text-xs font-bold uppercase tracking-wider block mb-1">Phone / Account</label>
                    <p class="text-xl">09444777888</p>
                </div>

                <div>
                    <label class="text-blue-400 text-xs font-bold uppercase tracking-wider block mb-1">Email</label>
                    <p class="text-lg opacity-90">pizzahunter@gmail.com</p>
                </div>

                <div>
                    <label class="text-blue-400 text-xs font-bold uppercase tracking-wider block mb-1">Address</label>
                    <p class="text-sm opacity-80 leading-relaxed">
                        MoKaungPagoda(14-BC), No-2,<br> MinMaHaw Road, Yangon.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-7/12 p-8 lg:p-12">
            <h2 class="text-3xl font-bold text-white mb-8">Customer Feedback</h2>

            <form action="{{route('admin#contactCreate')}}" method="post" class="space-y-5">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" readonly
                            class="w-full px-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 transition shadow-inner"
                            placeholder="User Name">
                    </div>
                    <div>
                        <input type="text" name="phone"
                            class="w-full px-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 transition shadow-inner"
                            placeholder="09xxxxxxxx">
                    </div>
                </div>

                <div>
                    <input type="text" name="address"
                        class="w-full px-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 transition shadow-inner"
                        placeholder="Your Address...">
                </div>

                 <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Receipt</label>
                        <input type="file" name="contact_image" class=" w-full text-xs text-gray-500 file:mr-2 file:py-2 file:px-3 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">

                    </div>

                <div>
                    <textarea name="contact_reason" rows="4"
                        class="w-full px-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 transition shadow-inner resize-none"
                        placeholder="Write your feedback here..."></textarea>
                </div>

                <button type="submit"
                    class="w-full py-4 bg-green-600 hover:bg-green-500 text-white font-bold rounded-xl shadow-lg transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i>
                    Send Now
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
