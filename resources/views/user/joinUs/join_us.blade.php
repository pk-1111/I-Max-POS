@extends('user.layouts.master')

@section('content')
    <div class="min-h-screen flex items-center justify-center p-4 bg-gray-100">

        <div
            class="w-full max-w-5xl flex flex-col md:flex-row shadow-xl rounded-[20px] overflow-hidden border border-gray-200 bg-white">


            <div class="w-full md:w-5/12 p-8 lg:p-12 text-white bg-indigo-700">
                <h2 class="text-3xl font-bold mb-8 border-b border-white/20 pb-4">Contact Me</h2>

                <div class="space-y-6">
                    <div>
                        <label class="text-indigo-200 text-xs font-bold uppercase tracking-wider block mb-1">Office
                            Manager</label>
                        <p class="text-xl">U Mg Mg</p>
                    </div>

                    <div>
                        <label class="text-indigo-200 text-xs font-bold uppercase tracking-wider block mb-1">Phone /
                            Account</label>
                        <p class="text-xl">09444777888</p>
                    </div>

                    <div>
                        <label class="text-indigo-200 text-xs font-bold uppercase tracking-wider block mb-1">Email</label>
                        <p class="text-lg opacity-90">i-max@gmail.com</p>
                    </div>

                    <div>
                        <label class="text-indigo-200 text-xs font-bold uppercase tracking-wider block mb-1">Address</label>
                        <p class="text-sm opacity-80 leading-relaxed">
                            MoKaungPagoda(14-BC), No-2,<br> MinMaHaw Road, Yangon.
                        </p>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-7/12 p-8 lg:p-12 bg-white">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Customer Feedback</h2>

                <form action="{{ route('admin#contactCreate') }}" method="post" enctype="multipart/form-data"
                    class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-bold text-gray-500 mb-1 block uppercase">User Name</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" readonly
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition shadow-sm"
                                placeholder="User Name">
                        </div>
                        <div>
                            <label class="text-xs font-bold text-gray-500 mb-1 block uppercase">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition shadow-sm @error('phone') border-red-500 @enderror"
                                placeholder="09xxxxxxxx">
                            @error('phone')
                                <small class="text-red-500 text-xs mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 mb-1 block uppercase">Address</label>
                        <input type="text" name="address" value="{{ old('address') }}"
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition shadow-sm @error('address') border-red-500 @enderror"
                            placeholder="Your Address...">
                        @error('address')
                            <small class="text-red-500 text-xs mt-1">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="bg-indigo-50 p-4 rounded-xl border border-indigo-100">
                        <label class="block text-xs font-bold uppercase tracking-wider text-indigo-600 mb-2">Upload Receipt
                            (Optional)</label>
                        <input type="file" name="contact_image"
                            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 cursor-pointer">
                        @error('contact_image')
                            <small class="text-red-500 text-xs mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 mb-1 block uppercase">Message</label>
                        <textarea name="contact_reason" rows="4"
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition shadow-sm resize-none @error('contact_reason') border-red-500 @enderror"
                            placeholder="Write your feedback here...">{{ old('contact_reason') }}</textarea>
                        @error('contact_reason')
                            <small class="text-red-500 text-xs mt-1">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        Send Now
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
