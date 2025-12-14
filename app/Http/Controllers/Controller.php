<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use View;
abstract class Controller
{
    public function __construct()
    {
        if(!auth()->user()){
            Auth::loginUsingId(1);
        }
        if(auth()->user()){
            $cart =Cart::with("product")->where(['user_id'=>auth()->user()->id])->get();
            View::share('cart', $cart);
        }

    }
}
