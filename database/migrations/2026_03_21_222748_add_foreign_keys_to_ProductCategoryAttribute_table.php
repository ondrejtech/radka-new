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
        Schema::table('ProductCategoryAttribute', function (Blueprint $table) {
            $table->foreign(['CategoryCode'], 'fk_attr_category')->references(['CategoryCode'])->on('ProductCategory')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductCategoryAttribute', function (Blueprint $table) {
            $table->dropForeign('fk_attr_category');
        });
    }
};
