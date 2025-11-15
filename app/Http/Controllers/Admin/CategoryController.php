<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // لیست دسته‌بندی‌ها
    public function index()
    {
        $categories = Category::orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('Admin.categories.index', compact('categories'));
    }

    // فرم ایجاد دسته
    public function create()
    {
        return view('Admin.categories.create');
    }

    // ذخیره دسته جدید
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|max:255',
            'slug'         => 'nullable|max:255|unique:categories,slug',
            'description'  => 'nullable|string',
            'image'        => 'nullable|string|max:255',
            'sort_order'   => 'nullable|integer|min:0|max:255',
            'show_in_home' => 'nullable|boolean',
            'status'       => 'required|in:active,inactive',
        ]);

        // اگر اسلاگ خالی بود، از عنوان تولید کن
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name'], '-');
        }

        $data['show_in_home'] = $request->boolean('show_in_home');
        $data['sort_order']   = $data['sort_order'] ?? 0;

        Category::create($data);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'دسته‌بندی با موفقیت ایجاد شد.');
    }

    // نمایش جزئیات (اگر بعداً خواستی استفاده کنی)
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.categories.show', compact('category'));
    }

    // فرم ویرایش
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.categories.edit', compact('category'));
    }

    // ذخیره ویرایش
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name'         => 'required|max:255',
            'slug'         => 'nullable|max:255|unique:categories,slug,' . $category->id,
            'description'  => 'nullable|string',
            'image'        => 'nullable|string|max:255',
            'sort_order'   => 'nullable|integer|min:0|max:255',
            'show_in_home' => 'nullable|boolean',
            'status'       => 'required|in:active,inactive',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name'], '-');
        }

        $data['show_in_home'] = $request->boolean('show_in_home');
        $data['sort_order']   = $data['sort_order'] ?? 0;

        $category->update($data);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'دسته‌بندی با موفقیت به‌روزرسانی شد.');
    }

    // حذف دسته
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'دسته‌بندی حذف شد.');
    }
}
