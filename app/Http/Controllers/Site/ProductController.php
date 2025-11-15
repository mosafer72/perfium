<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

class ProductController extends Controller
{
    // نمایش بر اساس slug
    public function show($slug)
    {
        $product = Product::with(['category'])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->where('show_on_site', true)
            ->firstOrFail();

        // کامنت‌ها (اگر سیستم کامنت داری)
        $comments = Comment::with('answer')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->get();

        // محصولات مرتبط (همان دسته، به جز خود محصول)
        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->where('show_on_site', true)
            ->orderByDesc('id')
            ->take(8)
            ->get();

        return view('Pages.product.product', compact('product', 'comments', 'related'));
    }

    // اگر خواستی با id هم ساپورت بشه
    public function showById($id)
    {
        $product = Product::with(['category'])
            ->where('id', $id)
            ->where('is_active', true)
            ->where('show_on_site', true)
            ->firstOrFail();

        // ریدایرکت قشنگ به slug
        if ($product->slug) {
            return redirect()->route('product.show', $product->slug);
        }

        // اگر slug نداره، از همین ویو استفاده کن
        $comments = Comment::with('answer')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->get();

        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->where('show_on_site', true)
            ->orderByDesc('id')
            ->take(8)
            ->get();

        return view('Pages.product.product', compact('product', 'comments', 'related'));
    }
}
