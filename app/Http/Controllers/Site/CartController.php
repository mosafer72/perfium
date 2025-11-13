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
        $cart=Cart::where(["user_id"=>auth()->user()->id,"product_id" => $product->id])->first();
        if(!$cart){
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'qty' => 1,
                "unit_price"=>$product->price
            ]);
            return redirect()->route('product.show_more',["id"=>$id])->with('success', 'بنر با موفقیت ایجاد شد.');
        }else{
            return redirect()->route('product.show_more',["id"=>$id])->with('warning', 'این محصول در سید خرید شما وجود دارد!');
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
}
