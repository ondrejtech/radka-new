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
        Schema::create('ProductCategory', function (Blueprint $table) {
            $table->integer('CategoryCode');
            $table->string('CategoryName');
            $table->integer('SuperCategoryCode');
            $table->integer('ParentSuperCategoryCode');

            $table->primary(['CategoryCode', 'SuperCategoryCode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductCategory');
    }
};
