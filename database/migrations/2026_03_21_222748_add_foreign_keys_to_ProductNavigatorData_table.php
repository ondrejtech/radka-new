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
        Schema::table('ProductNavigatorData', function (Blueprint $table) {
            $table->foreign(['AttributeCode'], 'fk_navdata_attribute')->references(['AttributeCode'])->on('ProductCategoryAttribute')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ProId'], 'fk_navdata_product')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['ValueCode'], 'fk_navdata_value')->references(['ValueCode'])->on('ProductCategoryAttributeValue')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductNavigatorData', function (Blueprint $table) {
            $table->dropForeign('fk_navdata_attribute');
            $table->dropForeign('fk_navdata_product');
            $table->dropForeign('fk_navdata_value');
        });
    }
};
