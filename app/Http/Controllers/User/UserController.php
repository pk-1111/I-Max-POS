<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //  direct user home page

    public function userHome(){
          $trendingProducts = Product::select('products.*')
                        ->join(DB::raw('(SELECT MIN(id) as id FROM products GROUP BY category_id) as unique_products'),function($join){
                            $join->on('products.id','=','unique_products.id');
                        })
                        ->take(5)
                        ->get();

        return view('user.home.mainPage',compact('trendingProducts'));
    }

    // all_products in view all

    public function all_ProductsPage(){
        $products = Product::get();

        // dd($products->toArray());

        return view('user.home.allProducts',compact('products'));
    }


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

        // dd($product->toArray());

        return view('user.shop.details.productDetails',compact('product','productList'));
    }
}
