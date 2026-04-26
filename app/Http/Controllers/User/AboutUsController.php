<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
  // about us direct page
  public function aboutUsPage(){
    return view('user.aboutUs.about_us');
  }

}
