<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;

class ProtectionController extends Controller
{
   // protection direct page

    public function protectionPage(){
    return view('user.protection.protectionPage');
  }
}
