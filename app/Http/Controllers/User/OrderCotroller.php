<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderCotroller extends Controller
{
    public function index(){
        return view("order.show");
    }

    public function result(Request $request){
        return view("Pages.orders.result");
    }
}
