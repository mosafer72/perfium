<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show()
    {
        $banners = Cart::orderBy('created_at', 'desc')->get();
        return view('Pages.cart.show', compact('banners'));
    }

    //
    public function add($id)
    {
        $product=Product::findOrFail($id);
        // return response()->json($product->id);
        $cart=Cart::where(["user_id"=>1,"product_id" => $product->id])->first();
        if(!$cart){
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'qty' => 1,
                "unit_price"=>$product->price
            ]);
            return response()->json([
                "message"=>"عملیات با موفقیت انجام شد"
            ]);
        }else{
            return response()->json([
                "message"=>"این محصول در سبد خرید شما موجود است."
            ]);
        }

    }


    public function delete($id)
    {
       $cart=Cart::where(["user_id"=>auth()->user()->id,"product_id" => $id])->first();
        if($cart){
                $cart->delete();
                return redirect()->back()->with('success', 'بنر با موفقیت ویرایش شد.');
        }else{
            abort(404);
        }


    }

    public function cart_ajaxـlist(){

        $cart=Cart::with("product")->where(["user_id"=>auth()->user()->id])->get();

        return response()->json([
            'status' => true,
            'items'  => $cart
        ]);
    }
}
