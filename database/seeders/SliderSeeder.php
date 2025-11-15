<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Slider::truncate();

        Slider::create([
            'title'       => "جذاب‌ترین عطرهای روز دنیا",
            'subtitle'    => "پرفروش‌ترین عطرهای ۲۰۲۵",
            'image'       => "/assets/images/intro/slide1.png",
            'button_text' => "مشاهده محصولات",
            'button_link' => "/shop",
            'sort_order'  => 1,
            'is_active'   => true,
        ]);

        Slider::create([
            'title'       => "جدیدترین رایحه‌ها با پرفیوم",
            'subtitle'    => "ترندها و برندهای مطرح جهانی",
            'image'       => "/assets/images/intro/slide2.png",
            'button_text' => "خرید عطر",
            'button_link' => "/shop",
            'sort_order'  => 2,
            'is_active'   => true,
        ]);
    }
}
