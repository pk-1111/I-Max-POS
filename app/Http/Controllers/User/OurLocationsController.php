<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;

class OurLocationsController extends Controller
{
   // ourLocation direct page
  public function locationPage(){
    return view('user.ourLocations.our_locations');
  }
}
