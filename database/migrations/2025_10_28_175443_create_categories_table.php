<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            // عنوان دسته (مثلاً: عطر مردانه)
            $table->string('name');

            // برای URL خوانا: men-perfume, women-perfume, ...
            $table->string('slug')->unique();

            // آدرس تصویر/آیکن دسته (مثلاً assets/images/category/cat-1.png)
            $table->string('image')->nullable();

            // ترتیب نمایش در صفحه اصلی / لیست‌ها
            $table->unsignedTinyInteger('sort_order')->default(0);

            // آیا روی صفحه اصلی نمایش داده شود؟
            $table->boolean('show_in_home')->default(true);

            $table->text('description')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
