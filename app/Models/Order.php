<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = ['user_id','product_id','count','status','capacity','color','order_code','total_amount'];
}
