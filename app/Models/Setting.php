<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
 public static function cost(){
 	$shipping_cost=100;
 	return $shipping_cost;

 } 
}
