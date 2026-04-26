@extends('user.layouts.master')


@section('content')
    <section class="text-center py-16 px-4 bg-gray-50">
        <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">Swap Your Old iPhone For New
            Possibilities</h2>
        <h1 class="text-4xl font-bold mb-8">mDrive Trade-In Program</h1>

        <div class="flex justify-center items-center gap-4 mb-10 max-w-4xl mx-auto">
            <img src="{{ asset('user/image/Trade_in_Banner.jpg') }}" alt="Trade In Hands" class="rounded-lg shadow-sm">
        </div>

        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium transition">
            Check Your iPhone Value Here
        </button>
    </section>

    <section class="max-w-4xl mx-auto py-16 px-6">
        <h3 class="text-2xl font-bold text-center mb-8">iPhone Trade-In Prices</h3>

        <div class="overflow-x-auto border border-gray-200 rounded-xl shadow-sm">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-100 text-gray-600 border-b">
                    <tr>
                        <th class="p-4 font-semibold uppercase">Model</th>
                        <th class="p-4 font-semibold uppercase">Storage</th>
                        <th class="p-4 font-semibold uppercase text-right">Estimated Value</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-blue-50 transition">
                        <td class="p-4">iPhone 15 Pro Max</td>
                        <td class="p-4">256GB</td>
                        <td class="p-4 text-right font-bold">2,500,000 Kyats</td>
                    </tr>
                    <tr class="hover:bg-blue-50 transition">
                        <td class="p-4">iPhone 15 Pro</td>
                        <td class="p-4">128GB</td>
                        <td class="p-4 text-right font-bold">2,100,000 Kyats</td>
                    </tr>
                    <tr class="bg-gray-50 hover:bg-blue-50 transition">
                        <td class="p-4">iPhone 14 Plus</td>
                        <td class="p-4">128GB</td>
                        <td class="p-4 text-right font-bold">1,600,000 Kyats</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-[10px] text-gray-400 mt-4 text-center italic">* Prices are subject to change based on device
            condition.</p>
    </section>

    <section class="bg-gray-50 py-16 px-6">
        <h3 class="text-2xl font-bold text-center mb-12">How to trade in?</h3>

        <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                <div class="text-blue-600 font-bold mb-4 uppercase text-xs tracking-widest">Step 1</div>
                <p class="text-gray-600 text-sm">Visit our mDrive store with your old device.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                <div class="text-blue-600 font-bold mb-4 uppercase text-xs tracking-widest">Step 2</div>
                <p class="text-gray-600 text-sm">Our experts will evaluate your device condition.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                <div class="text-blue-600 font-bold mb-4 uppercase text-xs tracking-widest">Step 3</div>
                <p class="text-gray-600 text-sm">Get instant credit towards your new purchase.</p>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto py-16 px-6">
        <h3 class="text-xl font-bold mb-6">Terms & Conditions</h3>
        <ul class="space-y-4 text-gray-500 text-sm list-disc pl-5 leading-relaxed">
            <li>အဟောင်းပေး အသစ်ယူ အစီအစဉ်သည် mDrive ဆိုင်ခွဲများတွင်သာ အကျုံးဝင်ပါသည်။</li>
            <li>စက်ပစ္စည်း၏ အခြေအနေပေါ်မူတည်၍ ဈေးနှုန်း အပြောင်းအလဲ ရှိနိုင်ပါသည်။</li>
            <li>စက်တွင် ပါဝင်သော iCloud Account များအားလုံးအား Sign out လုပ်ထားရပါမည်။</li>
            <li>Trade-in ပြုလုပ်ပြီးပါက ငွေသားပြန်အမ်းပေးခြင်း မရှိဘဲ အသစ်ဝယ်ယူမှုတွင်သာ ခုနှိမ်ပေးမည်ဖြစ်ပါသည်။</li>
        </ul>
    </section>
@endsection
