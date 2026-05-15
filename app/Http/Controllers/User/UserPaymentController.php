<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserPaymentController extends Controller
{
    //  proceed check out

    public function cartTemp(Request $request){

       $orderArray = [] ;

        // logger($request->all());

        foreach($request->all() as $item) {
            array_push($orderArray,[
            'user_id' => $item['user_id'] ,
            'product_id' => $item['product_id'] ,
            'count' => $item['qty'] ,
            'capacity' => $item['capacity'] ,
            'color' => $item['color'] ,
            'status' => 0 ,
            'order_code' => $item['order_code'] ,
            'total_amount' => $item['total_amount']
            ]);


        };


          Session::put('tempCart',$orderArray);

          return response()->json([
            'status'  => 'success'
          ],200);

    }

    // paymentPage

    public function paymentPage(){
          $payments = Payment::orderBy('type','asc')->get();

          $orderProduct = Session::get('tempCart');




      return view('user.shop.payment.paymentPage',compact('payments','orderProduct'));
    }

}
