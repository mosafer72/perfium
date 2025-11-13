<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use View;
abstract class Controller
{
    public function __construct()
    {
        if(auth()->user()){
            $cart =Cart::with("product")->where(['user_id'=>auth()->user()->id])->get();
            View::share('cart', $cart);
        }
      
    }
}
