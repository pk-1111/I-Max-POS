<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ActionLog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserShopController extends Controller
{
  // shop direct page
  public function userShop(){

    return view('user.shop.shopPage');
  }

  // product details

  // product details
    public function productDetails($id){
        $product = Product::select('products.id','products.name','products.price','products.description','products.image','products.stock as available_item','categories.title as category_name')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->where('id',$id)
        ->first();

        $productList = Product::select('products.id','products.name','products.price','products.description','products.image','categories.title as category_name')
        ->leftJoin('categories','products.category_id','categories.category_id','categories.title as category_name')
        ->where('categories.title',$product['category_name'])
        ->where('products.id','!=',$product['id'])
        ->get();


          // activity logs for details
      $this->actionLogAdd(Auth::user()->id ,$id , 'seen');


      // view count

      $view_count = ActionLog::where('product_id',$id )->where('action','seen')->get();






        return view('user.shop.details.productDetails',compact('product','productList','view_count'));
    }


   // iphone shop direct page
  public function iphoneShop(Request $request){





       $category = Category::get();

    //    dd($category->toArray());




      if($category){
         $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
        ->where('categories.title','iphone')
        ->orderBy('products.created_at','desc')->get();

        // dd($products->toArray());





    return view('user.shop.iphone.iphoneShop',compact('products'));
      }

      return "Category Not found";
  }

   // ipad shop direct page
  public function ipadShop(Request $request){
      $category = Category::get();

    //    dd($category->toArray());




      if($category){
         $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
        ->where('categories.title','ipad')
        ->orderBy('products.created_at','desc')->get();

        // dd($products->toArray());
    return view('user.shop.ipad.ipadShop',compact('products'));
  }


      return "Category Not found";
  }

   // ipad shop direct page
  public function macbookShop(Request $request){
       $category = Category::get();

    //    dd($category->toArray());




      if($category){
         $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
        ->where('categories.title','macbook  ')
        ->orderBy('products.created_at','desc')->get();

        // dd($products->toArray());
    return view('user.shop.macbook.macbookShop',compact('products'));
  }
    return "Category Not found";
  }

   // ipad shop direct page
  public function iWatchShop(Request $request){
       $category = Category::get();

    //    dd($category->toArray());




      if($category){
         $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
        ->where('categories.title','i-watch')
        ->orderBy('products.created_at','desc')->get();

        // dd($products->toArray());
    return view('user.shop.i-watch.i-watchShop',compact('products'));
  }
   return "Category Not found";
  }


   // ipad shop direct page
  public function airpodsShop(Request $request){
        $category = Category::get();

    //    dd($category->toArray());




      if($category){
         $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
        ->where('categories.title','airpod')
        ->orderBy('products.created_at','desc')->get();

        // dd($products->toArray());
    return view('user.shop.airpods.airpodsShop',compact('products'));
  }
  return "Category Not found";
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
