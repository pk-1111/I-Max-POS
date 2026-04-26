<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
     // business direct page
  public function businessPage(){
    return view('user.business.businessPage');
  }
}
