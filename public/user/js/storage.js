function selectOption(type, value, element) {
    // ၁။ Hidden Input ထဲကို တန်ဖိုးထည့်မယ်
    document.getElementById('input-' + type).value = value;

    // ၂။ Label မှာ ရွေးလိုက်တဲ့စာသား ပြောင်းပေးမယ်
    document.getElementById('display-' + type).innerText = value;

    // ၃။ တခြား button တွေက active class ကို ဖယ်ပြီး လက်ရှိနှိပ်တဲ့ button ကို active လုပ်မယ်
    const buttons = document.querySelectorAll('.' + type + '-btn');
    buttons.forEach(btn => {
        btn.classList.remove('bg-gray-800', 'text-white', 'border-gray-800');
        btn.classList.add('bg-white', 'text-gray-400', 'border-gray-200');
    });

    // လက်ရှိ Button ကို style ပြောင်းမယ်
    element.classList.remove('bg-white', 'text-gray-400', 'border-gray-200');
    element.classList.add('bg-gray-800', 'text-white', 'border-gray-800');
}
