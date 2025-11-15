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

            // عنوان فارسی
            $table->string('title');

            // عنوان انگلیسی (اختیاری)
            $table->string('english_title')->nullable();

            // اسلاگ برای URL
            $table->string('slug')->unique();

            // SKU یا کد محصول
            $table->string('sku')->nullable();

            // توضیح کوتاه
            $table->string('short_description')->nullable();

            // توضیح کامل (HTML)
            $table->longText('description')->nullable();

            // قیمت
            $table->unsignedBigInteger('price');

            // درصد تخفیف (۰ تا ۹۰)
            $table->unsignedTinyInteger('discount_percent')->default(0);

            // موجودی انبار
            $table->unsignedInteger('quantity')->default(0);

            // عکس اصلی محصول
            $table->string('image')->nullable();

            // گالری (JSON از چند عکس)
            $table->json('gallery')->nullable();

            // بنر تبلیغاتی (اختیاری)
            $table->string('banner')->nullable();

            // نمایش یا عدم نمایش روی سایت
            $table->boolean('show_on_site')->default(true);

            // فعال یا غیرفعال بودن محصول
            $table->boolean('is_active')->default(true);

            // نوع محصول (مثلاً: perfume, deodorant, gift-set)
            $table->string('type')->nullable();

            // دسته‌بندی
            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade');

            // کاربر ثبت‌کننده محصول
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
