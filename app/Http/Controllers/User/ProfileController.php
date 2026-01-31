<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        // $user = auth()->user();
        // return view("pages.user.account",compact("user"));
        return view("pages.user.account");
    }
}
