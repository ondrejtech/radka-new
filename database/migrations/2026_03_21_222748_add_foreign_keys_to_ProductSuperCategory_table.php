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
        Schema::table('ProductSuperCategory', function (Blueprint $table) {
            $table->foreign(['ParentSuperCategoryCode'], 'fk_supercat_parent')->references(['SuperCategoryCode'])->on('ProductSuperCategory')->onUpdate('no action')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductSuperCategory', function (Blueprint $table) {
            $table->dropForeign('fk_supercat_parent');
        });
    }
};
