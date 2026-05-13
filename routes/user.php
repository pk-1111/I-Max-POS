<?php

use App\Http\Controllers\CartController;

use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\BusinessController;
use App\Http\Controllers\User\JoinUsController;
use App\Http\Controllers\User\LearnMoreController;
use App\Http\Controllers\User\OurLocationsController;
use App\Http\Controllers\User\ProtectionController;
use App\Http\Controllers\User\TradeInController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserPaymentController;
use App\Http\Controllers\User\UserShopController;
use Illuminate\Support\Facades\Route;

  Route::group(['prefix' => 'user' ,  'middleware' => 'user'] ,function(){
     Route::get('home',[UserController::class,'userHome'])->name('userHome');

     // Trending Product
     Route::get('all_products',[UserController::class,'all_ProductsPage'])->name('all_ProductsPage');

     //shop
     Route::get('shop',[UserShopController::class,'userShop'])->name('userShop');

     // porduct details

     Route::get('details/{id}',[UserShopController::class,'productDetails'])->name('productDetails');

    //  Route::get('shop/{category}',[UserShopController::class,'shopByCategory'])->name('shopByCategory');

     Route::get('iphone',[UserShopController::class,'iphoneShop'])->name('iphoneShop');

     Route::get('ipad',[UserShopController::class,'ipadShop'])->name('ipadShop');

     Route::get('macbook',[UserShopController::class,'macbookShop'])->name('macbookShop');

     Route::get('iWatch',[UserShopController::class,'iWatchShop'])->name('iWatchShop');

     Route::get('airpods',[UserShopController::class,'airpodsShop'])->name('airpodsShop');

    Route::get('accessories',[UserShopController::class,'accessoriesShop'])->name('accessoriesShop');

     // addToCart

    Route::get('cart',[CartController::class,'cartShow'])->name('cartShow');

    Route::post('addToCart',[CartController::class,'addToCart'])->name('addToCart');

    // cart delete
    Route::get('cart/delete',[CartController::class,'cartDelete'])->name('cartDelete');
    // api  for cart delete
    Route::get('productList',[CartController::class,'productList'])->name('productList');

    // checkout proceed

    Route::get('cart/temp',[UserPaymentController::class,'cartTemp'])->name('cartTemp');

    Route::get('payment',[UserPaymentController::class,'paymentPage'])->name('paymentPage');


    // order

      Route::get('order',[UserOrderController::class,'orderPage'])->name('orderPage');
      Route::post('order',[UserOrderController::class,'orderList'])->name('orderList');






     // learn more
     Route::get('learnMore',[LearnMoreController::class,'learnMorePage'])->name('learnMorePage');
     Route::get('iphone17Pro',[LearnMoreController::class,'iphone17Pro'])->name('iphone17Pro');
     Route::get('iphone17',[LearnMoreController::class,'iphone17'])->name('iphone17');
     Route::get('macBookPro',[LearnMoreController::class,'macBookPro'])->name('macBookPro');

     //business
    Route::get('business',[BusinessController::class,'businessPage'])->name('businessPage');

    //ourLocations
    Route::get('location',[OurLocationsController::class,'locationPage'])->name('locationPage');

    //about us
     Route::get('aboutUs',[AboutUsController::class,'aboutUsPage'])->name('aboutUsPage');
    // protection
    Route::get('protection',[ProtectionController::class,'protectionPage'])->name('protectionPage');

    // join us
    Route::get('joinUs',[JoinUsController::class,'joinUsPage'])->name('joinUsPage');
     Route::post('contactCreate',[JoinUsController::class,'contactCreate'])->name('admin#contactCreate');


    // trade in

     Route::get('tradeIn',[TradeInController::class,'tradeInPage'])->name('tradeInPage');







  });





?>
