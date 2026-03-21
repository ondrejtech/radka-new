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
        Schema::table('ProductExtInfoCode', function (Blueprint $table) {
            $table->foreign(['InfoCode'], 'fk_extinfo_info')->references(['InfoCode'])->on('ProductInformation')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ProId'], 'fk_extinfo_product')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductExtInfoCode', function (Blueprint $table) {
            $table->dropForeign('fk_extinfo_info');
            $table->dropForeign('fk_extinfo_product');
        });
    }
};
