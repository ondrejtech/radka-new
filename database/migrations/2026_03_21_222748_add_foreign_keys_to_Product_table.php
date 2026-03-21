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
        Schema::table('Product', function (Blueprint $table) {
            $table->foreign(['CategoryCode'], 'fk_product_category')->references(['CategoryCode'])->on('ProductCategory')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['CommodityCode'], 'fk_product_commodity')->references(['CommodityCode'])->on('ProductCommodity')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['IndexCode1'], 'fk_product_index1')->references(['IndexCode'])->on('ProductIndexTree1')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['IndexCode2'], 'fk_product_index2')->references(['IndexCode'])->on('ProductIndexTree2')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['ProducerCode'], 'fk_product_producer')->references(['ProducerCode'])->on('ProductProducer')->onUpdate('no action')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->dropForeign('fk_product_category');
            $table->dropForeign('fk_product_commodity');
            $table->dropForeign('fk_product_index1');
            $table->dropForeign('fk_product_index2');
            $table->dropForeign('fk_product_producer');
        });
    }
};
