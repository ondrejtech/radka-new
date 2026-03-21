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
        Schema::create('ProductNavigatorData', function (Blueprint $table) {
            $table->integer('ProId');
            $table->string('AttributeCode', 64)->index('fk_navdata_attribute');
            $table->string('ValueCode', 64)->index('fk_navdata_value');

            $table->primary(['ProId', 'AttributeCode', 'ValueCode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductNavigatorData');
    }
};
