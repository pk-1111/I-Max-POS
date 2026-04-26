<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserOrderController extends Controller
{
   //  order

    public function orderList(Request $request){
        // dd($request->all());
       $request->validate([

          'name'  => 'required',
          'phone'  => 'required',
          'address'  => 'required',
          'paymentType'  => 'required',
          'payslipImage'  => 'required',

       ]);

     // store payslip history


      $paymentHistoryData = [
        'user_name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'payslip_image'  => $request->payslipImage,
        'payment_method' => $request->paymentType,
        'order_code' => $request->orderCode,
        'total_amt' => $request->totalAmount

      ];

      if($request->hasFile('payslipImage')){
        $fileName = uniqid() . $request->file('payslipImage')->getClientOriginalName();
        $request->file('payslipImage')->move(public_path() . '/payslip/' , $fileName);
        $paymentHistoryData['payslip_image'] = $fileName;
      }

      PaymentHistory::create($paymentHistoryData);

      // order and clear cart

      $orderProduct =  Session::get('tempCart');
    //   dd($orderProduct);

    foreach($orderProduct as $item){

        Order::create([
            'user_id' => $item['user_id'],
            'product_id' => $item['product_id'],
            'count' => $item['count'],
            'order_code' => $item['order_code'],
            'total_amount' => $item['total_amount'],
            // 'capacity' => $item['capacity'],
            // 'color' => $item['color'],
            'status' => 0 // Pending status
        ]);

        //cart delete

        Cart::where('user_id',$item['user_id'])->where('product_id',$item['product_id'])->delete();
    }
     return to_route('orderPage');
  }



  public function orderPage() {

//    dd($request->totalAmount);




     $order = Order::where('user_id',Auth::user()->id)
              ->select('orders.*','orders.status','products.id as product_id','products.image as product_image','products.name as product_name','products.price as product_price')
                      ->leftJoin('products','orders.product_id','products.id')
                      ->orderBy('created_at','desc')
                      ->get()
                      ->groupBy('order_code')
                     ;


                    //   dd($cart->toArray());

     $cart = Cart:: where('carts.user_id',Auth::user()->id)
                     ->select('carts.capacity','carts.color')
                     ->get();
                    //  dd($cart->toArray());
               $payslipData  =   PaymentHistory::get();
            //    dd($payslipData->toArray());


    //   $orderProduct = Session::get('tempCart');

    // dd($order->toArray());




    return view('user.shop.order.orderListPage',compact('order','payslipData','cart'));
    }
  }

