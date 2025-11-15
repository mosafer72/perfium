<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Index
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'DESC')->paginate(20);
        return view('Admin.products.index', compact('products'));
    }

    /*
    |--------------------------------------------------------------------------
    | Create
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('Admin.products.create', compact('categories'));
    }

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'english_title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'sku' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',

            'price' => 'required|integer|min:0',
            'discount_percent' => 'nullable|integer|min:0|max:90',
            'quantity' => 'nullable|integer|min:0',

            'type' => 'required|string',
            'image' => 'required|string',
            'gallery' => 'nullable|string',
            'banner' => 'nullable|string',

            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|boolean',
            'show_on_site' => 'required|boolean',

            // TAB-MAIN
            'show_in_tab' => 'nullable|boolean',
            'tab_sort_order' => 'nullable|integer|min:0',
            'tab_image' => 'nullable|string',

            // perfume attributes
            'gender' => 'nullable|string|max:255',
            'nature' => 'nullable|string|max:255',
            'season' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'spread' => 'nullable|string|max:255',
        ]);

        // checkbox
        $data['show_in_tab'] = $request->has('show_in_tab');
        $data['is_new'] = $request->has('is_new');
        $data['is_trending'] = $request->has('is_trending');
        $data['is_best_seller'] = $request->has('is_best_seller');
        // slug auto
        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['title'] . '-' . uniqid());
        } else {
            $data['slug'] = Str::slug($data['slug']);
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'محصول با موفقیت ایجاد شد');
    }

    /*
    |--------------------------------------------------------------------------
    | Edit
    |--------------------------------------------------------------------------
    */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('Admin.products.edit', compact('product', 'categories'));
    }

    /*
    |--------------------------------------------------------------------------
    | Update
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'english_title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'sku' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',

            'price' => 'required|integer|min:0',
            'discount_percent' => 'nullable|integer|min:0|max:90',
            'quantity' => 'nullable|integer|min:0',

            'type' => 'required|string',
            'image' => 'required|string',
            'gallery' => 'nullable|string',
            'banner' => 'nullable|string',

            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|boolean',
            'show_on_site' => 'required|boolean',

            // TAB-MAIN
            'show_in_tab' => 'nullable|boolean',
            'tab_sort_order' => 'nullable|integer|min:0',
            'tab_image' => 'nullable|string',

            // perfume attributes
            'gender' => 'nullable|string|max:255',
            'nature' => 'nullable|string|max:255',
            'season' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'spread' => 'nullable|string|max:255',
        ]);

        // checkbox
        $data['show_in_tab'] = $request->has('show_in_tab');
        $data['is_new'] = $request->has('is_new');
        $data['is_trending'] = $request->has('is_trending');
        $data['is_best_seller'] = $request->has('is_best_seller');
        // slug auto
        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['title'] . '-' . uniqid());
        } else {
            $data['slug'] = Str::slug($data['slug']);
        }

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'محصول با موفقیت ویرایش شد');
    }

    /*
    |--------------------------------------------------------------------------
    | Destroy
    |--------------------------------------------------------------------------
    */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'محصول حذف شد');
    }
}
