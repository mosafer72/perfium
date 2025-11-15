<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'sku',
        'short_description',
        'description',

        'price',
        'discount_percent',
        'quantity',

        'type',
        'image',
        'gallery',
        'banner',

        'category_id',
        'is_active',
        'show_on_site',

        // TAB-MAIN fields
        'show_in_tab',
        'tab_sort_order',
        'tab_image',

        // perfume attributes
        'gender',
        'nature',
        'season',
        'duration',
        'spread',
        'category_id','is_active','show_on_site',
        'show_in_tab','tab_sort_order','tab_image',
        'is_new','is_trending','is_best_seller'
    ];

    protected $casts = [
        'price'           => 'integer',
        'discount_percent'=> 'integer',
        'quantity'        => 'integer',
        'is_active'       => 'boolean',
        'show_on_site'    => 'boolean',
        'show_in_tab'     => 'boolean',
        'tab_sort_order'  => 'integer',
        'is_new' => 'boolean',
        'is_trending' => 'boolean',
        'is_best_seller' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    public  function category()
    {
        return $this->belongsTo(Category::class);
    }
     public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // اگر سبد خرید / سفارش داری اینو فعال کن
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    // قیمت نهایی پس از تخفیف
    public function getFinalPriceAttribute()
    {
        if ($this->discount_percent > 0) {
            return intval($this->price - ($this->price * $this->discount_percent / 100));
        }
        return $this->price;
    }

    // گالری به‌صورت آرایه
    public function getGalleryArrayAttribute()
    {
        if (!$this->gallery) return [];
        return explode(',', $this->gallery);
    }

    // URL تصویر اصلی
    public function getImageUrlAttribute()
    {
        return $this->image ? asset($this->image) : null;
    }

    // URL تصویر تب
    public function getTabImageUrlAttribute()
    {
        return $this->tab_image ? asset($this->tab_image) : null;
    }

    // URL گالری
    public function getGalleryUrlsAttribute()
    {
        $arr = [];
        foreach ($this->gallery_array as $g) {
            $arr[] = asset($g);
        }
        return $arr;
    }

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    // ساخت slug خودکار
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = $value
            ? Str::slug($value)
            : Str::slug($this->title . '-' . uniqid());
    }
}
