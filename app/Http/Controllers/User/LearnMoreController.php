<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;

class LearnMoreController extends Controller
{
    // learnMore direct page
  public function learnMorePage(){
    return view('user.learnMore.learn_more');
  }

  // iphone 17 pro direct

   public function iphone17Pro(){
    return view('user.learnMore.iphone.iphone17Pro');
  }

   // iphone 17 pro direct

   public function iphone17(){
    return view('user.learnMore.iphone.iphone17');
  }

  // iphone 17 pro direct

   public function macBookPro(){
    return view('user.learnMore.macbook.macBookPro');
  }

}
