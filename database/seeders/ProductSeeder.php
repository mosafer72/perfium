<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $titles = [
            'لالیک انکر نویر',
            'بلو شنل ادو پرفیوم',
            'تق هرمس',
            'مارلی پگاسوس',
            'ورساچه پور هوم',
            'میسون فرانسیس باکارات',
            'کلایو کریستین ایکس',
            'بولگاری من این بلک',
            'شنل کوکو مادمازل',
            'دیور ساواج الکسیر'
        ];

        for ($i = 1; $i <= 10; $i++) {

            // تخفیف برای پنج محصول اول
            $discount = $i <= 5 ? rand(10, 40) : 0;

            // تصویر اصلی
            $mainImage = "assets/images/products/product" . rand(1, 14) . ".jpg";

            // گالری 3 عکس رندوم
            $gallery = [
                "assets/images/products/product" . rand(1, 14) . ".jpg",
                "assets/images/products/product" . rand(1, 14) . ".jpg",
                "assets/images/products/product" . rand(1, 14) . ".jpg",
            ];

            Product::create([
                'user_id' => 1,

                // basic info
                'title' => $titles[$i - 1],
                'english_title' => 'Perfume ' . $i,
                'slug' => Str::slug('perfume-' . $i),
                'sku' => 'SKU-' . str_pad($i, 4, '0', STR_PAD_LEFT),

                // description
                'short_description' => 'این یک توضیح کوتاه برای محصول ' . $titles[$i - 1] . ' است.',
                'description' => 'توضیحات کامل محصول ' . $titles[$i - 1] . ' شامل رایحه، نت‌ها، تجربه مصرف‌کننده و کیفیت ساخت.',

                // price
                'price' => rand(1500000, 9000000),
                'discount_percent' => $discount,
                'quantity' => rand(5, 30),

                // type
                'type' => 'perfume',

                // images
                'image' => $mainImage,
                'gallery' => json_encode($gallery),
                'banner' => "assets/images/banners/banner-" . rand(1, 5) . ".jpg",

                // category (موقت)
                'category_id' => 1,

                // flags
                'is_active' => 1,
                'show_on_site' => 1,

                // tab-main
                'show_in_tab' => $i <= 5 ? 1 : 0,
                'tab_sort_order' => $i,
                'tab_image' => "assets/images/products/product" . rand(1, 14) . ".jpg",

                // perfume specs
                'gender' => $i % 2 == 0 ? 'مردانه' : 'زنانه',
                'nature' => $i % 2 == 0 ? 'گرم و شیرین' : 'خنک و ملایم',
                'season' => $i % 2 == 0 ? 'فصول سرد' : 'فصول گرم',
                'duration' => rand(1, 3) . ' روز',
                'spread' => rand(1, 2) . ' روز',

                // homepage badges
                'is_new' => $i <= 3 ? 1 : 0,
                'is_trending' => $i <= 4 ? 1 : 0,
                'is_best_seller' => $i <= 2 ? 1 : 0,
            ]);
        }
    }
}
