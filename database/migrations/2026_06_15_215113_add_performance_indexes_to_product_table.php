<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('Product', function (Blueprint $table) {
            // Carousel queries: WHERE CategoryCode IN (...) ORDER BY IsTop DESC, OnStock DESC
            $table->index(['CategoryCode', 'IsTop', 'OnStock'], 'idx_product_category_top_stock');

            // ProductLayout sort: ORDER BY IsTop DESC, EndUserPrice DESC
            $table->index(['CategoryCode', 'IsTop', 'EndUserPrice'], 'idx_product_category_top_price');
        });
    }

    public function down(): void
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->dropIndex('idx_product_category_top_stock');
            $table->dropIndex('idx_product_category_top_price');
        });
    }
};
