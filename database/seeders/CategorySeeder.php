<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $items = [
            [
                'name'         => 'عطر مردانه',
                'slug'         => 'men-perfume',
                'description'  => 'مناسب آقایان؛ از روزمره تا رسمی',
                'image'        => 'assets/images/category/cat-1.png',
                'sort_order'   => 1,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'عطر زنانه',
                'slug'         => 'women-perfume',
                'description'  => 'روایح شیرین، گلی و خاص برای بانوان',
                'image'        => 'assets/images/category/cat-2.png',
                'sort_order'   => 2,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'عطر یونیسکس',
                'slug'         => 'unisex-perfume',
                'description'  => 'روایح مشترک و مدرن برای همه',
                'image'        => 'assets/images/category/cat-3.png',
                'sort_order'   => 3,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'بادی اسپلش و میست',
                'slug'         => 'body-splash',
                'description'  => 'مناسب استفاده روزانه روی بدن',
                'image'        => 'assets/images/category/cat-4.png',
                'sort_order'   => 4,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'عطر جیبی و دکانتر',
                'slug'         => 'pocket-perfume',
                'description'  => 'حمل آسان برای کیف و سفر',
                'image'        => 'assets/images/category/cat-5.png',
                'sort_order'   => 5,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'ست هدیه',
                'slug'         => 'gift-set',
                'description'  => 'ست‌های جذاب برای هدیه دادن',
                'image'        => 'assets/images/category/cat-6.png',
                'sort_order'   => 6,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'عطر بچه‌گانه',
                'slug'         => 'kids-perfume',
                'description'  => 'روایح ملایم و مناسب کودکان',
                'image'        => 'assets/images/category/cat-7.png',
                'sort_order'   => 7,
                'show_in_home' => true,
                'status'       => 'active',
            ],
            [
                'name'         => 'اسپری و دئودورانت',
                'slug'         => 'deodorant-spray',
                'description'  => 'کنترل تعریق و بوی خوش روزانه',
                'image'        => 'assets/images/category/cat-8.png',
                'sort_order'   => 8,
                'show_in_home' => true,
                'status'       => 'active',
            ],
        ];

        foreach ($items as $item) {
            Category::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
