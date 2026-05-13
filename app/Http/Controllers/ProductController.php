<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class ProductController extends Controller
{
    // direct product create Page

    public function productCreatePage(){
         $categories = Category::get();
        return view('admin.product.productCreate',compact('categories'));
    }


     // create product
    public function productCreate(Request $request){
        $this->checkProductValidation($request,"create");
       $product = $this->getProductData($request);

       if($request->hasFile('image')){
          // store new image
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/product/',$fileName);

            $product['image'] = $fileName;
        } else {
            $product = null;
        }

         $newProduct =  Product::create($product);

         if($request->filled('rate') && $request->rate != null ){
            Discount::create([
              'product_id' => $newProduct->id,
              'rate' => $request->rate,
            ]);
         }



        Alert::success('Product Create', 'Product Created Successfully...');




                  return back();
       }



      // direct product list

      public function productList($amt = 'default' ){

       $products = Product::select('categories.title as category_name','products.id','products.name','products.image','products.price','products.category_id','products.stock','discounts.rate as rate')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->leftJoin('discounts','products.id','discounts.product_id')
       ->when(request('searchKey'),function($query){
            $query->whereAny(['products.name','categories.title'] , 'like', '%'.request('searchKey').'%');

            // dd($query);
          
        });

        

        if($amt != 'default') {
            $products = $products->where('stock',"<=",3);
        }


        $products = $products->orderBy('products.created_at','desc')->get();

        //   dd($products->toArray());

        return view('admin.product.productList',compact('products'));
      }


      //detail product

    public function adminProductDetails($id) {

    $productDetail = Product::select('products.id','products.name','products.price','products.description','products.image','products.stock as available_item','categories.title as category_name')
        ->leftJoin('categories','products.category_id','categories.category_id')
        ->where('products.id',$id)
        ->first();

       
    

        return view('admin.product.productDetails',compact('productDetail'));
    }
     



    //update page

    public function updateProductPage($id){
        $categories = Category::get();
        $product = Product::where('id',$id)->first();

        return view('admin.product.productUpdate',compact('product','categories'));
    }

    //update product

    public function updateProduct(Request $request){
         $this->checkProductValidation($request,'update');
    $productData = $this->getProductData($request);

     if($request->hasFile('image')){
          // store new image
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/product/',$fileName);

            $productData['image'] = $fileName;
        }

      Product::where('id',$request->productId)->update($productData);

         if($request->filled('rate')){
            Discount::updateOrCreate([
              'product_id' => $request->productId,
              'rate' => $request->rate,
            ]);
         }



        Alert::success('Product Update', 'Product Updated Successfully...');




                  return back();


    }

     //delete product

    public function deleteProduct($id){
        Product::where('id',$id)->delete();

         Alert::success('Product Delete', 'Product Deleted Successfully...');

          return back();
    }














     // request product data
    private function getProductData($request){
        return [

            'name'         =>  $request->name,
            'price'        =>  $request->price,
            'description'  =>  $request->description,
            'category_id'  =>  $request->categoryId,
            'stock'        =>  $request->stock,
            // 'rate'         =>  $request->rate

        ];
    }

    // check product validation
    public function checkProductValidation($request,$action){
        $rules =[
            'name'  => 'required|unique:products,name,' . $request->productId ,
            'categoryId'  => 'required',
            'price'  => 'required|numeric|min:1',
            'stock'  => 'required|numeric|max:999',
            'description'  => 'required|max:2000',
            'rate' => 'nullable|numeric|min:0|max:100'
        ];

        $rules['image'] = $action == 'create'  ?   'required|mimes:png,jpg,jpeg,webp,svg|file'  :  'mimes:png,jpg,jpeg,webp,svg|file';

        $message = [];

        $request->validate($rules,$message);
    }

}
