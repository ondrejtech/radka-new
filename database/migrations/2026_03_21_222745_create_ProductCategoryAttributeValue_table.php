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
        Schema::create('ProductCategoryAttributeValue', function (Blueprint $table) {
            $table->string('ValueCode', 64)->primary();
            $table->string('AttributeCode', 64)->index('fk_attrval_attribute');
            $table->string('Value');
            $table->string('ValueSort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductCategoryAttributeValue');
    }
};
