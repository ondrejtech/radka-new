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
        Schema::table('ProductCategoryAttributeValue', function (Blueprint $table) {
            $table->foreign(['AttributeCode'], 'fk_attrval_attribute')->references(['AttributeCode'])->on('ProductCategoryAttribute')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductCategoryAttributeValue', function (Blueprint $table) {
            $table->dropForeign('fk_attrval_attribute');
        });
    }
};
