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
        Schema::create('ProductCommodity', function (Blueprint $table) {
            $table->string('CommodityCode', 64)->primary();
            $table->string('CommodityName');
            $table->string('CommodityParentCode', 64)->nullable()->index('fk_commodity_parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductCommodity');
    }
};
