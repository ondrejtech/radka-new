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
        Schema::table('ProductLogisticData', function (Blueprint $table) {
            $table->foreign(['ProId'], 'fk_logistic_product')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductLogisticData', function (Blueprint $table) {
            $table->dropForeign('fk_logistic_product');
        });
    }
};
