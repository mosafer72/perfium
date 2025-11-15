<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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

            // تخفیف برای ۵ تای اول
            $discount = $i <= 5 ? rand(10, 40) : 0;

            Product::create([
                'user_id'=>1,
                'title' => $titles[$i - 1],
                'english_title' => 'Perfume ' . $i,
                'slug' => 'perfume-' . $i,
                'sku' => 'SKU-' . str_pad($i, 4, '0', STR_PAD_LEFT),

                // Descriptions
                'short_description' => 'این یک توضیح کوتاه برای محصول ' . $titles[$i - 1] . ' است.',
                'description' => 'توضیحات کامل محصول ' . $titles[$i - 1] . ' شامل رایحه، نت‌ها و ویژگی‌ها.',

                // Pricing
                'price' => rand(1500000, 9000000),
                'discount_percent' => $discount,
                'quantity' => rand(5, 30),

                // Types
                'type' => 'perfume',

                // Images
                'image' => "assets/images/" . rand(1, 14) . ".webp",
                'gallery' => json_encode([
                    "assets/images/" . rand(1, 14) . ".webp",
                    "assets/images/" . rand(1, 14) . ".webp",
                ]),
                'banner' => "assets/images/banner-" . rand(1, 5) . ".png",

                // Category (فعلاً همه در دسته ۱)
                'category_id' => 1,

                // Boolean
                'is_active' => 1,
                'show_on_site' => 1,

                // Tab Section
                'show_in_tab' => $i <= 5 ? 1 : 0,
                'tab_sort_order' => $i,
                'tab_image' => "assets/images/" . rand(1, 14) . ".webp",

                // Perfume attributes
                'gender' => $i % 2 == 0 ? 'مردانه' : 'زنانه',
                'nature' => 'خنک و شیرین',
                'season' => 'چهار فصل',
                'duration' => rand(1, 3) . ' روز',
                'spread' => rand(1, 2) . ' روز',

                // Highlights for main page
                'is_new' => $i <= 3 ? 1 : 0,
                'is_trending' => $i <= 4 ? 1 : 0,
                'is_best_seller' => $i <= 2 ? 1 : 0,
            ]);
        }
    }
}
