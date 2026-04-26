<?php

namespace App\Http\Controllers;

use App\Models\ActionLog;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{
    //  addToCart Page

    public function addToCart(Request $request){

    //  dd($request->all());

       Cart::create([
        'user_id' => $request->userId ,
        'product_id' => $request->productId ,
        'capacity'  => $request->capacity ,
        'color'    =>   $request->color,
        'qty'  => $request->count

       ]);

         // activity logs for add to cart
      $this->actionLogAdd( $request->userId ,$request->productId , 'addToCart');


       $cart = Cart::select('products.id as products_id','carts.id as cart_id','products.image','products.name','products.price','carts.qty','carts.capacity','carts.color')
                      ->leftJoin('products','carts.product_id','products.id')
                      ->where('carts.user_id',Auth::user()->id)
                      ->get();

                    //   dd($cart->toArray());

                    $total = 0;

                    foreach( $cart as $item ) {
                        $total += $item->price * $item->qty;
                    }

        return redirect()->route('cartShow');
    }


     public function cartShow(){

    //  dd($request->all());




       $cart = Cart::select('products.id as product_id','carts.id as cart_id','products.image','products.name','products.price','carts.qty','carts.capacity','carts.color')
                      ->leftJoin('products','carts.product_id','products.id')
                      ->where('carts.user_id',Auth::user()->id)
                      ->get();

                    //   dd($cart->toArray());

                    $total = 0;

                    foreach( $cart as $item ) {
                        $total += $item->price * $item->qty;
                    }

        return view('user.shop.addToCart',compact('cart','total'));
    }


    // cart delete

    public function cartDelete(Request $request) {

           $cartId =  $request->cartId;

           Cart::where('id',$cartId)->delete();


              // activity logs for delete cart
      $this->actionLogAdd( Auth::user()->id ,$cartId, 'cartDelete');

           return response()->json([
             'status'  => 'success'
           ],200);




    }


    public function productList(){
        $product = Product::get();

        return response()->json([
            'data' => $product
        ],200);
    }


    // action log process
    private function actionLogAdd($user_id,$product_id,$action){
         // activity logs
        ActionLog::create([
            'user_id' => Auth::user()->id ,
            'product_id' => $product_id ,
            'action' =>  $action
        ]);

    }

}
