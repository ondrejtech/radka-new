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
        Schema::create('ProductCategoryAttribute', function (Blueprint $table) {
            $table->string('AttributeCode', 64);
            $table->string('AttributeName');
            $table->integer('CategoryCode')->index('fk_attr_category');
            $table->boolean('IsPrimary')->nullable();
            $table->string('FilterOperator', 64)->nullable();

            $table->primary(['AttributeCode', 'CategoryCode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductCategoryAttribute');
    }
};
