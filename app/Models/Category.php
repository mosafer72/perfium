<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    // فیلدهایی که قابل پر شدن هستند
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'sort_order',
        'show_in_home',
        'status',
    ];

    // هر دسته چند محصول دارد
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')
            ->where('is_active', 1);
    }
    // فقط دسته‌های فعال
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // دسته‌هایی که باید روی صفحه اصلی نمایش داده شوند
    public function scopeHome($query)
    {
        return $query->where('show_in_home', true);
    }
}
