<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // عنوان‌ها
            $table->string('title');
            $table->string('english_title')->nullable();

            // URL / Slug
            $table->string('slug')->unique();

            // SKU
            $table->string('sku')->nullable();

            // توضیحات
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();

            // قیمت‌ها
            $table->unsignedBigInteger('price');
            $table->unsignedTinyInteger('discount_percent')->default(0);
            $table->unsignedInteger('quantity')->default(0);

            // تصاویر
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();
            $table->string('banner')->nullable();

            // نمایش در سایت
            $table->boolean('show_on_site')->default(true);
            $table->boolean('is_active')->default(true);

            // نوع محصول
            $table->string('type')->nullable();

            // دسته‌بندی
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            // کاربر ثبت‌کننده
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // ---- بخش ویژه Tab-Main ----
            $table->boolean('show_in_tab')->default(false);
            $table->unsignedInteger('tab_sort_order')->default(0);
            $table->string('tab_image')->nullable();

            // ---- ویژگی‌های عطری ----
            $table->string('gender')->nullable();   // مردانه / زنانه / یونیسکس
            $table->string('nature')->nullable();   // طبع
            $table->string('season')->nullable();   // فصل مناسب
            $table->string('duration')->nullable(); // ماندگاری
            $table->string('spread')->nullable();   // پخش بو

            // ---- هایلایت‌های صفحه اصلی ----
            $table->boolean('is_new')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_best_seller')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
