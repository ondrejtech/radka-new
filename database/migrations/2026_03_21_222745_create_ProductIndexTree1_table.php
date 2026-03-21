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
        Schema::create('ProductIndexTree1', function (Blueprint $table) {
            $table->string('IndexCode', 64)->primary();
            $table->string('CommodityCode', 64)->nullable()->index('fk_indextree1_commodity');
            $table->string('IndexName');
            $table->string('IndexSort')->nullable();
            $table->string('IndexSortCode')->nullable();
            $table->integer('IndexLevel')->nullable();
            $table->integer('IndexOrder')->nullable();
            $table->string('IndexCodeName')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductIndexTree1');
    }
};
