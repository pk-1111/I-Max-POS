<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     //  direct admin home page

    public function adminHome(){
        return view('admin.home.adminMainPage');
    }
}
