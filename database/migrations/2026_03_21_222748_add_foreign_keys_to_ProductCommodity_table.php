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
        Schema::table('ProductCommodity', function (Blueprint $table) {
            $table->foreign(['CommodityParentCode'], 'fk_commodity_parent')->references(['CommodityCode'])->on('ProductCommodity')->onUpdate('no action')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductCommodity', function (Blueprint $table) {
            $table->dropForeign('fk_commodity_parent');
        });
    }
};
