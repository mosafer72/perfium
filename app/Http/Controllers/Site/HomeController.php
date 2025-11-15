<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | 1) اسلایدر صفحه اصلی
        |--------------------------------------------------------------------------
        */
        $sliders = Slider::where('is_active', 1)
            ->orderBy('sort_order')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | 2) دسته‌ها – فقط دسته‌هایی که show_in_home = 1 هستند
        | همراه با 4 محصول آخر هر دسته
        |--------------------------------------------------------------------------
        */
        $homeCategories = Category::query()
            ->where('status', 'active')
            ->where('show_in_home', 1)
            ->orderBy('sort_order')
            ->with(['products' => function ($q) {
                $q->where('is_active', 1)
                    ->where('show_on_site', 1)
                    ->orderByDesc('id')
                    ->take(4);
            }])
            ->get();


        /*
        |--------------------------------------------------------------------------
        | 3) discount-main → محصولات دارای تخفیف
        |--------------------------------------------------------------------------
        */
        $discountProducts = Product::query()
            ->where('is_active', true)
            ->where('show_on_site', true)
            ->where('discount_percent', '>', 0)
            ->orderByDesc('discount_percent')
            ->take(12)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | 4) tab-main → محصولاتی که تیک "نمایش در تب" دارند
        |--------------------------------------------------------------------------
        */
        $tabProducts = Product::query()
            ->where('is_active', 1)
            ->where('show_on_site', 1)
            ->where('show_in_tab', 1)
            ->orderBy('tab_sort_order')
            ->orderBy('id', 'DESC')
            ->take(7)  // مثل قالب، ۷ تب
            ->get();


        /*
        |--------------------------------------------------------------------------
        | 5) محصولات جدید – New Arrivals
        |--------------------------------------------------------------------------
        */
        $newProducts = Product::query()
            ->where('is_active', 1)
            ->where('show_on_site', 1)
            ->orderByDesc('id')
            ->take(10)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | 6) پرفروش‌ها – Best Sellers
        |--------------------------------------------------------------------------
        */
        $bestSellers = Product::query()
            ->where('is_active', 1)
            ->where('show_on_site', 1)
            ->orderByDesc('sales_count')   // اگر sales_count نداری، اضافه می‌کنم
            ->take(10)
            ->get();

        $bestSellerProducts = Product::where('is_best_seller', 1)
                ->orderByDesc('id')
                ->take(10)
                ->get();
        /*
        |--------------------------------------------------------------------------
        | 🔥 7) بنرها و برندها (بعداً اضافه می‌کنیم)
        |--------------------------------------------------------------------------
        */
        // $banners = Banner::active()->orderBy('order')->get();
        // $brands = Brand::active()->orderBy('order')->get();


        /*
        |--------------------------------------------------------------------------
        | ⬇️ ارسال همه داده‌ها به صفحه index.blade.php
        |--------------------------------------------------------------------------
        */
        return view('Pages.index', compact(
            'sliders',
            'homeCategories',
            'discountProducts',
            'tabProducts',
            'newProducts',
            'bestSellers',
            'bestSellerProducts'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | تابع کمکی برای دریافت دسته‌ها همراه با ۴ محصول آخر
    | (اگر جای دیگری لازم شد)
    |--------------------------------------------------------------------------
    */
    public function get_categories()
    {
        return Category::query()
            ->where('status', 'active')
            ->where('show_in_home', 1)
            ->orderBy('sort_order')
            ->with(['products' => function ($q) {
                $q->where('is_active', 1)
                  ->where('show_on_site', 1)
                  ->orderByDesc('id')
                  ->take(4);
            }])
            ->get();
    }
}