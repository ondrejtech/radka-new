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
        Schema::create('ProductSuperCategory', function (Blueprint $table) {
            $table->string('SuperCategoryCode', 64)->primary();
            $table->string('SuperCategoryName');
            $table->string('ParentSuperCategoryCode', 64)->nullable()->index('fk_supercat_parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductSuperCategory');
    }
};
