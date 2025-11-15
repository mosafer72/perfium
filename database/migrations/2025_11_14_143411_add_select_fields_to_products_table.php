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
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_new')->default(false);     // تب جدیدترین ها
            $table->boolean('is_trending')->default(false); // ترندها
            $table->boolean('is_best_seller')->default(false); // پرفروش ها
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('is_new');
            $table->dropColumn('is_trending');
            $table->dropColumn('is_best_seller');
        });
    }
};
