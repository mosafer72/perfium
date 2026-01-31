<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {


        $query = Product::query()->where('is_active', 1);

        // فیلتر دسته‌بندی
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // فیلتر قیمت
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // ترتیب نمایش
        switch ($request->sort) {
            case 'cheap':
                $query->orderBy('price', 'asc');
                break;
            case 'expensive':
                $query->orderBy('price', 'desc');
                break;
            case 'best_seller':
                $query->orderBy('sales_count', 'desc');
                break;
            default:
                $query->latest();
        }


        $perPage = $request->get('per_page', 4);

        $products = $query->paginate($perPage)->withQueryString();

        $categories = Category::all();

         if ($request->ajax()) {
            return view('Pages.productss._list', compact('products'))->render();
        }

        return view('Pages.productss.index', compact('products', 'categories'));
    }


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

        return view('Pages.products.product', compact('product', 'comments', 'related'));
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
            return redirect()->route('products.show', $product->slug);
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

        return view('Pages.productss.product', compact('product', 'comments', 'related'));
    }
}
