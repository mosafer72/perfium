<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        $categories=$this->get_categories();
        $last_products=Product::limit(10)->get();
        return View( "Pages.index",compact(["sliders","categories","last_products"]));
    }

    public function get_categories(){
        $categories = Category::query()
            ->with(['products' => function ($q) {
                $q->orderByDesc('id')   // یا ->latest('created_at')
                ->take(4);
                // اگر فقط محصولات قابل‌نمایش/فعال می‌خوای:
                // ->where('is_active', true)
                // ->where('show_on_site', true)
                // ->where(function($w){ $w->whereNull('active_at')->orWhere('active_at','<=',now()); });
            }])
            // اگر فقط دسته‌های فعال:
            ->where('status', 'active')
            ->get();
        return $categories;
    }
}
