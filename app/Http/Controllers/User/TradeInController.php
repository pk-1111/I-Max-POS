<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;

class TradeInController extends Controller
{
     // trade in direct page
  public function tradeInPage(){
    return view('user.tradeIn.trade_in');
  }
}
