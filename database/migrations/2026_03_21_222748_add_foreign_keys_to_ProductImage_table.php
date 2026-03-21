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
        Schema::table('ProductImage', function (Blueprint $table) {
            $table->foreign(['ProId'], 'fk_image_product')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductImage', function (Blueprint $table) {
            $table->dropForeign('fk_image_product');
        });
    }
};
