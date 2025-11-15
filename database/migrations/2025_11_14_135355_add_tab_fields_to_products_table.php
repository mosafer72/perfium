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
            $table->boolean('show_in_tab')->default(false);
            $table->integer('tab_sort_order')->default(0);
            $table->string('tab_image')->nullable();

            // فیلدهای اطلاعات عطری (برای tab-main)
            $table->string('gender')->nullable();   // مردانه/زنانه/یونیسکس
            $table->string('nature')->nullable();   // طبع: خنک/تلخ/گرم …
            $table->string('season')->nullable();   // فصل مناسب
            $table->string('duration')->nullable(); // ماندگاری
            $table->string('spread')->nullable();   // پخش بو
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('show_in_tab');
            $table->dropColumn('tab_sort_order');
            $table->dropColumn('tab_image');
             // فیلدهای اطلاعات عطری (برای tab-main)
            $table->dropColumn('gender');
            $table->dropColumn('nature');
            $table->dropColumn('season');
            $table->dropColumn('duration');
            $table->dropColumn('spread');
        });
    }
};
