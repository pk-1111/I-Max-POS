 <?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

  Route::group(['prefix'  => 'admin' ,  'middleware' => ['auth','admin'] ] ,function(){
     Route::get('home',[AdminController::class,'adminHome'])->name('adminHome');


     // category list

    Route::group(['prefix' => 'category'], function(){
       Route::get('categoryList',[CategoryController::class,'categoryListPage'])->name('categoryListPage');
       Route::post('createCategory',[CategoryController::class,'createCategory'])->name('createCategory');

       //delete category
       Route::get('deleteCategory/{category_id}',[CategoryController::class,'deleteCategory'])->name('deleteCategory');

       // update category
       Route::get('updateCategoryPage/{category_id} ',[CategoryController::class,'updateCategoryPage'])->name('updateCategoryPage');
       Route::post('updateCategory/{category_id} ',[CategoryController::class,'updateCategory'])->name('updateCategory');
    });

    // profile

      Route::group(['prefix' => 'profile'], function(){

      // admin change password
       Route::get('changePassword',[ProfileController::class,'changePasswordPage'])->name('changePasswordPage');
       Route::post('changePassword',[ProfileController::class,'changePassword'])->name('changePassword');

       //  admin profile

       Route::get('profile',[ProfileController::class,'adminProfile'])->name('adminProfile');
       Route::get('profileEdit',[ProfileController::class,'adminProfileEdit'])->name('adminProfileEdit');
       Route::post('profileUpdate',[ProfileController::class,'adminProfileUpdate'])->name('adminProfileUpdate');

       // add new admin

       Route::get('addNewAdminPage',[ProfileController::class,'addNewAdminPage'])->name('addNewAdminPage');
       Route::post('addNewAdmin',[ProfileController::class,'newAdminCreate'])->name('newAdminCreate');


       // admin list

         Route::get('adminListPage',[ProfileController::class,'adminListPage'])->name('adminListPage');

         });

          // user list

         Route::get('userListPage',[ProfileController::class,'userListPage'])->name('userListPage');

         });


         // Product

         Route::group(['prefix' => 'product'],function(){

        // productCreate

         Route::get('productCreate',[ProductController::class,'productCreatePage'])->name('productCreatePage');
         Route::post('productCreate',[ProductController::class,'productCreate'])->name('productCreate');


          //detail product
         Route::get('product/details/{id}',[ProductController::class,'adminProductDetails'])->name('adminProductDetails');

         // update product

          Route::get('update/page/{id}',[ProductController::class,'updateProductPage'])->name('updateProductPage');
          Route::post('update/page',[ProductController::class,'updateProduct'])->name('updateProduct');


         //delete
          Route::get('delete/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');




         // product list

          Route::get('productList/{amt?}',[ProductController::class,'productList'])->name('admin#productList');

         });


    //  payment methods

    Route::group(['prefix' => 'paymentMethod'],function(){
       Route::get('payment',[PaymentController::class,'paymentMethodPage'])->name('paymentMethodPage');
       Route::post('payment/create',[PaymentController::class,'paymentMethodCreate'])->name('paymentMethodCreate');
    });

    Route::group(['prefix' => 'order'],function(){
       Route::get('order',[OrderController::class,'orderList'])->name('admin#orderList');
       Route::get('order/details/{orderCode}',[OrderController::class,'orderDetails'])->name('admin#orderDetails');



        // pending accept

      Route::get('changeStatus',[OrderController::class,'changeStatus'])->name('admin#changeStatus');
      Route::get('confirmOrder',[OrderController::class,'confirmOrder'])->name('admin#confirmOrder');

      Route::get('cancleOrder',[OrderController::class,'cancleOrder'])->name('admin#cancleOrdancle');

    });

     // customer_contact
    Route::group(['prefix' => 'contact'],function(){
       Route::get('contact',[ContactController::class,'customer_contact'])->name('admin#customer_contact');


    });







?>
