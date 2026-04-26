@extends('user.layouts.master')

@section('content')
   <div class="min-h-screen w-full flex items-center justify-center bg-indigo-100 p-4">
        <div class="bg-white rounded-3xl shadow-xl max-w-4xl w-full flex flex-col md:flex-row overflow-hidden border border-gray-100">
        
        <div class="bg-blue-50 p-8 md:w-2/5 flex flex-col justify-between">
            <div>
                <h1 class="text-2xl font-bold text-indigo-900 mb-2">Payment methods</h1>
                <p class="text-indigo-600 text-sm mb-8">You've one more step to go...</p>

          
                    <div class="space-y-6 ">
                    <div class="bg-blue-100 p-4 rounded-xl border border-blue-200 ">
                        <p class="text-xl text-black font-semibold uppercase mb-2">1. Account Info :  <span class="text-black"></span></p>
                      @foreach ($payments as $item)
                            <p class="text-gray-700 font-medium">Account Type : <span class="text-indigo-800">{{$item->type}}</span></p>
                            <p class="text-gray-700 font-medium">Name : <span class="text-indigo-800">{{$item->account_name}}</span></p>
                            <p class="text-gray-700 font-medium">Account : <span class="text-indigo-800">{{$item->account_number}}</span></p> 
                            <hr>
                      @endforeach
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-xs text-gray-400 font-semibold mb-3">WE ACCEPT FOLLOWING CARDS</p>
                        <div class="flex gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="h-6" alt="Visa">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" class="h-6" alt="Mastercard">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-6" alt="Paypal">
                        </div>
                    </div>
                </div>
             
            </div>

            <div class="mt-8">
                <p class="text-xs text-gray-500">Need Support? <a href="#" class="text-blue-600 font-semibold underline">Contact Us</a></p>
            </div>
        </div>

        <div class="p-8 md:w-3/5">
            <div class="flex justify-between items-start mb-6">
                <h2 class="text-xl font-bold text-gray-800">Payment Info</h2>
                <button class="text-gray-400 hover:text-gray-600">✕</button>
            </div>

            <form action="{{route('orderPage')}}" method="post" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">User Name</label>
                    <input type="text" name="name"    value="{{ Auth::user()->name }}" readonly  placeholder="User Name..." class="@error('name') is-invalid @enderror  w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition">
                     @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number</label>
                    <input type="text" name="phone" placeholder="09xxxxxxxx" class=" @error('phone') is-invalid @enderror  w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition">
                      @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label class="block  text-sm font-semibold text-gray-700 mb-1">Address</label>
                    <textarea placeholder="Address..." name="address" rows="2" class=" @error('address') is-invalid @enderror w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"></textarea>
                      @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Choose Payment</label>
                          <select name="paymentType" id="" class=" form-select @error('paymentType') is-invalid @enderror ">
                            <option value="{{ old('paymentType') }}">Choose Payment methods...
                            </option>
                            @foreach ($payments as $item)
                                <option value="{{ $item->type }}"
                                    @if (old('paymentType') == $item->id) selected @endif>
                                    {{ $item->type }}</option>
                            @endforeach

                        </select>
                        @error('paymentType')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Receipt</label>
                        <input type="file" name="payslipImage" class="@error('payslipImage') is-invalid @enderror w-full text-xs text-gray-500 file:mr-2 file:py-2 file:px-3 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        @error('payslipImage')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-xl flex justify-between items-center border border-dashed border-gray-300">
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Order Code</p>
                        <input type="hidden" name="orderCode"
                                                        value="{{ $orderProduct[0]['order_code'] }}">
                        <p class="font-bold text-gray-800" name="orderCode">{{$orderProduct[0]['order_code']}}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500 uppercase">Total Amount</p>
                         <input type="hidden" name="totalAmount"
                                                        value="{{$orderProduct[0]['total_amount']}}">
                        <p class="font-bold text-indigo-600" >{{$orderProduct[0]['total_amount']}} MMK</p>
                    </div>
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-lg shadow-indigo-200 transition-all flex items-center justify-center gap-2 mt-4">
                    <span>🛒</span> Order Now...
                </button>
                
                <a href="#" class="block text-center text-sm text-gray-400 hover:text-gray-600 mt-2">← Go back</a>
            </form>
        </div>
    </div>
   </div>
  

     
@endsection
