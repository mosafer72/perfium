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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('province')->nullable();
            $table->unsignedInteger('city')->nullable();
            $table->unsignedInteger('address')->nullable();
            $table->unsignedInteger('postalcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn("province");
            $table->dropColumn("city");
            $table->dropColumn("address");
            $table->dropColumn("postalcode");
        });
    }
};
